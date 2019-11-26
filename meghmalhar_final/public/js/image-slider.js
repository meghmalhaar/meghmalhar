/* Authored by Boaz James Otieno */
/* full screen image slider */


function preloadimages(arr){
    var newimages=[]
    var arr=(typeof arr!="object")? [arr] : arr //force arr parameter to always be an array
    for (var i=0; i<arr.length; i++){
        newimages[i]=new Image()
        newimages[i].src=arr[i]
    }
}


var base_url = window.location.origin;

var arr=[base_url+'/meghmalhar_final/public/image/web/Homepage_1-min.png',base_url+'/meghmalhar_final/public/image/web/Homepage_2-min.png',base_url+'/meghmalhar_final/public/image/web/Homepage_3-min.png',base_url+'/meghmalhar_final/public/image/web/Homepage_4.png']; //an array of image sources
//var arr=[base_url+'/meghmalhar_final/public/image/1.jpg',base_url+'/meghmalhar_final/public/image/1_big.jpg',base_url+'/meghmalhar_final/public/image/Co-ords.jpg',base_url+'/meghmalhar_final/public/image/Ethnicwear.jpg']; //an array of image sources

var v = preloadimages([base_url+'/meghmalhar_final/public/image/web/Homepage_1-min.png',base_url+'/meghmalhar_final/public/image/web/Homepage_2-min.png',base_url+'/meghmalhar_final/public/image/web/Homepage_3-min.png',base_url+'/meghmalhar_final/public/image/web/Homepage_4.png']);
console.log(v);
var pos=0; //initializes image position in the array
$(document).ready(function () {
    var interval=5000; //interval for slide
    var loaderHtml='';
    arr.forEach(function (src) {
        loaderHtml+='<img id="image" class="lazy" src="'+src+'">';

    });

    $('.load-images').html(loaderHtml);

    var htm='';
    /* initializes the small circles html*/
    for(var i=0;i<arr.length;i++){
        htm+='<div id="'+i+'" class="circle" onclick="circleClick('+i+')"> </div> ';

    }

    $('#circles').html(htm);//show small circles
    $('#slider').html('<img id="image" src="'+arr[0]+'" class="img-slide image-animated lazy"">');//show first image
    $('#0').css({'background':'#fff', 'color':'#fff'});//sets the background of the first small circle to black


    /* Auto slides the images with the image sources array given as first argument and interval as second argument */
    function autoSlide(arr,interval){

        setInterval(function () {
            $('.img-slide').css({'opacity':'0 !important'});
            pos++;
            if(pos>arr.length-1){
                pos=0;
            }

            $('#slider').html('<img id="image" src="'+arr[pos]+'" class="img-slide img'+pos+' image-animated lazy">');//shows image
            $('#'+pos).css({'background':'#fff', 'color':'#fff'});//sets background-color of circle representing the current active image to black
            $('#'+(pos-1)).css({'background':'transparent', 'color':'transparent'});//sets background-color of circle before active to white
            if(pos==0){
                $('#'+(arr.length-1)).css({'background':'transparent', 'color':'transparent'});
            }

        },interval);
    }
    /* end of function autoSlide */

    autoSlide(arr,interval);//calls function autoSlide

    /* displays next image */
    function next(){
        if(pos>arr.length-2){
            pos=-1;
        }
        $('#slider').html('<img src="'+arr[pos+1]+'" class="img-slide image-animated lazy">');//show image
        pos++;

        $('#'+pos).css({'background':'#fff', 'color':'#fff'});//sets background-color of circle representing the current active image to black
        $('#'+(pos-1)).css({'background':'transparent', 'color':'transparent'});//sets background-color of circle before active to white
        if(pos==0){
            $('#'+(arr.length-1)).css({'background':'transparent', 'color':'transparent'});
        }
    }
    /* end of function next  */

    /* displays previous image */
    function previous() {
        if(pos<1){
            pos=arr.length;
        }
        $('#slider').html('<img src="'+arr[pos-1]+'" class="img-slide image-animated">');
        pos--;

        $('#'+pos).css({'background':'#fff', 'color':'#fff'});//sets background-color of circle representing the current active image to black
        $('#'+(pos+1)).css({'background':'transparent', 'color':'transparent'});//sets background-color of circle before active to white
        if(pos==arr.length-1){
            $('#0').css({'background':'transparent', 'color':'transparent'});
        }
    }
    /* end of function previous */

    /* onclick next */
    $('button#next').on('click',function (e) {
        e.preventDefault();
        next();//call function next
    });
    /* end of onclick next */

    /* onclick previous */
    $('button#prev').on('click',function (e) {
        e.preventDefault();
        previous();//call function previous
    });
    /* end of onclick previous */

    $('.stage img').attr('src',base_url+'/meghmalhar_final/public/image/home-page-text.png')

});

/* displays image represented by the small circle */
function circleClick(position) {
    if(position!=pos){
        $('#slider').html('<img src="'+arr[position]+'" class="img-slide image-animated">');//show image

        $('#'+position).css({'background':'#fff', 'color':'#fff'});//sets background-color of circle representing the current active image to black
        $('#'+(pos)).css({'background':'transparent', 'color':'transparent'});//sets background-color of circle before active to white

        pos=position;
    }
    /* end of function circleClick */


}
