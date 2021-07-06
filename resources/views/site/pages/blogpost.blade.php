@extends('site.partials.header')
@section('header_content')
 <div class="nav-second w-100">
  <div class="container-nav-media m-auto">
   <ul class="nav nav-pills" id="pills-tab" role="tablist">
     <li class="nav-item" role="presentation">
       <a class="nav-link p-0 pl-0 pr-3 active" id="pills-aktivizam-tab" href="/media" >Građanski aktivizam</a>
     </li>
     <li class="nav-item" role="presentation">
       <a class="nav-link p-0 px-3" id="pills-politicki-tab" href="/media">Politički aktivizam</a>
     </li>
          <li class="nav-item" role="presentation">
       <a class="nav-link p-0 px-3" id="pills-globus-tab" href="/media">Globus</a>
     </li>

   </ul>
 </div>
</div>
<div class="container blog-helper">
 <div class="row py-4">
  <div class="col-lg-5 col-md-12 col-sm-12  p-0">
   <div class="blog-img">
    <img id='blog-img-one' src="/assets/blog_cover_img/{{$blogs->cover_image}}" alt="">
    
    <div id="slide-wrapper" class="img-slider">
     <img id="slider-left-blog" class="arrow" src="/assets/img/Drop_down_strelica_left-01.svg" alt="">
     <div id="slider">
      <img class="thumbnail active-thumbnail" src="/assets/blog_images/{{$blogs->images}}" alt="">
      {{-- <img class="thumbnail" src="/assets/img/4.jpeg" alt="">
      <img class="thumbnail" src="/assets/img/5.jpg" alt="">
      <img class="thumbnail" src="/assets/img/5.jpg" alt="">
      <img class="thumbnail" src="/assets/img/5.jpg" alt=""> --}}

     </div>
     <img id="slider-right-blog" class="arrow" src="/assets/img/Drop_down_strelica_right-01.svg" alt="">
   </div>


   </div>
  </div>
  <div class=" col-lg-6 col-md-12 col-sm-12 ">
   <div class="blog-text">
    <h1>{{$blogs->title_mne}}</h1>
    <p>{{$blogs->blog_mne}}</p>
    <div class="blog-links ">
     <ul class="position-absolute d-flex">
      <li class="p-2"><img src='/assets/img/tweter.svg'></li>
      <li class="p-2"><img src='/assets/img/facebook.svg'></li>
      <li class="p-2"><img src='/assets/img/share.svg'></li>
      <li class="p-2"><img src='/assets/img/mail.svg'></li>
     </ul>
    </div>
   </div>
  </div>
 </div>
 <div class="blog-video py-5">
  <iframe width="560" height="315" src="{{$blogs->yt_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
 </div>
 <hr class="hr w-100">
 <div class="row mb-5">
  <div class="col-lg-4 col-md-12 col-sm-12 col-sx-12">
           <a href="/blog">
    <div class="owl-carousel owl-theme drag-m" >
              <div class="item" > 
                  <img class="d-block w-100 drop-desk-img-m"src="/assets/img/9.png" alt="Slika">
              </div>

               <div class="item">
                  <img class="d-block w-100 drop-desk-img-m " src="/assets/img/9.png" alt="Slika">
               </div>

               <div class="item">
                  <img class="d-block w-100 drop-desk-img-m " src="/assets/img/1.png" alt="Slika">
               </div>

               <div class="item">
                  <img class="d-block w-100 drop-desk-img-m " src="/assets/img/2.png" alt="Slika">
               </div>
      </div>
     <div class="owl-bg">
      <p class="p-2">Lorem, ipsum dolor.</p>
     </div>
     </a>
  </div>
 </div>
</div>
<script type="text/javascript">
let thumnails = document.getElementsByClassName("thumbnail");
let activeImages = document.getElementsByClassName("active-thumbnail");

for (var i = 0; i < thumnails.length; i++) {
    thumnails[i].addEventListener("click", function () {
        if (activeImages.length > 0) {
            activeImages[0].classList.remove("active-thumbnail");
        }
        this.classList.add("active-thumbnail");
        document.getElementById("blog-img-one").src = this.src;
    });
}

let btnRight = document.getElementById('slider-right-blog');
let btnLeft = document.getElementById('slider-left-blog');

btnLeft.addEventListener('click',function(){
document.getElementById('slider').scrollLeft -= 180;

})
btnRight.addEventListener('click',function(){
			document.getElementById('slider').scrollLeft += 180;

})

console.log("alert");


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
 
$('.owl-carousel').owlCarousel({
    loop:true,
    items:1,
    stagePadding: 0,
    lazyLoad:true,
    rtl:true,
    autplay:true, 
    nav:true,
    navigation:true,
    smartSpeed: 200,
    dots:false
})

 
</script>
@endsection