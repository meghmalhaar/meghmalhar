
@extends('layouts.product')
@section('title', 'Meghmalhar')
@section('content')

<div class="home-dsk">
<section class="sec-1">
   <div class="megh_background" >
    <!-- <div class="container-fluid back-img">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img id="image" class="img-fluid" alt="Responsive image" src="{{ asset('/image/web/Homepage_1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img id="image" class="img-fluid" alt="Responsive image" src="{{ asset('/image/web/Homepage_2.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img id="image" class="img-fluid" alt="Responsive image" src="{{ asset('/image/web/Homepage_3.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img id="image" class="img-fluid" alt="Responsive image" src="{{ asset('/image/web/Homepage_4.png') }}" alt="Third slide">
            </div>
        </div>
        </div>
        <div class="stage">
            <img src="{{ asset('/image/home-page-text.png') }}" />
        </div>
    </div>  -->


    <!--<div class="container-fluid back-img">
        <div id="slider-main">
            <div id="slider"></div>
        </div>
        <div class="stage">
            <img src="" />
        </div>
    </div>-->
    <!--<div id="imageSwap" style="text-align:center;">
    </div>  
    <div class="stage">
            <img src="{{ asset('/image/home-page-text.png') }}" />
    </div>-->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img id="image" class="img-fluid animate" alt="Responsive image " src="{{ asset('/image/web/Homepage_1.png') }}" alt="First slide" >
        </div>
        <div class="carousel-item">
          <img id="image" class="img-fluid animate" alt="Responsive image " src="{{ asset('/image/web/Homepage_2.png') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img id="image" class="img-fluid animate" alt="Responsive image" src="{{ asset('/image/web/Homepage_3.png') }}" alt="Third slide">
        </div>
         <div class="carousel-item">
          <img id="image" class="img-fluid animate" alt="Responsive image" src="{{ asset('/image/web/Homepage_4.png') }}" >
        </div>
        
      </div>
    </div>

  </div>
</section>
<section class="sec-2"  data-0="margin-top:0vh;" data-500="margin-top:-50vh;">
        
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center" style="flex-grow: 1;letter-spacing: 0.4rem; letter-spacing: 0.6rem;margin-top: 8vh;">COLLECTION</h1>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-12">
                                <h1 class="lux-h1">Festive <br><span style="margin-left: 5vw;">Collection</span></h1>
                                <img class="img-fluid lux-img" src="{{ asset('/image/Ethnicwear.jpg') }}" width="40%">
                                
                                <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short lux-btn">Shop now
                                </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                                <h1 class="kurta-h1">Bespoke <br><span style="margin-left: 5vw;">Bridal</span></h1>
                                <img class="img-fluid kurta-img" src="{{ asset('/image/Bridal.jpg') }}" width="40%">
                                
                                <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short kurta-btn">Shop now
                                </button>
                        </div>
                    </div>  
                </div>
                <div class="col-4">
                    <div class="col-12 right-div">
                        
                        <img class="img-fluid co-img" src="{{ asset('/image/Gown.jpg') }}" width="80%">
                        
                        <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short co-btn">Shop now </button>
                    </div>
                    <h1 class="co-h1">Couture  <br> <span style="margin-left: 7vw;">Gowns</span></h1>
                    <div class="col-12 right-div">
                            
                        <img class="img-fluid se-img" src="{{ asset('/image/Kurta-kurti.jpg') }}" width="80%">
                        
                        <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short se-btn">Shop now </button>
                    </div>
                    <h1 class="se-h1">Season's<br><span style="margin-left: 7vw;">Trend</span></h1>
                </div>
            </div>
        </div>

</section>
<section class="sec-3">
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center" style="flex-grow: 1;letter-spacing: 0.4rem; letter-spacing: 0.6rem; margin-top: 10vh;color: #393939;">SHOP BY CATEGORY</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short cl-btn" style="">Shop now </button>
                 <h1 class="cl-h1">Clothing</h1>
                 <img class="img-fluid cl-img" src="{{ asset('image/meghmalhaar images/Clothing.png') }}">

            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <div class="col-8">
                            <p>Jewellery</p>
                            <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short cat-btn" >Shop now </button>
                            <img class="img-fluid" src="{{ asset('image/meghmalhaar images/Jewellery.png') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-8 " style="margin-top: 7vh;">
                            <p>Accessories</p>
                            <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short cat-btn" >Shop now </button>
                            <img class="img-fluid" src="{{ asset('image/meghmalhaar images/Accessories.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-4">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-4">
                <img class="img-fluid offer" data-2600="margin-top:0vh;" data-3200="margin-top:-18vh" src="{{ asset('image/meghmalhaar images/offer.png') }}" style="margin-top:0vh">
            </div>
            <div class="col-8" style="margin-top: 15vh;">
                <h1>15% discount on your first order </h1>
                <p style="color: #c27c6c; margin-left: 1vw;font-size: 1rem; margin-top: 4vh;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point <br>of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using </p>

                <form>
                    
                  <div class="input-group dis-div">

                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email">
                     <button type="submit" class="btn btn-short dis-btn">GET A DISCOUNT</button>

                  </div>

              </form>

            </div>
        </div>
    </div>    
</section>
</div>

<div class="home-mb" style="display: none;">
    <section class="sec-1">
        <div class="megh_background" >
    
            <!--<div class="container-fluid back-img">
                <img id="image" class="img-fluid" alt="Responsive image" src="{{ asset('/image/web/Homepage_1.png') }}" >
    
            </div>-->
            <!--<div class="container-fluid back-img">
                <div id="slider-main">
                    <div id="slider"></div>
                </div>
                <div class="stage">
                    <img src="" />
                </div>
                
            </div>-->
            
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img id="image" class="img-fluid animate" alt="Responsive image" src="{{ asset('/image/web/Homepage_1.png') }}" >
                </div>
                <div class="carousel-item">
                  <img id="image" class="img-fluid animate" alt="Responsive image" src="{{ asset('/image/web/Homepage_2.png') }}" >
                </div>
                <div class="carousel-item">
                  <img id="image" class="img-fluid animate" alt="Responsive image" src="{{ asset('/image/web/Homepage_3.png') }}" >
                </div>
                 <div class="carousel-item">
                  <img id="image" class="img-fluid animate" alt="Responsive image" src="{{ asset('/image/web/Homepage_4.png') }}" >
                </div>
                
              </div>
            </div>
            
        </div>
    </section>
<section class="sec-2">
        
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center" style="flex-grow: 1;letter-spacing: 0.4rem; letter-spacing: 0.6rem;margin-top:5vh; margin-bottom: 8vh;">COLLECTION</h1>
            </div>  
            <div class="row">

                        <div class="col-12 mb-margin-40">
                                
                                <img class="img-fluid " src="{{ asset('/image/Ethnicwear.jpg') }}" >
                                <h1 class="mb-col-h1">Festive <br>Collection</h1>
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-short mb-col-btn" onclick="location.href = '{{ url('/festive') }}'">Shop now
                                </button>
                        </div>
                    
                        <div class="col-12 mb-margin-40">
                               
                                <img class="img-fluid " src="{{ asset('/image/Gown.jpg') }}">
                                 <h1 class="mb-col-h1">Couture -  <br> Gowns</h1>
                                <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short mb-col-btn" onclick="location.href = '{{ url('/gown') }}'">Shop now
                                </button>
                        </div>
                        
                         <div class="col-12 mb-margin-40">
                            <img class="img-fluid " src="{{ asset('/image/Kurta-kurti.jpg') }}">
                             <h1 class="mb-col-h1">Seasons <br>Trend </h1>
                            <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short mb-col-btn" onclick="location.href = '{{ url('/season_trend') }}'">Shop now </button>
                            
                        </div>
                        <div class="col-12 mb-margin-40">
                            <img class="img-fluid " src="{{ asset('/image/Bridal.jpg') }}">
                            <h1 class="mb-col-h1">Bespoke Bridal <br>Collection </h1>   
                            <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short mb-col-btn" onclick="location.href = '{{ url('/product') }}'">Shop now </button>
                       
                        </div>
                
            </div>
        </div>
    
</section>
<section class="sec-3">
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center" style="flex-grow: 1;letter-spacing: 0.4rem; letter-spacing: 0.6rem; margin-top: 10vh;color: #393939;">SHOP BY <br> CATEGORY</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 mb-margin-40">
                
                 <h1 class="mb-cl-h1">Clothing</h1>
                 <img class="img-fluid" src="{{ asset('image/meghmalhaar images/Clothing.png') }}">
                 <button  onclick="location.href = '{{ url('/product/') }}';" type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short mb-cat-btn mb-cl-btn" style="">Shop now </button>
            </div>
            <div class="col-12 mb-margin-40">
                <p>Jewellery</p>
                <img class="img-fluid" src="{{ asset('image/meghmalhaar images/Jewellery.png') }}">
                <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short mb-cat-btn" >Shop now </button>
            </div>
            <div class="col-12 mb-margin-40">
                
                <p>Accessories</p>
                <img class="img-fluid" src="{{ asset('image/meghmalhaar images/Accessories.png') }}">
                <button type="button" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false" class="btn btn-short mb-cat-btn" >Shop now </button>        
            </div>
        </div>
    </div>
</section>
<section class="sec-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="margin-top: 4vh;">
                <h1>15% discount on your first order </h1>
                <p style="color: #c27c6c; margin-left: 10vw; font-size: 1rem;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
        </div>    
        <div class="row">
            <div class="col-4">
                <img class="img-fluid offer" src="{{ asset('image/meghmalhaar images/offer.png') }}" style=" margin-top: -18vh; margin-left: 3vw; filter: drop-shadow(-19px 4px 8px #0c0b0b42);">
            </div>
            
        </div>
    </div>    
</section>
</div>

@endsection
@section('scripts')
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">

    $('.navbar').css({'position':'fixed' ,'background':'#fff','z-index':'999'});    


    $(document).ready(function(){
       $('.cl-btn').on('click',function(){
            location.href = "http://meghmalhaar.com/meghmalhar_final/public/product";
       }); 
        $('.lux-btn').on('click',function(){
            alert('qwerty');
            location.href = "http://meghmalhaar.com/meghmalhar_final/public/festive";
       });
        $('.co-btn').on('click',function(){
             alert('qwerty');
            location.href = "http://meghmalhaar.com/meghmalhar_final/public/gown";
       });
        $('.kurta-btn').on('click touchstart',function(){
             alert('qwerty');
            location.href = "http://meghmalhaar.com/meghmalhar_final/public/product";
       });
        $('.se-btn').on('click',function(){
             alert('qwerty');
            location.href = "http://meghmalhaar.com/meghmalhar_final/public/season_trend";
       });
    });

    $(document).ready(function(){
        
        var images = {
             
            duration: 1000,
            origin: 'bottom',
            distance: '30px',
            reset: false
        };
        
        var h1_txt =  {
            
            duration: 500,
            origin: 'left',
             viewFactor: 0, 
            distance: '30px',
            interval:0,
            reset: false
        };
        
        var buttons = {
           
            duration: 1000,
            origin: 'left',
            distance: '30px',
            reset: false
        };
        
        ScrollReveal().reveal('.lux-img',images);
        ScrollReveal().reveal('.co-img',images);
        ScrollReveal().reveal('.kurta-img',images);
        ScrollReveal().reveal('.se-img',images);
         ScrollReveal().reveal('.lux-h1',h1_txt);
         ScrollReveal().reveal('.co-h1',h1_txt);
         ScrollReveal().reveal('.kurta-h1',h1_txt);
         ScrollReveal().reveal('.se-h1',h1_txt);
        ScrollReveal().reveal('.lux-btn',buttons);
        ScrollReveal().reveal('.co-btn',buttons);
        ScrollReveal().reveal('.kurta-btn',buttons);
        ScrollReveal().reveal('.sec-3 .col-8 img',{
            duration: 1000,
            origin: 'bottom',
            distance: '30px',
            reset: false
        });

    });
</script>
<script>
     var $screen = $(window).width();  
        console.log($screen);
        $(document).ready(function(){
          
          if ($screen <= 768) {
            $('.home-dsk').css('display','none');
            $('.home-mb').css('display','block');
            
          }
        });
</script>

    <script type="text/javascript">
        $(document).ready(function () {
        

    'use strict';
  
   var c, currentScrollTop = 0,
       navbar = $('nav');

       console.log(navbar);
      navbar.css('display','none');
   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.height();
     
    console.log(a);

      currentScrollTop = a;


      if (c < currentScrollTop && a > b + b) {
        navbar.addClass("scrollUp");

        
      } else if (c > currentScrollTop && !(a <= b)) {
        navbar.removeClass("scrollUp");
        if(a > 600){
            navbar.css('display','inline-flex');
        }else{
            if(a < 600){
                 navbar.css('display','none');
            }
        }
      }
      c = currentScrollTop; 
  });
  
});
 </script>
 
    <!--<script>
       var mySwiper = new Swiper('.swiper-container', {
        speed: 10000,
        spaceBetween: 100,
        fadeEffect: {
        crossFade: true,
         autoplay: {
            delay: 5000,
          },
      },
     
    });
  
mySwiper.slideNext();

    </script>-->
    
     <script language="javascript" type="text/javascript">
        $('#myCarousel').on('slide.bs.carousel', function () {
          interval: 5000
        })
    </script>
    
    
    
@endsection