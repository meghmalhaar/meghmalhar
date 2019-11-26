@extends('layouts.product')
@section('title', 'Products')
@section('content')
<style type="text/css">
   .card-body ul li a {color: black;}
   a {
   color: #000;
   }
   a:hover {
   color: #000;
   text-decoration: none;
   }
</style>
<div class="container">
   <div class="row justify-content-start">
      <div class="col col-md-9">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item dropdown cl"><a href="#">Clothing</a></li>
               <li class="breadcrumb-item ce"><a class="bread cat" href="#"></a></li>
               <!-- <li class="breadcrumb-item active" aria-current="page">Prod. Title</li>-->
            </ol>
         </nav>
      </div>
      <div class="col col-md-3 text-right">
         <!--  <select class="form-control btn-short" id="">
            <div class="short-options">
              <option>Popularity</option>
            <option>Discount</option>
            <option>Price High to Low</option>
            <option>Price Low to Hight</option>
            </div>
            
            </select> -->
         <div class="btn-group">
            <button type="button" style="" class="btn dropdown-toggle btn-short" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort By
            </button>
            
            <div class="dropdown-menu dropdown-menu-right short-dropdown-menu" style="width: width: 13.2vw !important; transform: translate3d(0px, 31px, 0px) !important;">
               {{--<a class="dropdown-item" href="#">Popularity</a>
               <a class="dropdown-item" href="#">Discount</a>
               <a class="dropdown-item" href="#">Price High to Low</a>
               <a class="dropdown-item" href="#">Price Low to High</a>--}}
               <li id="popularity" class="dropdown-item">Popularity</li>
               <li id="discount" class="dropdown-item">Discount</li>
               <li id="prhtl" class="dropdown-item prhtl">Price High to Low</li>
               <li id="prlth" class="dropdown-item prlth">Price Low to High</li>
            </div>
         </div>
         
         <button type="button" data-toggle="collapse" data-target="#mb-sort" class="d-block d-md-none btn btn-primary btn-block mb-3 srt-btn"style="background-color: rgb(71, 133, 158);">Sort By <i class="fas fa-sort-amount-up-alt"></i></button>
         
      </div>
   </div>
   
   <div class="collapse" id="mb-sort">
          <div class="card card-body slide-sort">
            <ul class="sort-by-list">
                
                <li id="popularity">Popularity</li>
               
              
                <li id="discount">Discount</li>
                <li id="prhtl" class="prhtl">Price High to Low</li>
             
              
                <li id="prlth" class="prlth">Price Low to High</li>	
             
            </ul>
          </div>
        </div>
   
   <div class="row justify-content-center">
      <aside class="col-sm-3 sidebar" style="border: none;">
         <div class="card card-filter" style="border: none;">
            <article class="card-group-item">
               <!--  <button type="button" class="btn btn-lg btn-info collapsed" data-toggle="collapse" data-target="#demo">Simple collapsible</button> -->
               <span class="hd_ft-ds">
               <header class="card-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                  
                  <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#RTW">
                     <h6 class="collapseicon">Clothing <i class="ion-ios-plus-empty"></i></h6>
                  </a>
                  <div style="" class="filter-content collapse" id="RTW">
                     <ul class="list-unstyled list-lg sidebarlist">
                        <li class="cloth" alt="festive">Festive Collection</li>
                        <li class="cloth" alt="gown">Couture Gowns</li>
                        <li class="cloth" alt="">Bespoke Bridal</li>
                        <li class="cloth" alt="seasons trend">Season's Trend</li>
                     </ul>
                  </div>
               </header>
               <header class="card-header">
                  <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#JWL">
                     <h6 class="title">JEWELLERY</h6>
                  </a>
               </header>
               <!-- <div style="" class="filter-content collapse show" id="JWL">
                  <div class="card-body">
                      <ul class="list-unstyled list-lg">
                          <li><a href="#">JEWELLERY</a></li>
                      </ul>
                  </div>
                  </div> -->
               <!--  <header class="card-header">
                  <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#FTW">
                      <h6 class="title">FOOTWEAR</h6>
                  </a>
                  </header> -->
               <div style="" class="filter-content collapse show" id="FTW">
                  <!-- <div class="card-body">
                     <ul class="list-unstyled list-lg">
                         <li><a href="#">FOOTWEAR</a></li>
                     </ul>
                     </div>  -->
               </div>
               <header class="card-header">
                  <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#ASS">
                     <h6 class="title">ACCESSORIES</h6>
                  </a>
               </header>
               <div style="" class="filter-content collapse show" id="ASS">
                  <!-- <div class="card-body">
                     <ul class="list-unstyled list-lg">
                         <li><a href="#">ASSESORIES</a></li>
                     </ul>
                     </div>  -->
               </div>
               </span>
               <br>
               <div class="<!--col-md-9 -->order-md-last">
                  <button type="button" data-toggle="collapse" data-target="#mb-filter" class="d-block d-md-none btn btn-primary btn-block mb-3 flt-btn" style="background-color: rgb(71, 133, 158);">Filters<i class="fa fa-filter" aria-hidden="true"></i></button>
                  <div id="filters" class="collapse d-md-block dsk">
                     <header class="card-header">
                        <h6 class="title d-none d-md-block">FILTER BY</h6>
                     </header>
                     <hr style="background-color: #777777; width: 100%; margin-left: 0px;">
                     <header class="card-header">
                        <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#STYLE">
                           <h6 class="title collapseicon">Color<i class="ion-ios-plus-empty"></i></h6>
                        </a>
                     </header>
                     <div style="" class="filter-content collapse" id="STYLE">
                        <div class="card-body">
                           <form>
                              <input type="checkbox" name="color" data-colorhex="white" id="STYLE-1"/>
                              <label for="STYLE-1"><span class="colorDisplay"  style="background:rgb(255, 255, 255)"></span>White</label><br>
                              <input type="checkbox" name="color" data-colorhex="blue" id="STYLE-2"/>
                              <label for="STYLE-2"><span class="colorDisplay" style="background:rgb(60, 68, 119)"></span>Navy Blue</label><br>
                              <input type="checkbox" name="color" data-colorhex="red" id="STYLE-3"/>
                              <label for="STYLE-3"><span class="colorDisplay" style="background:rgb(211, 75, 86)"></span>Red</label><br>
                              <input type="checkbox" name="color" data-colorhex="grey" id="STYLE-4"/>
                              <label for="STYLE-4"><span class="colorDisplay"  style="background:rgb(159, 168, 171)"></span>Grey</label>
                              <div class="colour-more">
                                 <span class="mrtxt">+  more </span>
                                 <div class="morecolor" style="display:none;">
                                    <input type="checkbox" name="color" data-colorhex="white" id="STYLE-1"/>
                                    <label for="STYLE-1"><span class="colorDisplay"  style="background:rgb(255, 255, 255)"></span>White</label><br>
                                    <input type="checkbox" name="color" data-colorhex="blue" id="STYLE-2"/>
                                    <label for="STYLE-2"><span class="colorDisplay" style="background:rgb(60, 68, 119)"></span>Navy Blue</label><br>
                                    <input type="checkbox" name="color" data-colorhex="red" id="STYLE-3"/>
                                    <label for="STYLE-3"><span class="colorDisplay" style="background:rgb(211, 75, 86)"></span>Red</label><br>
                                    <input type="checkbox" name="color" data-colorhex="grey" id="STYLE-4"/>
                                    <label for="STYLE-4"><span class="colorDisplay"  style="background:rgb(159, 168, 171)"></span>Grey</label>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <header class="card-header">
                        <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#material">
                           <h6 class="title collapseicon">Material<i class="ion-ios-plus-empty"></i></h6>
                        </a>
                     </header>
                     <div style="" class="filter-content collapse" id="material">
                        <div class="card-body">
                           <form>
                              <input type="checkbox" name="material" id="Chanderi" data-atr="Chanderi"/>
                              <label for="Chanderi">Chanderi</label><br>
                              <input type="checkbox" name="material" id="Rayon" data-atr="Rayon"/>
                              <label for="Rayon">Rayon</label><br>
                              <input type="checkbox" name="material" id="Cotton"  data-atr="Cotton"/>
                              <label for="Cotton">Cotton</label><br>
                              <input type="checkbox" name="material" id="Georgette" data-atr="Georgette"/>
                              <label for="Georgette">Georgette</label><br>
                              <input type="checkbox" name="material" id="Lycra" data-atr="Lycra"/>
                              <label for="Lycra">Lycra</label><br>
                              <input type="checkbox" name="material" id="Linen" data-atr="Linen"/>
                              <label for="Linen">Linen</label><br>
                              <input type="checkbox" name="material" id="Russian Silk" data-atr="Russian Silk"/>
                              <label for="Russian Silk">Russian Silk</label><br>
                              <input type="checkbox" name="material" id="Muslin" data-atr="Muslin"/>
                              <label for="Muslin">Muslin</label><br>
                              <input type="checkbox" name="material" id="Silk" data-atr="Silk"/>
                              <label for="Silk">Silk</label> <br>
                              <input type="checkbox" name="material" id="Brocade" data-atr="Brocade"/>
                              <label for="Brocade">Brocade</label> <br>
                              <input type="checkbox" name="material" id="fabric" data-atr="fabric"/>
                              <label for="fabric">fabric</label>
                           </form>
                        </div>
                     </div>
                     <header class="card-header">
                        <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#price">
                           <h6 class="title collapseicon">Price<i class="ion-ios-plus-empty"></i></h6>
                        </a>
                     </header>
                     <div style="" class="filter-content collapse" id="price">
                        <div class="card-body">
                           <div id="slider-non-linear-step" class="noUi-target noUi-ltr noUi-horizontal"></div>
                           <div class="noiui-value">
                              <span class="example-val" id="slider-non-linear-step-value"></span>
                              <select id="resellerEarnings" class="no-border fltprice">
                                 <option value="min" selected>Min</option>
                                 <option value="500.00">500.00</option>
                                 <option value="1000.00">1000.00</option>
                                 <option value="2000.00">2000.00</option>
                                 <option value="3000.00">3000.00</option>
                                 <option value="4000.00">4000.00</option>
                                 <option value="5000.00">5000.00</option>
                                 <option value="6000.00">6000.00</option>
                                 <option value="7000.00">7000.00</option>
                                 <option value="8000.00">8000.00</option>
                              </select>
                              <select id="clientPrice" class="no-border fltprice">
                                 <option value="max" selected>Max</option>
                                 <option value="8000.00">8000.00</option>
                                 <option value="10000.00">10000.00</option>
                                 <option value="11000.00">11000.00</option>
                                 <option value="12000.00">12000.00</option>
                                 <option value="13000.00">13000.00</option>
                                 <option value="14000.00">14000.00</option>
                                 <option value="15000.00">15000.00</option>
                                 <option value="16000.00">16000.00</option>
                                 <option value="17000.00">17000.00</option>
                                 <option value="18000.00">18000.00</option>
                                 <option value="19000.00">19000.00</option>
                                 <option value="20000.00">20000.00</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <header class="card-header">
                        <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#SIZE">
                           <h6 class="title collapseicon">Size <i class="ion-ios-plus-empty"></i></h6>
                        </a>
                     </header>
                     <div style="" class="filter-content collapse" id="SIZE">
                        <div class="card-body">
                           <form>
                              <input type="checkbox" name="size" id="XS" data-atr="XS"/>
                              <label for="XS">XS</label><br>
                              <input type="checkbox" name="size" id="S" data-atr="S"/>
                              <label for="S">S</label><br>
                              <input type="checkbox" name="size" id="M" data-atr="M"/>
                              <label for="M">M</label><br>
                              <input type="checkbox" name="size" id="L" data-atr="L"/>
                              <label for="L">L</label><br>
                              <input type="checkbox" name="size" id="XL" data-atr="XL"/>
                              <label for="XL">XL</label>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- mobile filter -->
                  <div class="row">
                     <div class="collapse navbar-collapse " id="mb-filter">
                         
                         
                         
                        <div class="accordion " id="accordionExample">
                            
                                <div class="col-5 cd-h">
                                    
                                    <div class="mb-card card-header collapsed cl " data-toggle="collapse" aria-expanded="true" data-target="#clothing"  aria-controls="clothing" >
                                        <a href="#" class="card-title">
                                        Clothing
                                        </a>
                                     </div>
                                     
                                     <div class="mb-card card-header collapsed cl " data-toggle="collapse" aria-expanded="true" data-target="#JWL"  aria-controls="JWL" >
                                        <a href="#" class="card-title">
                                        JEWELLERY
                                        </a>
                                     </div>
                                     <div class="mb-card card-header collapsed cl " data-toggle="collapse" aria-expanded="true" data-target="#ASS"  aria-controls="ASS" >
                                        <a href="#" class="card-title">
                                        ACCESSORIES
                                        </a>
                                     </div>
                                    
                                    <div class="mb-card card-header collapsed cl " data-toggle="collapse" aria-expanded="false" data-target="#collapseOne"  aria-controls="collapseOne" >
                                        <a href="#" class="card-title">
                                        Color
                                        </a>
                                     </div>
                                     <div class="mb-card card-header collapsed mt" data-toggle="collapse" aria-expanded="false" data-target="#collapseTwo" aria-controls="collapseTwo">
                                            <a href="#" class="card-title">
                                            Material
                                            </a>
                                     </div>
                                     <div class="mb-card card-header collapsed sz" data-toggle="collapse" aria-expanded="false" data-target="#collapseThree" aria-controls="collapseThree">
                                             <a href="#" class="card-title">
                                             Size
                                             </a>
                                     </div>
                                     
                                     <div class="mb-card card-header collapsed sz" data-toggle="collapse" aria-expanded="false" data-target="#clprice" aria-controls="clprice">
                                             <a href="#" class="card-title">
                                             Price
                                             </a>
                                     </div>
                                </div>
                            
                            <div class="card mb-0">
                                <div class="col-12">
                                    
                                    <div id="clothing" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                      <div class="card-body">
                                        <ul class="list-unstyled list-lg sidebarlist">
                                            <li class="cloth" alt="festive">Festive Collection</li>
                                            <li class="cloth" alt="gown">Couture Gowns</li>
                                            <li class="cloth" alt="">Bespoke Bridal</li>
                                            <li class="cloth" alt="seasons     trend">Season's Trend</li>
                                        </ul>
                                     </div>
                                   </div>
                                    
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                          <div class="card-body">
                                           <form>
                                              <input type="checkbox" name="color" data-colorhex="white" id="color1"/>
                                              <label for="color1"><span class="colorDisplay"  style="background:rgb(255, 255, 255)"></span>White</label><br>
                                              <input type="checkbox" name="color" data-colorhex="blue" id="color2"/>
                                              <label for="color2"><span class="colorDisplay" style="background:rgb(60, 68, 119)"></span>Navy Blue</label><br>
                                              <input type="checkbox" name="color" data-colorhex="red" id="color3"/>
                                              <label for="color3"><span class="colorDisplay" style="background:rgb(211, 75, 86)"></span>Red</label><br>
                                              <input type="checkbox" name="color" data-colorhex="grey" id="color4"/>
                                              <label for="color4"><span class="colorDisplay"  style="background:rgb(159, 168, 171)"></span>Grey</label>
                                              <div class="colour-more">
                                                 <span class="mrtxt">+  more </span>
                                                 <div class="morecolor" style="display:none;">
                                                    <input type="checkbox" name="color" data-colorhex="white" id="color5"/>
                                                    <label for="color5"><span class="colorDisplay"  style="background:rgb(255, 255, 255)"></span>White</label><br>
                                                    <input type="checkbox" name="color" data-colorhex="blue" id="color6"/>
                                                    <label for="color6"><span class="colorDisplay" style="background:rgb(60, 68, 119)"></span>Navy Blue</label><br>
                                                    <input type="checkbox" name="color" data-colorhex="red" id="color7"/>
                                                    <label for="color7"><span class="colorDisplay" style="background:rgb(211, 75, 86)"></span>Red</label><br>
                                                    <input type="checkbox" name="color" data-colorhex="grey" id="color8"/>
                                                    <label for="color8"><span class="colorDisplay"  style="background:rgb(159, 168, 171)"></span>Grey</label>
                                                 </div>
                                              </div>
                                           </form>
                                        </div>
                                    </div>
                                    
                                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                      <div class="card-body">
                                           <form>
                                              <input type="checkbox" name="material" id="Chanderi1" data-atr="Chanderi"/>
                                              <label for="Chanderi1">Chanderi</label><br>
                                              <input type="checkbox" name="material" id="Rayon1" data-atr="Rayon"/>
                                              <label for="Rayon1">Rayon</label><br>
                                              <input type="checkbox" name="material" id="Cotton1"  data-atr="Cotton"/>
                                              <label for="Cotton1">Cotton</label><br>
                                              <input type="checkbox" name="material" id="Georgette1" data-atr="Georgette"/>
                                              <label for="Georgette1">Georgette</label><br>
                                              <input type="checkbox" name="material" id="Lycra1" data-atr="Lycra"/>
                                              <label for="Lycra1">Lycra</label><br>
                                              <input type="checkbox" name="material" id="Linen1" data-atr="Linen"/>
                                              <label for="Linen1">Linen</label><br>
                                              <input type="checkbox" name="material" id="Russian Silk1" data-atr="Russian Silk"/>
                                              <label for="Russian Silk1">Russian Silk</label><br>
                                              <input type="checkbox" name="material" id="Muslin1" data-atr="Muslin"/>
                                              <label for="Muslin1">Muslin</label><br>
                                              <input type="checkbox" name="material" id="Silk1" data-atr="Silk"/>
                                              <label for="Silk1">Silk</label> <br>
                                              <input type="checkbox" name="material" id="Brocade1" data-atr="Brocade"/>
                                              <label for="Brocade1">Brocade</label> <br>
                                              <input type="checkbox" name="material" id="fabric1" data-atr="fabric"/>
                                              <label for="fabric1">fabric</label>
                                           </form>
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                      <div class="card-body">
                                        <form>
                                           <input type="checkbox" name="size" id="XS1" data-atr="XS"/>
                                           <label for="XS1">XS</label><br>
                                           <input type="checkbox" name="size" id="S1" data-atr="S"/>
                                           <label for="S1">S</label><br>
                                           <input type="checkbox" name="size" id="M1" data-atr="M"/>
                                           <label for="M1">M</label><br>
                                           <input type="checkbox" name="size" id="L1" data-atr="L"/>
                                           <label for="L1">L</label><br>
                                           <input type="checkbox" name="size" id="XL1" data-atr="XL"/>
                                           <label for="XL1">XL</label>
                                        </form>
                                     </div>
                                   </div>
                                   
                                   <div id="clprice" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                      <div class="card-body">
                                        <div class="mbnoui">  
                                        <div id="slider-non-linear-step1" class="noUi-target noUi-ltr noUi-horizontal"></div>
                                           <div class="noiui-value">
                                              <span class="example-val" id="slider-non-linear-step-value1"></span>
                                              <select id="resellerEarnings1" class="no-border fltprice">
                                                 <option value="min" selected>Min</option>
                                                 <option value="500.00">500.00</option>
                                                 <option value="1000.00">1000.00</option>
                                                 <option value="2000.00">2000.00</option>
                                                 <option value="3000.00">3000.00</option>
                                                 <option value="4000.00">4000.00</option>
                                                 <option value="5000.00">5000.00</option>
                                                 <option value="6000.00">6000.00</option>
                                                 <option value="7000.00">7000.00</option>
                                                 <option value="8000.00">8000.00</option>
                                              </select>
                                              <select id="clientPrice1" class="no-border fltprice">
                                                 <option value="max" selected>Max</option>
                                                 <option value="8000.00">8000.00</option>
                                                 <option value="10000.00">10000.00</option>
                                                 <option value="11000.00">11000.00</option>
                                                 <option value="12000.00">12000.00</option>
                                                 <option value="13000.00">13000.00</option>
                                                 <option value="14000.00">14000.00</option>
                                                 <option value="15000.00">15000.00</option>
                                                 <option value="16000.00">16000.00</option>
                                                 <option value="17000.00">17000.00</option>
                                                 <option value="18000.00">18000.00</option>
                                                 <option value="19000.00">19000.00</option>
                                                 <option value="20000.00">20000.00</option>
                                              </select>
                                           </div>
                                        </div>
                                     </div>
                                   </div>
                                </div>
                            </div>
                            
                            
                       
                        </div>
                     </div>
                     
                  </div>

                  <!--</div>-->
                  <!-- end mobile filter -->
               </div>
            </article>
         </div>
      </aside>
      
     
         
      <div class="col-md-9 prdt">
         <?php $prchk = $products->toArray(); ?>
         
          <?php 
            
          ?>
         @foreach(array_chunk($prchk['data'],3) as $product)
         <div class="card-deck">
            @foreach($product as $prdct)
            <div class="col-lg-4 col-sm-6">
               <div class="card prodcard">
                  <a href="{{ url('/product_item/'.$prdct['id'])  }}"><img class="card-img-top" src="{{ asset('image/web/category/'.$prdct['photo'])}}" alt="Card image cap"></a>
                  <div class="card-body">
                     <h5 class="card-title product-item-name"><a href="{{ url('/product_item/'.$prdct['id'])  }}">{{ $prdct['name'] }}</a></h5>
                     <p class="card-title product-item-price">₹ {{ $prdct['price'] }}</p>
                     <div class="btn-group btngrpprdlist" aria-label="">
                        <button type="button" class="btn btn-outline btnprdlist"><i class="far fa-heart"></i></button>
                        <button type="button" class="btn btn-outline  btnprdlist"><i class="fas fa-cart-plus"></i><a href="{{ url('add-to-cart/'.$prdct['id'])  }}"> Add to cart</a></button>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
         @endforeach
         {{ $products->links() }}
      </div>
   </div>
