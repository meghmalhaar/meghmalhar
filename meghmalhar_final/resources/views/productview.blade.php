 
 <style type="text/css">
   footer .container-fluid{ margin-top: 6vh;  }
 </style>
@extends('layouts.product')
@section('title', 'Products')
@section('content')


<div class="container-fluid" style="border: 0px solid gray; height: 85vh;">
   <div class="row justify-content-end">
      <div class="col col-md-6">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item"><a href="{{url('/product')}}">Womems</a></li>
               <li class="breadcrumb-item"><a href="#">{{ $products[0]->category }}</a></li>
               <li class="breadcrumb-item active" aria-current="page">{{ $products[0]->name }}</li>
            </ol>
         </nav>
      </div>
   </div>
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalCenterTitle">Size Guide</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="col-xs-12 col-sm-8 size-container nopadding">
      
    </div>
    <div class="row">
    <div class="col-xs-12 col-sm-4 size-img"><img class="lazy imglazy" src="https://lstatic1.craftsvilla.com/skin/frontend/default/craftsvilla2015/img/sizechart/kurti.png" alt="" title=""></div>

    <div class="col-xs-12 col-sm-8 size-container nopadding">
      <div class="table-responsive">
        <p class="size-headding"><span class="heading">Dimensions for Women</span></p>
        <table class="table table-bordered text-center">
           <thead>
            <tr class="theadtr">
              
              
                
                  <th class="tblth">Size</th>
                
              
                
                  <th class="tblth">Bust (in cm)</th>
                
              
                
                  <th class="tblth">Waist (in cm)</th>
                
              
                
                  <th class="tblth">Hips (in cm)</th>
                
              
            </tr>
          </thead>
          <tbody class="tbody">
            
            
            
              <tr  class="trbody">
                
                  <td class="tbltr">XS</td>
                  
                
                  <td class="tbltr">86</td>
                  
                
                  <td class="tbltr">81</td>
                  
                
                  <td class="tbltr">91</td>
                  
                
              </tr>
              
            
              <tr  class="trbody">
                
                  <td class="tbltr">S</td>
                  
                
                  <td class="tbltr">91</td>
                  
                
                  <td class="tbltr">86</td>
                  
                
                  <td class="tbltr">96</td>
                  
                
              </tr>
              
            
              <tr  class="trbody">
                
                  <td class="tbltr">M</td>
                  
                
                  <td class="tbltr">96</td>
                  
                
                  <td class="tbltr">91</td>
                  
                
                  <td class="tbltr">101</td>
                  
                
              </tr>
              
            
              <tr  class="trbody">
                
                  <td class="tbltr">L</td>
                  
                
                  <td class="tbltr">101</td>
                  
                
                  <td class="tbltr">96</td>
                  
                
                  <td class="tbltr">106</td>
                  
                
              </tr>
              
            
              <tr  class="trbody">
                
                  <td class="tbltr">XL</td>
                  
                
                  <td class="tbltr">106</td>
                  
                
                  <td class="tbltr">101</td>
                  
                
                  <td class="tbltr">111</td>
                  
                
              </tr>
              
            
              <tr  class="trbody">
                
                  <td class="tbltr">XXL</td>
                  
                
                  <td class="tbltr">111</td>
                  
                
                  <td class="tbltr">106</td>
                  
                
                  <td class="tbltr">116</td>
                  
                
              </tr>
              
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
               <h6 style="text-align:center;font-size:14px;font-family: lato;color:#333;padding:0 12px;padding-top:12px;font-weight: normal;text-transform: inherit;">Above measurements refer to the wearer’s body measurement and not the garment measurements.<br>We suggest you to add 0.5 Inch to your body measurement for comfortable fit.</h6>
               
            </div>
            
         </div>
      </div>
   </div>
   @foreach($products as $product)
   <input type="hidden" name="img_name" value="{{$product->photo}}">
   <div class="row justify-content-center" style="height: 77vh;">
      <div class="col-xs-12 col-sm-12 col-md-4">
         <img src="{{ asset('image/web/category/'.$product->photo) }}" data-hover="{{ asset('image/meghmalhaar images/pro_1_zoom.jpg') }}"alt="Product Image" class="block__pic">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
         <h1>{{ $product->name }}</h1>
         <hr>
         <div class="card" style="border: 1px solid #fff; z-index: 0;">
            <div class="card-body">
               <table class="table table-borderless">
                  <tr>
                     <!--<td class="pricetbl"><span class="td-title"><strong> Price: </strong></span></td>-->
                     <td class="pricetbl"><span class="price" >₹ {{ $product->price }} <span style="text-transform: capitalize;" >(Inclusive of All Taxes)</span></span></td>
                  </tr>
                  <!--  <tr>
                     <td class="pricetbl"><span class="td-title">Select Color: </span>
                     </td>
                     <td class="pricetbl"><span class="color">
                       <div class="btn-group btn-group-toggle" data-toggle="buttons">
                           <label class="btn btn-lg btn-color" style="background-color: #89B9CC; z-index: 0;">
                             <input type="radio" name="options" id="option1" autocomplete="off">
                           </label>
                           <label class="btn btn-lg btn-color" style="background-color: #E8A7D3; z-index: 0;">
                            <input type="radio" name="options" id="option2" autocomplete="off">
                           </label>
                           <label class="btn btn-lg btn-color" style="background-color: #66B374; z-index: 0;">
                             <input type="radio" name="options" id="option3" autocomplete="off">
                           </label>
                         </div></span>
                     </td>
                     </tr> -->
                  <tr>
                     <td class="pricetbl"><span class="td-title"><strong>Select Size:</strong> </span>
                     </td>
                     <td class="pricetbl">
                        <span class="size">
                           <div class="btn-group btn-group-toggle btnsizegroup" data-toggle="buttons">
                               @foreach($sizes as $size)
                               <?php if(!empty($size->size1)) { ?>
                              <label class="btn btn-size">
                              <input type="radio" value="xs" name="options" id="option1" autocomplete="off" > {{ $size->size1 }}
                              </label>
                               <?php } if(!empty($size->size2)) { ?>
                              <label class="btn btn-size">
                              <input type="radio" value="s" name="options" id="option2" autocomplete="off" > {{ $size->size2 }}
                              </label>
                              <?php } if(!empty($size->size3)) { ?>
                              <label class="btn btn-size">
                              <input type="radio" value="m" name="options" id="option3" autocomplete="off" > {{ $size->size3 }}
                              </label>
                              <?php } if(!empty($size->size4)) { ?>
                              <label class="btn btn-size">
                              <input type="radio" value="l" name="options" id="option4" autocomplete="off" > {{ $size->size4 }}
                              </label>
                              <?php } if(!empty($size->size5)) { ?>
                              <label class="btn btn-size">
                              <input type="radio" value="xl" name="options" id="option5" autocomplete="off" > {{ $size->size5 }}
                              </label>
                              <?php } ?>
                              @endforeach
                              <button type="button" class="btn btn-link btn-size-chart" data-toggle="modal" data-target="#exampleModalCenter"><b>Size Chart</b></button>
                           </div>
                        </span>
                     </td>
                  </tr>
               </table>
               <div class="btn-group cartbtngroup">
                  <button class="btn btn-lg btn-cart-whish"><i class="fas fa-heart"></i>Wishlist</button>
                  <a href="{{ url('add-to-cart/'.$product['id'])  }}"><button class="btn btn-lg btn-cart-whish active"><i class="fas fa-cart-plus"></i> Add to Cart</button></a>
               </div>
            </div>
         </div>
         <!-- <table class="table table-borderless">
            <tr>
              <td class="pricetbl"><span class="td-title">Price: </span></td>
              <td class="pricetbl"><span class="price" >₹ 1000.00 <span style="text-transform: capitalize;" >(Inclusive of All Taxes)</span></span></td>
            </tr>
            <tr>
              <td class="pricetbl"><span class="td-title">Select Color: </span>
              </td>
              <td class="pricetbl"><span class="color">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-lg btn-color" style="background-color: #89B9CC; z-index: 0;">
                      <input type="radio" name="options" id="option1" autocomplete="off">
                    </label>
                    <label class="btn btn-lg btn-color" style="background-color: #E8A7D3; z-index: 0;">
                     <input type="radio" name="options" id="option2" autocomplete="off">
                    </label>
                    <label class="btn btn-lg btn-color" style="background-color: #66B374; z-index: 0;">
                      <input type="radio" name="options" id="option3" autocomplete="off">
                    </label>
                  </div></span>
              </td>
            </tr>
            <tr>
              <td class="pricetbl"><span class="td-title">Select Size: </span>
              </td>
              <td class="pricetbl"><span class="size">
               <div class="btn-group btn-group-toggle btnsizegroup" data-toggle="buttons">
                <label class="btn btn-size">
                  <input type="radio" name="options" id="option1" autocomplete="off" > XS
                </label>
                <label class="btn btn-size">
                  <input type="radio" name="options" id="option2" autocomplete="off" > S
                </label>
                <label class="btn btn-size">
                  <input type="radio" name="options" id="option3" autocomplete="off" > M
                </label>
                <label class="btn btn-size">
                  <input type="radio" name="options" id="option4" autocomplete="off" > L
                </label>
                <label class="btn btn-size">
                  <input type="radio" name="options" id="option5" autocomplete="off" > XL
                </label>
                <button type="button" class="btn btn-link btn-size-chart"><b>Size Chart</b></button>
              </div>
              </span></td>
            </tr>
            <tr>
              <td class=""><span class="btn-td">
                <button class="btn btn-lg btn-cart-whish"><i class="fas fa-heart"></i> Add to Wishlist</button></span>
              </td>
              <td class=""><span class="btn-td">
                <button class="btn btn-lg btn-cart-whish active"><i class="fas fa-cart-plus"></i> Add to Cart</button></span>
              </td>
            </tr>
            </table> -->
         <div class="product-details">
          
            <p><strong>Product Details</strong></p>
            <hr style="margin-top: -2vh;">
            <p>
               {{ $product->description }}
            </p>
           <div class="card-body">
            <table class="table table-borderless">
              <tr>
                <td class="detailtbl"><span class="td-title"><strong> color: </strong></span></td>
                <td class="detailtbl" style="text-transform: capitalize;"> {{ $product->color }} </td>
              </tr>
              <!-- <tr>
                <td class="detailtbl"><span class="td-title"><strong> Size & Fit: </strong></span></td>
                <td class="detailtbl" style="text-transform: capitalize;"> {{ $product->size_fit }} </td>
              </tr> -->
              <tr>
                <td class="detailtbl"><span class="td-title"><strong> Material & care: </strong></span></td>
                <td class="detailtbl" style="text-transform: capitalize;">{{ $product->material }} - <br><span >{{ $product->care }}</span></td>
              </tr>
              <tr>
                <td class="detailtbl"><span class="td-title"><strong> Alteration: </strong></span></td>
                <td class="detailtbl" style="text-transform: capitalize;"> {{ $product->alternation }} </td>
              </tr>
              <tr>
                <td class="detailtbl"><span class="td-title"><strong> Made to Order: </strong></span></td>
                <td class="detailtbl" style="text-transform: capitalize;"> {{ $product->madetoorder }} </td>
              </tr>
              <tr>
                <td class="detailtbl"><span class="td-title"><strong> Shipping time: </strong></span></td>
                <td class="detailtbl" style="text-transform: capitalize;"> {{ $product->shippingtime }} </td>
              </tr>
              
            </table>
          
        </div>
         </div>
      </div>
   </div>
   @endforeach
