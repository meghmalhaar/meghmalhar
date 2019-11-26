<?php

namespace App\Http\Controllers;

use http\QueryString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ShortBy extends Controller
{
    public function priceLth(){
        $product = new Product();
        $products = $product->orderBy('price','asc')->get()->toArray();

        $output = '';
        foreach(array_chunk($products,3) as $product){
            $output .=
                '<div class="card-deck">';

            foreach($product as $prdct){
                $output .='<div class="col-lg-4 col-sm-6">
                        <div class="card prodcard">
                        <a href="'. url('/product_item/'.$prdct['id']).'"><img class="card-img-top" src="'. asset('image/web/category/'.$prdct['photo']).'" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title product-item-name"><a href="#productview"> '.$prdct['name'] .'</a></h5>
                            <p class="card-title product-item-price">₹ '.$prdct['price'] .'</p>
                            <div class="btn-group btngrpprdlist" aria-label="">
                                <button type="button" class="btn btn-outline btnprdlist"><i class="far fa-heart"></i></button>
                                <button type="button" class="btn btn-outline  btnprdlist"><i class="fas fa-cart-plus"></i><a href="'. url('/product_item/'.$prdct['id']).'"> Add to cart</a></button>
                            </div>
                        </div>
                    </div>
                    </div>';
            }

            $output.='</div>';
        }

        print_r($output);

    }

    public function priceHtl(){
        $product = new Product();
        $products = $product->orderBy('price','desc')->get()->toArray();

        $output = '';
        foreach(array_chunk($products,3) as $product){
            $output .=
                '<div class="card-deck">';

            foreach($product as $prdct){
                $output .='<div class="col-lg-4 col-sm-6">
                        <div class="card prodcard">
                        <a href="'. url('/product_item/'.$prdct['id']).'"><img class="card-img-top" src="'. asset('image/web/category/'.$prdct['photo']).'" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title product-item-name"><a href="#productview"> '.$prdct['name'] .'</a></h5>
                            <p class="card-title product-item-price">₹ '.$prdct['price'] .'</p>
                            <div class="btn-group btngrpprdlist" aria-label="">
                                <button type="button" class="btn btn-outline btnprdlist"><i class="far fa-heart"></i></button>
                                <button type="button" class="btn btn-outline  btnprdlist"><i class="fas fa-cart-plus"></i><a href="'. url('/product_item/'.$prdct['id']).'"> Add to cart</a></button>
                            </div>
                        </div>
                    </div>
                    </div>';
            }

            $output.='</div>';
        }

        print_r($output);

    }

    public function category(Request $request){

         $cat = $request->all();
         

         $products = Product::where('category', $cat['cat'])->get()->toArray();


          $output = '';
        foreach(array_chunk($products,3) as $product){
            $output .=
                '<div class="card-deck">';

            foreach($product as $prdct){
                $output .='<div class="col-lg-4 col-sm-6">
                        <div class="card prodcard">
                        <a href="'. url('/product_item/'.$prdct['id']).'"><img class="card-img-top" src="'. asset('image/web/category/'.$prdct['photo']).'" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title product-item-name"><a href="#productview"> '.$prdct['name'] .'</a></h5>
                            <p class="card-title product-item-price">₹ '.$prdct['price'] .'</p>
                            <div class="btn-group btngrpprdlist" aria-label="">
                                <button type="button" class="btn btn-outline btnprdlist"><i class="far fa-heart"></i></button>
                                <button type="button" class="btn btn-outline  btnprdlist"><i class="fas fa-cart-plus"></i><a href="'. url('/product_item/'.$prdct['id']).'"> Add to cart</a></button>
                            </div>
                        </div>
                    </div>
                    </div>';
            }

            $output.='</div>';
        }

        print_r($output);
    }
    
    public function price(Request $request){
        $price = $request->all();
         
         $products = DB::table('products')->select('*')->whereBetween('price', array($price['min'], $price['max']))
                    ->get()->toArray();
           
          $output = '';
        foreach(array_chunk($products,3) as $product){
            $output .=
                '<div class="card-deck">';

            foreach($product as $prdct){
                $output .='<div class="col-lg-4 col-sm-6">
                        <div class="card prodcard">
                        <a href="'. url('/product_item/'.$prdct->id).'"><img class="card-img-top" src="'. asset('image/web/category/'.$prdct->photo).'" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title product-item-name"><a href="#productview"> '.$prdct->name .'</a></h5>
                            <p class="card-title product-item-price">₹ '.$prdct->price .'</p>
                            <div class="btn-group btngrpprdlist" aria-label="">
                                <button type="button" class="btn btn-outline btnprdlist"><i class="far fa-heart"></i></button>
                                <button type="button" class="btn btn-outline  btnprdlist"><i class="fas fa-cart-plus"></i><a href="'. url('/product_item/'.$prdct->id).'"> Add to cart</a></button>
                            </div>
                        </div>
                    </div>
                    </div>';
            }

            $output.='</div>';
        }

        print_r($output);
    }
    
    public function searchColor(Request $request){
        $color = $request->all();
        
        $string_version = implode('|', $color['color']);
        //$products = Product::whereRaw("FIND_IN_SET(?,size) > 0",$size['size'])->get()->toArray();
        
        $products = DB::table('products')->select('*')->whereRaw("CONCAT(',',color,',') REGEXP ',(".$string_version."),'")->get()->toArray();

        
        $output = '';
        foreach(array_chunk($products,3) as $product){
        $output .=
                '<div class="card-deck">';

            foreach($product as $prdct){
                    $output .='<div class="col-lg-4 col-sm-6">
                        <div class="card prodcard">
                        <a href="'. url('/product_item/'.$prdct->id).'"><img class="card-img-top" src="'. asset('image/web/category/'.$prdct->photo).'" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title product-item-name"><a href="#productview"> '.$prdct->name .'</a></h5>
                            <p class="card-title product-item-price">₹ '.$prdct->price .'</p>
                            <div class="btn-group btngrpprdlist" aria-label="">
                                <button type="button" class="btn btn-outline btnprdlist"><i class="far fa-heart"></i></button>
                                <button type="button" class="btn btn-outline btnprdlist"><i class="fas fa-cart-plus"></i><a href="'. url('/product_item/'.$prdct->id).'"> Add to cart</a></button>
                            </div>
                        </div>
                    </div>
                    </div>';
            }
                    
                $output.='</div>';
        }
        print_r($output);

        //return \View::make('product_item')->with('products', $products);
    }
}
