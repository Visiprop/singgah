<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Validator;
use App\User;
// use User;

class UserController extends BaseController
{
    public function indexCustomer(){
        $users = User::where('role_id', 2)->get();
        // dd($users);
        return view('pages.cms.customers', compact('users'));
    }

    public function login(){
        return view('pages.login');
    }

    public function postLogin(Request $request)
    {
        try{
            Sentinel::authenticate($request->all());
            if(Sentinel::check()) {
                if(Sentinel::getUser()->roles()->first()->slug == 'admin')
                    return redirect()->route('cms.dashboard');
                else
                return redirect()->route('home');
            } else {
                throw new WrongCredentialException("Kombinasi email dan password salah.");
            }
        } catch (WrongCredentialException $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->with(['error' => "Alamat IP anda di ban selama $delay detik."]);
        }
    }

    public function postLogout()
    {
        Sentinel::logout();
        return redirect()->route('login');
    }

    public function setting()
    {
        return view('pages.user.setting');
    }
    public function register()
    {
        return view('pages.register');
    }

    public function registerStore(Request $request)
    {

            $data = [
                'full_name'         => $request->fullName,
                'address'           => $request->address,
                'city'              => $request->city,
                'phone_number'       => $request->phoneNumber,
                'email'             => $request->email,
                'password'          => $request->password
            ];
            // dd($data);

            $user = Sentinel::registerAndActivate($data);
            $role = Sentinel::findRoleBySlug('visitor');
            $user->roles()->attach($role);

            return redirect()->route('login');

    }

    public function registerUpdate(Request $request, $id)
    {
            // $hasher = Sentinel::setHasher($request->password);
            // $rules = [

            // ];
            $data = [
                'full_name'         => $request->full_name,
                'address'           => $request->address,
                'city'              => $request->city,
                'phone_number'       => $request->phone_number,
                'email'             => $request->email,
                'password'          => $request->password
            ];
            // dd($data);

            $user = Sentinel::findById($id);
            $user = Sentinel::update($user, $data);;

            return redirect()->route('profile');

    }

    public function profile()
    {
        $user = User::where('id', '=', Sentinel::getUser()->id)->first();
        return view('pages.profile', compact('user'));
    }
}
