@extends('site.app')
@section('content')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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
      <div class="video-holder w-98 p-2">
        <div class="video w-98">
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
     <div class="languages-mobile mobile">
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
 <div class="container-flud p-0 bg-black-2">
   <div class="padding-left-0">
     <div class="row w-100 p-0 m-sm-0">
       <div data-aos="zoom-in" class="col-lg-6 col-md-12 col-sm-12 p-sm-0">
         <img  src="/assets/img/Slika-za-homepage-URA-KONGRES-ULCINJ.jpg" alt="" class="w-100">
       </div>
       <div data-aos="zoom-in" class="col-lg-6 col-md-12 col-sm-12 pr-0 order-first order-md-last bg-black-2">
         <div class="box p-7 my-4 p-sm-0">
          <h2 class="bold">III KONGRES</h2>
          <h1>MOŽE CRNA GORA!</h1>
          <h2 class="box-h3">Evropska, građanska, ekološka.</h2>
          <a href="/" class="d-flex btn-yt py-2 px-4 mt-4">
          <img class="pr-2" src="/assets/img/yt-icon.svg" alt="">
          <h3 class="m-auto" >Pogledaj promo video sa III kongresa</h3>
          </a>
          </div>
       </div>
     </div>
   </div>
 </div>
 <div class="container-fliud p-0 bg-green">
   <div class="padding-right-0 ">
     <div class="row w-100 p-0">
       <div data-aos="zoom-in" class="col-lg-6 col-md-12 col-sm-12">
         <div class="box-2 p-helper  my-4 my-sm-2">
           <h5 class="box-2-h5">RUKA PRAVDE JE KRENULA</h5>
           <h1>SPISAK POSTOJI!</h1>
           <h5 class="box-2-h5-text pb-5">Odgovaraće svako ko pravi obstrukcije pri oslobađanju Crne Gore od kriminala i korupcije. Crnom Gorom više neće vladati mafija! Neće više vladati ljudi iz sijenke.</h5>
         </div>
       </div>
        <div data-aos="zoom-in" class="col-lg-6 col-md-12 col-sm-12 position-relative">
         <img src="/assets/img/Slika-ruka-pravde (1).png" class="position-absoulte rukapravde" alt="" class="w-100">
       </div>
     </div>
   </div>
 </div>
 <div class="container-fluid p-0 bg-yellow">
   <div class="row w-100 p-0 m-auto">
     <div class="col-12">
       <div class="video-2 my-4 py-4">
         <iframe width="100%"  height="70vh" src="https://www.youtube.com/embed/4lsckQqwET8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

       </div>

     </div>
   </div>
 </div>
 <div class="my-container">
   <div class="padding-lr">
   <div class="row mr-0">
     <div class="col-lg-4 col-md-12 col-sm-12 py-lg-5 py-sm-0 pr-0">
       <div class="iq-left d-flex justify-content-end">
         <div class="iq-text-left float-right p-4 mr-lg-4 mr-sm-0">
           <h4 class="text-align-right py-4 clr-white">“…OVU ZEMLJU <br> RASTURI…”</h4>
           <h1  class="text-align-right">IQ 86</h1>
         </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 py-lg-5 py-sm-0 pl-0">
        <div class="images-box">
          <img data-aos="fade-up" src="assets/img/IQ86-mozak-lijevo.png" class="mozak-left" alt="">
          <img data-aos="fade-down"  src="/assets/img/IQ86-mozak-desno.png"
           class="mozak-right" alt="">
        </div>

     </div>
     <div class="col-lg-4 col-md-12 col-sm-12 py-lg-5 py-sm-0 pl-0">
       <div class="iq-right d-flex justify-content-start">
         <p class="iq-p m-sm-8">Lorem ipsum dolor sit amet, ex veri liberavisse duo. Vivendo qualisque voluptatum duo id. His omittam accusata at. Veri primis eum an, eu eos tota aliquip molestie, duo vide minimum efficiantur an. Ad mucius pertinacia incorrupte duo, alienum repudiare eu sed. Duo id debitis efficiantur, suavitate voluptatum adversarium ea cum. Erant assentior ea usu.</p>
       </div>
     </div>

   </div>
 </div>
