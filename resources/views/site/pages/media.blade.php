@extends('site.partials.header')
@section('header_content')
<div class="container-flud p-0 m-0">
 
 <div class="nav-second w-100">
  <div class="container-nav-media m-auto">
   <ul class="nav nav-pills" id="pills-tab" role="tablist">
     <li class="nav-item" role="presentation">
       <a class="nav-link p-0 pl-0 pr-3 active" id="pills-aktivizam-tab" data-bs-toggle="pill" data-bs-target="#pills-aktivizam" type="button" role="tab" aria-controls="pills-aktivizam" aria-selected="true">Građanski aktivizam</a>
     </li>
     <li class="nav-item" role="presentation">
       <a class="nav-link p-0 px-3" id="pills-politicki-tab" data-bs-toggle="pill" data-bs-target="#pills-politicki" type="button" role="tab" aria-controls="pills-politicki" aria-selected="false">Politički aktivizam</a>
     </li>
          <li class="nav-item" role="presentation">
       <a class="nav-link p-0 px-3" id="pills-globus-tab" data-bs-toggle="pill" data-bs-target="#pills-globus" type="button" role="tab" aria-controls="pills-globus" aria-selected="false">Globus</a>
     </li>

   </ul>
 </div>
</div>
<div class="container">

<div class="tab-content p-0" id="pills-tabContent">
  <div class="tab-pane fade show  active" id="pills-aktivizam" role="tabpanel" aria-labelledby="pills-istorija-tab">
    <h1>Gradjanski aktivizam</h1>
    <div class="row">
     <div class="col-4">
        <a class="blog-link-space" href="{{route('blog', app()->getLocale())}}">
        </a>
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

      </div>
           <div class="col-4">
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

      </div>
           <div class="col-4">
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
      </div>
     </div>
     <div class="row pt-4">
            <div class="col-4">
               <a href="">
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
      </a>
     <div class="owl-bg">
      <p class="p-2">Lorem, ipsum dolor.</p>
     </div>

      </div>
     </div>
    </div>
    <div class="tab-pane fade" id="pills-politicki" role="tabpanel" aria-labelledby="pills-politicki-tab">
      <h1>Gradjanski aktivizam</h1>
    <div class="row">
     <div class="col-4">
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

      </div>
           <div class="col-4">
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

      </div>
           <div class="col-4">
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
      </div>
     </div>
    </div>
     <div class="tab-pane fade" id="pills-globus" role="tabpanel" aria-labelledby="pills-globus-tab">
     <h1>Globus</h1>
    </div>
 </div>
</div>
</div>
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