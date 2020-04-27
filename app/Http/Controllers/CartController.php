<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Cart;
use App\Product;
use App\Category;
use App\Invoice;
use App\TargetAudience;
use App\Style;
use App\Color;
use App\OutputType;
use App\Font;
use App\BriefUrl;
use App\BriefFile;

use Faker\Factory as Faker;

class CartController extends BaseController
{
    public function index()
    {
        $carts = Cart::where('status', '>', 0)->get();
        return view('pages.cms.carts', compact('carts'));
    }

    public function cartClient()
    {
        $tempcarts = Cart::where('user_id', Sentinel::getUser()->id);
        $carts = $tempcarts->where('status', '=', 0)->get();
        return view('pages.cart.index', compact('carts'));
    }

    public function cartList()
    {
        $tempcarts = Cart::where('user_id', Sentinel::getUser()->id);
        $carts = $tempcarts->where('status', '=', 0)->get();
        return response()->json(compact('carts'));
    }

    public function checkout()
    {
        $carts = Cart::where('user_id', Sentinel::getUser()->id)->get();
        $totalCart = 0;
        foreach($carts as $row){
            $totalCart += $row->product->price;
        }
        return view('pages.cart.checkout', compact('carts', 'totalCart'));
    }

    public function myOrder()
    {                
        $invoices = Invoice::where('user_id', '=', Sentinel::getUser()->id)->get();            
        return view('pages.order.list', compact('invoices'));
    }

    public function additem(Request $request)
    {        
        if(Sentinel::check()) {
            $dataCart = [
                'user_id'       => Sentinel::getUser()->id,
                'product_id'    => $request->product_id,                
                'quantity'      => $request->quantity,
                'orientation'   => $request->orientation,
                'size'          => $request->size,
                'duration'      => $request->duration,
                'deadline'      => $request->deadline,
                'status'      => 0,
                'price'      => 0,
            ];
            $targetAudience = $request->target_audience;

            $cart = Cart::create($dataCart);

            BriefUrl::create(["cart_id" => $cart->id, "value" => $request->briefUrl]);

            foreach ($targetAudience as $item) {
                $dataAudience = [ 
                    'cart_id' => $cart->id,
                    'value' => $item["value"] 
                ];
                TargetAudience::create($dataAudience);
            }

            $style = $request->styles;
            foreach ($style as $item) {
                $dataStyle = [ 
                    'cart_id' => $cart->id,
                    'value' => $item["value"] 
                ];
                Style::create($dataStyle);
            }

            $color = $request->color;
            foreach ($color as $item) {
                $dataColor = [ 
                    'cart_id' => $cart->id,
                    'value' => $item["value"] 
                ];
                Color::create($dataColor);
            }

            $output = $request->output;
            foreach ($output as $item) {
                $dataOut = [ 
                    'cart_id' => $cart->id,
                    'value' => $item["value"] 
                ];
                OutputType::create($dataOut);
            }

            $font = $request->font;
            foreach ($font as $item) {
                $dataFont = [ 
                    'cart_id' => $cart->id,
                    'value' => $item["value"] 
                ];
                Font::create($dataFont);
            }
            
            $briefFile = $request->briefFile;
            foreach ($briefFile as $item) {
                $dataBrief = [ 
                    'cart_id' => $cart->id,
                    'value' => $item["value"]
                ];
                BriefFile::create($dataBrief);
            }
            
            $notification = [
                'heading' => 'Berhasil! ',
                'message' => 'Item berhasil ditambahkan ke keranjang.',
                'bgColor' => '#2b6c45',
                'alert-type' => 'success'
            ];
        } else {
            $notification = [
                'heading' => 'Gagal!',
                'message' => 'Anda belum login. Silahkan login terlebih ada',
                'bgColor' => '#990000',
                'alert-type' => 'error'
            ];
        }

        return response()->json($notification);
    }

    public function addInvoice($user_id,$brief_url){
        $data = [
            'user_id'       => $user_id,            
            'status'        => 0,                        
            'briefURL'      => $brief_url,            
        ];        
        
        $invoice = Invoice::create($data);        
        return $invoice;
    }

    public function addOrder(Request $request)
    {
        // dd($request->brief);
        $newInvoice = $this->addInvoice(Sentinel::getUser()->id, $request->brief);
        
        $carts = Cart::where([
            ['user_id', '=', Sentinel::getUser()->id],
            ['status', '=', 0]            
        ]);
        $data = [
            'status'         => 1,
            'invoice_id'        => $newInvoice->id,            
        ];        

        $carts->update($data);
                

        return redirect()->route('profile');

    }

    public function delete($id) 
    {
        $cart = Cart::find($id)->delete(); 
        return redirect()->route('cartUser');
    }




}