</div>
@endsection
@section('scripts')

<script>
    $(document).ready(function(){
         var $width = $(window).width();
           
            
           $.ajax({
               url: '{{ url('product') }}',
               method: "get",
               data: {_token: '{{ csrf_token() }}', width: $width},
               success: function (response) {
                   console.log(response);
   
                     /* $('.prdt').html(response);*/
               }
           });
    });
</script>

<script>
   $(document).ready(function () {
        
       $('.ce').hide();
       
       var sizes = [];
       $(document).on('change', '[name=size]', function (e) {
           //e.preventDefault();
           sizes = [];
   
           $('input[name="size"]:checked').each(function()
           {
               sizes.push($(this).attr('data-atr'));
           });
           
           console.log(sizes);
           
           $.ajax({
               url: '{{ url('searchSize') }}',
               method: "post",
               data: {_token: '{{ csrf_token() }}', size: sizes},
               success: function (response) {
                   console.log(response);
   
                      $('.prdt').html(response);
               }
           });
   
       });
       
       var materials = [];
       $(document).on('change', '[name=material]', function (e) {
           //e.preventDefault();
           materials = [];
   
           $('input[name="material"]:checked').each(function()
           {
               materials.push($(this).attr('data-atr'));
           });
           
           console.log(materials);
           
           $.ajax({
               url: '{{ url('searchMaterial') }}',
               method: "post",
               data: {_token: '{{ csrf_token() }}', material: materials },
               success: function (response) {
                   console.log(response);
   
                      $('.prdt').html(response);
               }
           });
   
       });
       
       var color = [];
       $(document).on('change', '[name=color]', function (e) {
           //e.preventDefault();
          color = [];
   
           $('input[name="color"]:checked').each(function()
           {
               color.push($(this).attr('data-colorhex'));
           });
           
           console.log(color);
        
           if($(window).width() <= 767 ){
               $(document).on('click','.flt-btn',function(){
                    if($(this).text() == 'Filters'){
                       $.ajax({
                           url: '{{ url('searchColor') }}',
                           method: "post",
                           data: {_token: '{{ csrf_token() }}', color: color},
                           success: function (response) {
                               console.log(response);
                                  $('.prdt').html(response);
                                  
                                  alert('hello');
                           }
                       });
                    }
               });
           }else{    
               $.ajax({
                   url: '{{ url('searchColor') }}',
                   method: "post",
                   data: {_token: '{{ csrf_token() }}', color: color},
                   success: function (response) {
                       console.log(response);
       
                          $('.prdt').html(response);
                   }
               });
            }
       });
   
   
       $('.prlth').on('click',function (e) {
           e.preventDefault();
           $.ajax({
               url: '{{ url('priceLth') }}',
               method: "post",
               data: {_token: '{{ csrf_token() }}'},
               success: function (response) {
                   console.log(response);
                   $('.prdt').html(response);
               }
           });
       });
       $('.prhtl').on('click',function (e) {
           e.preventDefault();
           $.ajax({
               url: '{{ url('priceHtl') }}',
               method: "post",
               data: {_token: '{{ csrf_token() }}'},
               success: function (response) {
                   console.log(response);
                   $('.prdt').html(response);
               }
           });
       });
       
       
       $('.cloth').on('click',function(e){
      /*   e.preventDefault();*/
         var cat = $(this).attr('alt');
        $('.ce').show();
        /* $( "<li class='breadcrumb-item'><a class='bread cat' href='#'></a>"+cat+"</li>" ).insertAfter( ".cl" );*/
          
          $('.bread.cat').html(cat);
       
         $.ajax({
               url: '{{ url('category') }}',
               method: "post",
               data: {_token: '{{ csrf_token() }}',cat:cat},
               success: function (response) {
                   console.log(response);
                   $('.prdt').html(response);
   
               }
           });
   
       });
   
   });
