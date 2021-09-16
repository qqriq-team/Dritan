@extends('site.app')
@section('content')
<div class="container p-0">
 <div class="header  header-desktop">
  <div class="header-helper  d-flex justify-content-between">
   <div class="logo-header pt-4 pl-0 ml-md-3">
     <a href="/">
    <img class="logo-header-img " src="/assets/img/logo-D.svg" alt="">
      </a>
   </div>
   <div class="header-links">
    <ul class="d-flex m-0">
      <li class="px-4  pt-6-h p-l-t"  id="biografija"><a href="/{{app()->getLocale()}}/biografija">{{ __('text.biografija') }}</a></li>
      <li class="px-4  pt-6-h p-l-t"  id="media"><a href="/{{app()->getLocale()}}/media">{{ __('text.media') }}</a></li>
      <li class="px-4  pt-6-h p-l-t"  id="dritanizam"><a href="/{{app()->getLocale()}}/dritanizam">{{ __('text.dritanizam') }}</a></li>
    </ul>
   </div>
   <div class="header-btn pt-4 mr-md-3">
    <a href="https://www.facebook.com/abazovicdritan/" class="btn btn-header-2 ">{{ __('text.promjena') }} </a>
   </div>
  </div>
 </div>

 <!--Header moble -->
 <div class="header-mobile">
   <div class="d-flex justify-content-between">

     <div class="header-mobile-logo">
     <img class="logo-header-img m-4" src="/assets/img/logo-D.svg" width="100%" alt="">
    </div>
       <div class="header-btn-mobile">
     <div class="header-toggle">
    </div>
   </div>
  </div>
      <div class="header-mobile-links">
        <ul>
          <li><a id="biografija-mobile" href="/{{app()->getLocale()}}/biografija">{{ __('text.biografija') }}</a></li>
          <li><a id="media-mobile" href="/{{app()->getLocale()}}/media">{{ __('text.media') }}</a></li>
          <li><a id="dritanizam-mobile" href="/{{app()->getLocale()}}/dritanizam">{{ __('text.dritanizam') }}</a></li>
          
        </ul>
        
      </div>
 </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
<script>
  $(document).ready(function () {
  let pathname = window.location.pathname;
    let catIdPath = pathname.substring(5);
  console.log(catIdPath);

  if(catIdPath == 'media'){
    $("#media").addClass("header-link-active");
    $("#media-mobile").addClass("mobile-active");

  }
  else if(catIdPath == 'biografija'){
    $("#biografija").addClass("header-link-active");
    $("#biografija-mobile").addClass("mobile-active");

  }
    else if(catIdPath == 'dritanizam'){
    $("#dritanizam").addClass("header-link-active");
    $("#dritanizam-mobile").addClass("mobile-active");

  }
  else if(catIdPath == 'blog'){
    $("#media").addClass("header-link-active");

  }

  
});
const menuBtn = document.querySelector('.header-btn-mobile');
const navLinks = document.querySelector('.header-mobile-links');

let menuOpen = false;
menuBtn.addEventListener('click', ()=>{
  if(!menuOpen){
    menuBtn.classList.add('open');
    navLinks.classList.add('mobile-open')
    menuOpen= true;
  }else{
    menuBtn.classList.remove('open');
    navLinks.classList.remove('mobile-open')

    menuOpen= false;
  }
});

</script>
  @yield('header_content')

  @include('site.partials.footer')
@endsection