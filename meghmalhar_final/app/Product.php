<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','size','size_fit','color','material','care','alternation','madetoorder','shippingtime','description','photo','price'];
}