</script>
<!-- range slide script -->
<script>
   $(document).ready(function(){
       var nonLinearStepSlider = document.getElementById('slider-non-linear-step');
   
       noUiSlider.create(nonLinearStepSlider, {
           start: [500, 8000],
           connect: true,
           range: {
               'min': [0],
               '10%': [500, 500],
               '50%': [8000, 4000],
               'max': [20000]
           }
       });
       
       
       
       var nonLinearStepSliderValueElement = document.getElementById('slider-non-linear-step-value');
        
       nonLinearStepSlider.noUiSlider.on('update', function (values) {
           //var v = nonLinearStepSliderValueElement.innerHTML = values.join('-');
           var v = nonLinearStepSliderValueElement.innerHTML = values;
           
           var before = v[0];
           var after = v[1];
           
           console.log(before);
           
           $('#slider-non-linear-step-value').text('');
           $('#resellerEarnings').val(before);
           $('#clientPrice').val(after);
           console.log(before);
           console.log(after);
          $('.noUi-touch-area').on('click',function(){
              
               $.ajax({
                   url: '{{ url('price') }}',
                   method: "post",
                   data: {_token: '{{ csrf_token() }}',min:before,max:after},
                   success: function (response) {
                       console.log(response);
                       $('.prdt').html(response);
                   }
               });
          });
          
          $('.fltprice').on('change',function(){
              
              var vr1 = $('#resellerEarnings').val();
              var vr2 = $('#clientPrice').val();
              
              $.ajax({
                   url: '{{ url('price') }}',
                   method: "post",
                   data: {_token: '{{ csrf_token() }}',min:vr1,max:vr2},
                   success: function (response) {
                       console.log(response);
                       $('.prdt').html(response);
                   }
               });
          });
           
       });
   });
   
   $(document).ready(function(){
       
       
       var nonLinearStepSlider1 = document.getElementById('slider-non-linear-step1');
   
       noUiSlider.create(nonLinearStepSlider1, {
           start: [500, 8000],
           connect: true,
           range: {
               'min': [0],
               '10%': [0, 500],
               '50%': [8000, 4000],
               'max': [20000]
           },
       });
       
       var nonLinearStepSliderValueElement1 = document.getElementById('slider-non-linear-step-value1');
   
       nonLinearStepSlider1.noUiSlider.on('update', function (values) {
            
            
           var v1 = nonLinearStepSliderValueElement1.innerHTML = values;
           
           var before1 = v1[0];
           var after1= v1[1];
           
           $('#slider-non-linear-step-value1').text('');
           $('#resellerEarnings1').val(before1);
           $('#clientPrice1').val(after1);
           
            $('.noUi-touch-area').on('click',function(){
            
                if($(this).text() == 'Apply'){
                      
                   $.ajax({
                       url: '{{ url('price') }}',
                       method: "post",
                       data: {_token: '{{ csrf_token() }}',min:before1,max:after1},
                       success: function (response) {
                           console.log(response);
                           $('.prdt').html(response);
                       }
                   });
                }
            });
       });
   });
   
</script>
<script>
   $(document).ready(function(){
       $('.colour-more').on('click',function(){
           $('.morecolor').css('display','block');
           $('.colour-more .mrtxt').css('display','none');
       });
   });
   
   $(document).ready(function(){
       
       if($(window).width() <= 767){
           $('.hd_ft-ds').css('display','none');
           $('#slider-non-linear-step').css('display','none');
       }
       
      $('#mb-filter .collapsed').on('click',function(e){
        e.preventDefault();
      }); 
      
      $('.flt-btn').click(function(){
          
          if($(this).text() == 'Filters'){
              $(this).text('Apply');
              $(this).css('background-color','black');
          }else{
              $(this).text('Filters');
              $(this).css('background-color','rgb(71, 133, 158)');
              $(this).append('<i aria-hidden="true" class="fa fa-filter"></i>');
          }
      });
      
   });
</script>
@endsection