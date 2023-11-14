<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'shipping_phoneNumber',
        'shipping_city',
        'shipping_postalcode',
        'product_id',
        'quantity,'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
       
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }


    
}
