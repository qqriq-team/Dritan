@extends('site.app')
@section('content')
<div class="container-fluid p-0 ">
 <div class="homepage">
  {{-- <div class="hero">
   <img class="img1" src="/assets/img/Homepage-cover-v5.png" alt="">
   <img class="img2" src="/assets/img/Homepage-cover-v5.png" alt="">
  </div> --}}
  <div class="nav d-flex p-4 ">
   <div class="logo">
    <img class="logo" src="/assets/img/Group 49.svg" alt="">
   </div>
   <div class="nav-links">
    <ul class="d-flex">
     <li class="px-4"><a href="/{{app()->getLocale()}}/biografija">{{ __('text.biografija') }}</a></li>
     <li class="px-4">{{ __('text.media') }}</li>
     <li class="px-4">{{ __('text.dritanizam') }}</li>
     <li class="px-4">{{ __('text.promjena') }}</li>
    </ul>
   </div>
  </div>
  <div class="homepage-text">
   <h1 class="position-absolute p-4">{{ __('text.text1') }} <br>{{ __('text.text2') }} </h1>
  </div>
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
     <li class="px-4">MNE</li>
     <li class="px-4">AL</li>
     <li class="px-4">EN</li>
 
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
const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to(".text", { y: "0%", duration: 1, stagger: 0.25 });
tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 1 });
tl.fromTo(".big-text", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=1");

const bgtl= gsap.timeline();
bgtl.to()

    </script>
  
@endsection