</div>
<div class="container-fluid py-4 bg-img">
  <div class="container">
    <div class="row">
      <div class="col-12 pt-7 pb-lg-5 pb-sm-1">
        <h1 class="clr-yellow zal">ZALAGANJE JE ČIN, A NE RIJEČ</h1>
        <h4 class="clr-white tran py-3">Privrženost transformiše obećanja u realnost.</h4>
      </div>
    </div>

<div class="row p-0 ">
  <div class="col-lg-4  p-4">
    <div class="d-flex">
      <div class="icon-r"></div>
      <h4 class="h4 m-auto">Predsjednik Nacionalnog savjeta za borbu protiv korupcije na visokom nivou.</h4>
    </div>
  </div>
  <div class="col-lg-4  p-4">
        <div class="d-flex">
      <div class="icon-r"></div>
      <h4 class="h4 m-auto">Predsjednik Savjeta za kontrolu biračkog spiska.</h4>
    </div>
  </div>
  <div class="col-lg-4 p-4">
        <div class="d-flex">
      <div class="icon-r"></div>
      <h4 class="h4 m-auto">Predsjednik Savjeta za pravo djeteta.</h4>
    </div>
  </div>
</div>
<div class="row p-0">
  <div class="col-lg-4  p-4">
    <div class="d-flex">
      <div class="icon-r"></div>
      <h4 class="h4 m-auto">Predsjednik Komisije za politički sistem, unutrašnju i vanjsku politiku.</h4>
    </div>
  </div>
  <div class="col-lg-4  p-4">
        <div class="d-flex">
      <div class="icon-r"></div>
      <h4 class="h4 m-auto">Koordinator Biroa za operativnu koordinaciju.</h4>
    </div>
  </div>
  <div class="col-lg-4  p-4">
        <div class="d-flex">
      <div class="icon-r"></div>
      <h4 class="h4 m-auto">Zamjenik predsjednika Savjeta za NATO.</h4>
    </div>
  </div>
</div>
  </div>
</div>

 <div class="container-fluid p-0">
   <div class="container">
   <div class="row p-0 w-100">
     <div class="col-lg-6 col-md-12 col-sm-12  p-7 p-sm-0">
       <div class="twit my-4 d-flex">
         <a class="twitter-timeline m-auto" href="https://twitter.com/DritanAbazovic" data-tweet-limit="1"   data-width="300"
  data-height="300" data-chrome="nofooter noborders"></a>
      <script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
       </div>
     </div>
     <div class="col-lg-6 col-md-12 col-sm-12  p-7 p-sm-0 pb-3rem ">
       <div class="twit-box">
         <h4>POSLJEDNJI OBJAVLJENI TWEET</h4>
         <h1>BUDI U TOKU!</h1>
         <p>Zaprati, uključi se, retvituj.</p>
         <a href="" class="t-btn d-flex py-2 px-4 mt-4">
           <img src="/assets/img/t-btn.svg" alt="">
           <p class="m-auto">Zaprati i na tviteru</p>
         </a>
       </div>
     </div>
   </div>
   </div>
 </div>
</div>

<footer class="w-100 ">
  <div class="footer w-100 container p-0">
    <div class="container d-flex justify-content-between">
      <div class="social-footer">
        <ul class="d-flex footer">
          <li><a href="https://www.facebook.com/abazovicdritan/">Facebook</a></li>
          <li><a href="https://twitter.com/dritanabazovic">Twitter</a></li>
          <li><a href="https://www.linkedin.com/in/dritan-abazovic-75312592/?originalSubdomain=me">Linkedin</a></li>
          <li><a href="https://www.instagram.com/dritanabazovic/?hl=sr">Instagram</a></li>
        </ul>
      </div>
      <div class="languages-footer">
        <ul class="d-flex lang-footer">
          <li><a href="/mnecd Dritr" class="active-language ">MNE</a></li>
          <li><a href="/al">AL</a></li>
          <li><a href="/en">EN</a></li>

        </ul>
      </div>
    </div>
  </div>
</footer>

    {{-- <div class="intro">
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
    <div class="slider"></div> --}}
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
  <script>
  AOS.init();
</script>
@endsection