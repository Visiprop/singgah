<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderOutput extends Model
{
    //
    public function order()
	{
		return $this->belongsTo('App\Order');
    }

}
