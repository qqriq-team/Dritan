@extends('site.app')
@section('content')
<div class="container-fluid p-0 ">
 <div class="homepage">
  {{-- <div class="hero">
   <img class="img1" src="/assets/img/Homepage-cover-v5.png" alt="">
   <img class="img2" src="/assets/img/Homepage-cover-v5.png" alt="">
  </div> --}}


<div id="slideshow">
   <div >
     <img class="desktop" src="/assets/img/pocetna3.jpg">
     <img class="mobile mobile-img-home" src="/assets/img/dritanmob.png">

     <div class="homepage-text">
       <h1 class="position-absolute p-4 ">
“Put koji smo izabrali je težak ali pravičan i ne <br> brinem, jer znam da ne koračam sam.”
       </h1>
     </div>
   </div>
   <div >
     <img class="desktop"   src="/assets/img/pocetna2.png">
     <img class="mobile mobile-img-home" src="/assets/img/dritanmob2.png">
          <div class="homepage-text">
       <h1 class="position-absolute p-4">
“Kreće novi put evropske, građanske i <br> ekološke Crne Gore ”
       </h1>
     </div>
   </div>
   <div >
      <img  class="desktop"  src="/assets/img/Homepage-cover-v5.png"> 
     <img class="mobile mobile-img-home" src="/assets/img/dritanmob3.png">
          <div class="homepage-text">
       <h1 class="position-absolute p-4">
“Kreće novi put evropske, građanske i <br> ekološke Crne Gore ”

       </h1>
     </div>

   </div>
</div>


  <div class="nav navbar-homepage-helper nav-desktop d-flex p-4 justify-content-between">
   <div class="logo">
     <a href="/">
      <img class="logo-img" src="/assets/img/Group 49.svg" alt="">
    </a>
   </div>
   <div class="nav-links w-0">
    <ul class="d-flex mb-0">
     <li class="px-4"><a href="/{{app()->getLocale()}}/biografija">{{ __('text.biografija') }}</a></li>
     <li class="px-4"><a href="/{{app()->getLocale()}}/media">{{ __('text.media') }}</a></li>
     <li class="px-4"><a href="/{{app()->getLocale()}}/dritanizam">{{ __('text.dritanizam') }}</a></li>
     <li class="px-4"><a href="https://www.facebook.com/abazovicdritan/">{{ __('text.promjena') }}</a></li>
    </ul>
   </div>
   <div class="div video-nav d-flex w-20">
     <img class="mr-4" src="/assets/img/yt-icon.svg" alt=""> 
     <a class="btn btn-header m-0 no-wrap video-click">
       {{ __('text.pogledaj') }}
      </a>
   </div>
  </div>
  {{-- mobile header --}}
  <div class="mobile-nav mobile">
    <div class="nav-wrapper d-flex">

        <div class="mobile-logo">
              <a href="/">
          <img class="logo-img" src="/assets/img/dritanmoblogo.svg" alt="">
        </a>
        </div>
        <div class="header-btn-mobile header-home">
        <div class="header-toggle toggler-home"></div>
      </div>
    </div>
  </div>
  <div class="nav-links-container-mobile mobile">
      <ul>
        <li><a id="biografija-mobile" href="/{{app()->getLocale()}}/biografija">{{ __('text.biografija') }}</a></li>
        <hr class="hr-nav hr-50">
        <li><a id="media-mobile" href="/{{app()->getLocale()}}/media">{{ __('text.media') }}</a></li>
        <hr class="hr-nav hr-60">
        <li><a id="dritanizam-mobile" href="/{{app()->getLocale()}}/dritanizam">{{ __('text.dritanizam') }}</a></li>
        <hr class="hr-nav hr-70">
      </ul>
      <div class="w-100">
      <div class="header-btn pt-4 mr-md-3 w-100 home-btn ">
        <a href="https://www.facebook.com/abazovicdritan/" class="btn btn-header m-auto">Budi dio promjena</a>
      </div>
      </div>
  </div>

 </div>
  <div class="video-mobile-btn d-flex mobile">
    <img class="pr-2 pt-2 pb-2 pl-4 mobile" src="/assets/img/yt-icon.svg" alt=""> 
    <div class="mobile-vid p-2 mobile">Pogledaj, poslušaj, procijeni.</div>
  </div>
  <div class="video-container video-mobile position-absolute">
    <div class="blur-bg"></div>
      <div class="video-holder w-100 p-2">
        <div class="video w-100">
          <div class="row p-2">

            @foreach ($videos as $video)
            <div class="col-6">
              <iframe width="100%" height="315" src="{{$video->yt_link}}" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
            </div>
            <div class="col-6 position-relative">
              <p class="video-font">{{$video->naslov}}</p>
            </div>
            @endforeach

          </div>

        </div>
        <div class="more-link">
          <a href="/{{app()->getLocale()}}/media">Vidi još</a>
        </div>
      </div>
  </div>
     <div class="languages-mobile ">
    <ul class="d-flex">
     <li class="px-2 active-language">MNE</li>
     <li class="px-2">AL</li>
     <li class="px-2">EN</li>
    </ul>
   </div>
  {{-- <div class="homepage-text">
   <h1 class="position-absolute p-4">{{ __('text.text1') }} <br>{{ __('text.text2') }} </h1>
  </div> --}}
  <div class="homepage-footer p-4 position-absolute d-flex justify-content-between">
   <div class="homepage-links">
    <ul class="d-flex">
     <li class="px-1">Facebook</li>
     <li class="px-3 ">Twitter</li>
     <li class="px-3 ">Linkedin</li>
     <li class="px-3 ">Instagram</li>
    </ul>
   </div>
   <div class="languages desktop">
    <ul class="d-flex">
     <li class="px-2">MNE</li>
     <li class="px-2">AL</li>
     <li class="px-2">EN</li>
    </ul>
   </div>
  </div>
 </div>
