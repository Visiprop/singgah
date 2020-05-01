<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Cart;
use App\Product;
use App\Category;
use App\Invoice;
use App\Notification;


class InvoiceController extends Controller
{
    //
    public function invoiceClient($id)
    {
        $carts = Cart::where('invoice_id', '=', $id)->get();
        return view('pages.order.detail', compact('carts'));        
    }

    public function invoiceCMSDetail($id)
    {                        
        $carts = Cart::where('invoice_id', '=', $id)->get();      
        return view('pages.cms.invoice', compact('carts'));
    }

    public function invoiceCMSUpdate($id)
    {                        
        $invoice = Invoice::where('id', '=', $id)->first();  
        date_default_timezone_set("Asia/Bangkok");
        $data = [
            'status' => 1,            
            'updated_at' => date("Y/m/d"),   
        ];        

        $invoice->update($data);

        $this->invoiceSentNotif($invoice);

        return redirect()->route('cms.invoice',$id);
        
    }

    public function invoiceSentNotif(Invoice $invoice)
    {                
        $data = [
            'user_id'         => $invoice->user->id,
            'notif_type_id'         => 5,
            'title'         => 'Invoice Recevied',
            'value'        => 'Hai, Invoice #' . $invoice->code . ' kamu telah terbit. Segera lakukan pembayaran ',
            'created_at' => date('Y-m-d H:i:s')
        ];
                    
        Notification::create($data);

    }

    public function invoiceCMSPaid($id)
    {                        
        $invoice = Invoice::where('id', '=', $id)->first();  
        date_default_timezone_set("Asia/Bangkok");
        $data = [
            'status' => 2,            
            'updated_at' => date("Y/m/d"),   
        ];        

        $invoice->update($data);
        $this->invoicePaidNotif($invoice);

        return redirect()->route('cms.invoice',$id);
        
    }

    public function invoicePaidNotif(Invoice $invoice)
    {                
        $data = [
            'user_id'         => $invoice->user->id,
            'notif_type_id'         => 7,
            'title'         => 'Invoice Paid',
            'value'        => 'Pembayaran Invoice #' . $invoice->code . ' telah diterima',
            'created_at' => date('Y-m-d H:i:s')
        ];
                    
        Notification::create($data);

    }

    public function invoiceReject($id)
    {                        
        $invoice = Invoice::where('id', '=', $id)->first();          
        $data = [
            'status' => 3,                        
        ];        

        $invoice->update($data);
        $this->invoiceRejectNotif($invoice);

        return redirect()->route('myorder',$id);
        
    }

    public function invoiceRejectNotif(Invoice $invoice)
    {                
        $data = [
            'user_id'         => $invoice->user->id,
            'notif_type_id'         => 6,
            'title'         => 'Invoice Canceled',
            'value'        => 'Kamu telah membatalkan Invoice #' . $invoice->code ,
            'created_at' => date('Y-m-d H:i:s')
        ];
                    
        Notification::create($data);

    }

    
}
