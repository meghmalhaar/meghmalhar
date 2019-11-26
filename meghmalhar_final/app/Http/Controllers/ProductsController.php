<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use http\QueryString;
use Illuminate\Http\Request;
use App\Product;
use App\product_size;


class ProductsController extends Controller
{
    public function index()
    {
        
        $products = Product::select('*')->where('type','women');

        $products = $products->paginate(12);
        
        //print_r(array_chunk($products,3));
      
             return view('product_item', compact('products'));
        
    }
    
    public function mens_product(){
         $products = Product::select('*')->where('type','men');

        $products = $products->paginate(12);
        
        //print_r(array_chunk($products,3));
        return view('product_item', compact('products'));
    }


    public function product($id){

        $products = Product::where('id',$id)->get();
         $sizes = Product_size::where('product_id',$id)->get();
       // print_r(asset('image/meghmalhaar images/product3.jpg')); die();
        return view('productview',compact('products','sizes'));
    }
    
    

    public function searchSize(Request $request){
        $size = $request->all();
        
        $string_version = implode('|', $size['size']);
        //$products = Product::whereRaw("FIND_IN_SET(?,size) > 0",$size['size'])->get()->toArray();
        
        $products = DB::table('products')->select('*')->whereRaw("CONCAT(',',size,',') REGEXP ',(".$string_version."),'")->get()->toArray();
        
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
    
    public function searchMaterial(Request $request){
        $material = $request->all();
        
        $string_version = implode('|', $material['material']);
        
        $material[] = $material['material'];
        
        $products = DB::Table('products')
        ->select('*')                
        ->Where(function ($query) use($material) {
             for ($i = 0; $i < count($material['material']); $i++){
                $query->orwhere('material', 'like',  '%' . $material['material'][$i] .'%');
             }      
        })->get()->toArray();
        
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

    public function searchCategory(Request $request){
        $size = $request->all();

        $products = Product::whereIn('size', $size['size'])->get()->toArray();

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

    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $product = Product::find($id);
        
       
        
        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

           // return redirect()->back()->with('success', 'Product added to cart successfully!');
            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);

       return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function insertCart(Request $request){

        $req = $request->all();
        $user = auth()->user();
        print_r(json_encode($req));

        die();
        Product::insert(
            ['name' => $req['name'],
             'size' => $req['size'],
             'color'=>'red',
             'description' => 'demo insert product',
             'photo' =>$req['img_name'],
             'price' =>$req['price']
            ]
        );
    }
}
