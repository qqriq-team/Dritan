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
     <img  src="/assets/img/pocetna3.jpg">
     <div class="homepage-text">
       <h1 class="position-absolute p-4">
“Put koji smo izabrali je težak ali pravičan i ne <br> brinem, jer znam da ne koračam sam.”
       </h1>
     </div>
   </div>
   <div >
     <img  src="/assets/img/pocetna2.png">
          <div class="homepage-text">
       <h1 class="position-absolute p-4">
“Kreće novi put evropske, građanske i <br> ekološke Crne Gore ”
       </h1>
     </div>
   </div>
   <div >
      <img  src="/assets/img/Homepage-cover-v5.png"> 
          <div class="homepage-text">
       <h1 class="position-absolute p-4">
“Kreće novi put evropske, građanske i <br> ekološke Crne Gore ”

       </h1>
     </div>

   </div>
</div>


  <div class="nav navbar-homepage-helper d-flex p-4 justify-content-between">
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
  <div class="video-container position-absolute">
    <div class="blur-bg"></div>
      <div class="video-holder w-100 p-2">
        <div class="video w-100 p-2">
          <div class="row">
            @foreach ($videos as $video)
            <div class="col-6">
              <iframe width="100%" height="315" src="{{$video->yt_link}}" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
            </div>
            <div class="col-6 position-relative">
              <p class="video-font">{{$video->naslov}}</p>
              {{-- <p class="date-video">20.01.2021.</p> --}}
            </div>
            @endforeach

          </div>

        </div>
        <div class="more-link">
          <a href="/{{app()->getLocale()}}/media">Vidi još</a>
        </div>
      </div>
  </div>
  {{-- <div class="homepage-text">
   <h1 class="position-absolute p-4">{{ __('text.text1') }} <br>{{ __('text.text2') }} </h1>
  </div> --}}
  <div class="homepage-footer p-4 position-absolute d-flex justify-content-between">
   <div class="homepage-links">
    <ul class="d-flex">
     <li class="px-4">Facebook</li>
     <li class="px-4">Twitter</li>
     <li class="px-4">Linkedin</li>
     <li class="px-4">Instagram</li>
    </ul>
   </div>
   <div class="languages">
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

let videoOpen = false;
videoBtn.addEventListener('click', ()=>{
  if(!videoOpen){
    videoContainer.classList.add('video-container-open');
    videoOpen= true;
  }else{
    videoContainer.classList.remove('video-container-open');

    videoOpen= false;
  }
});
const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to(".text", { y: "0%", duration: 1, stagger: 0.25 });
tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 1 });
tl.fromTo(".big-text", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=1");


    </script>
  
@endsection