</div>
    <div class="intro">
      <div class="intro-text">
        <h1 class="hide">
          <span class="text">{{ __('text.intro1') }}</span>
        </h1>
        <h1 class="hide">
          <span class="text">{{ __('text.intro2') }}</span>
        </h1>
        <h1 class="hide">
          <span class="text">{{ __('text.intro3') }}</span>
        </h1>
      </div>
    </div>
    <div class="slider"></div>
          <script
  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
  integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
  crossorigin="anonymous"
></script>
    <script>
      
      const videoBtn = document.querySelector('.video-click');
      const videoContainer = document.querySelector('.video-container');
      const videoBg = document.querySelector('.blur-bg');

        let videoOpen = false;
        videoBtn.addEventListener('click', ()=>{
          if(!videoOpen){
            videoContainer.classList.add('video-container-open');
            videoOpen= true;
            videoBg.classList.add('h-22');
          }else{
            videoContainer.classList.remove('video-container-open');

            videoOpen= false;
            videoBg.classList.remove('h-22');

          }
        });
const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to(".text", { y: "0%", duration: 1, stagger: 0.25 });
tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 1 });
tl.fromTo(".big-text", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=1");


const menuBtn = document.querySelector('.header-home');
const navLinks = document.querySelector('.nav-links-container-mobile');

let menuOpen = false;
menuBtn.addEventListener('click', ()=>{
  if(!menuOpen){
    menuBtn.classList.add('mobile-open');
    navLinks.classList.add('nav-links-container-mobile-open')
    menuOpen= true;
  }else{
    menuBtn.classList.remove('mobile-open');
    navLinks.classList.remove('nav-links-container-mobile-open')

    menuOpen= false;
  }
});
      const btnForVideo = document.querySelector('.video-mobile-btn');
      const videoContainerForMobile = document.querySelector('.video-container');

        let openVideoMobile = false;
        btnForVideo.addEventListener('click', ()=>{
          if(!openVideoMobile){
            videoContainerForMobile.classList.add('op-1');
            openVideoMobile= true;
          }else{
            videoContainerForMobile.classList.remove('op-1');

            openVideoMobile= false;

          }
        });

    </script>
  
@endsection