</div>
@endsection
@section('scripts')
<script type="text/javascript">
   $(document).ready(function(){
        $('.btn-cart-whish').on('click',function(){
            var img_name = $('input[name="img_name"]').val();
   
            var size = $("input[type='radio']:checked").val();
            var price = $(".price")
                .clone()    //clone the element
                .children() //select all the children
                .remove()   //remove all the children
                .end()  //again go back to selected element
                .text()
                .replace(/[^0-9]/, '');
   
            var pr_name = $('h1').text();
            $.ajax({
                url: '{{ url('insertCart') }}',
                method: "get",
                data: {_token: '{{ csrf_token() }}', size: size,price:price,name:pr_name,img_name:img_name},
                success: function (response) {
   
                    console.log(response);
   
                   // window.location.reload();
                }
            });
            
        });
   });
</script>
<script type="text/javascript">
   
  var $screen = $(window).width();
  
  $(document).ready(function(){
          
          if ($screen >= 1300 && $screen <= 1440) {

            $('footer .container-fluid').css('margin-top','24vh');
            
          }
           if ($screen <= 768) {
            $('footer').css('margin-top','110vh');
            $('.detailtbl').css('display','table-cell');
            $('h1').css({'margin-top':'45px','font-size':'1.6rem'});
            $('.block__pic').css('width','100%');
            $('.justify-content-end').css('margin-left','0px');
          }

   });

</script>

<!--   <script type="text/javascript">
   var sourceSwap = function () {
        var $this = $(this);
        var newSource = $this.data('hover');
        $this.data('hover', $this.attr('src'));
        $this.attr('src', newSource);
    }
   
    $(function () {
      $('img.block__pic').hover(sourceSwap, sourceSwap);
   });
   </script> -->
@endsection