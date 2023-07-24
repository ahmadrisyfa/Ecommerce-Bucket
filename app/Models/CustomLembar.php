<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomLembar extends Model
{
    use HasFactory;
    protected $table ='custom_lembar';
    protected $guarded = ['custom_lembar'];

    public function cart()
    {
    return $this->hasMany(Cart::class, 'custom_lembar_id');
    }
}
