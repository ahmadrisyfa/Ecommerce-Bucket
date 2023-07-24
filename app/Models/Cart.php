<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table ='cart';
    protected $guarded =['id'];

    public function product()
    {
    return $this->belongsTo(Product::class, 'product_id');
    }
    public function size()
    {
    return $this->belongsTo(Size::class, 'size_id');
    }
    public function customlembar()
    {
    return $this->belongsTo(CustomLembar::class, 'custom_lembar_id');
    }
}
