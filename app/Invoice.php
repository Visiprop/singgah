<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = [
        'user_id',        
        'invoice_id',    
        'coupon_id',    
        'briefURL',        
        'outputURL',
        'status',        

    ];

    public function user()
	{
		return $this->belongsTo('App\User');
    }

    public function coupon()
	{
		return $this->belongsTo('App\Coupon');
    }

    public function cart()
	{
		return $this->hasMany('App\Cart');
    }
    
}
