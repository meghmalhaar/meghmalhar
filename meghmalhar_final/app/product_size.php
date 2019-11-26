<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_size extends Model
{
    protected $table = 'product_size';
    protected $fillable = ['product_id','size1','size2','size3','size4','size5'];
}