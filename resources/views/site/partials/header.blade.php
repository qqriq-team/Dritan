@extends('site.app')
@section('content')
<div class="container p-0">
 <div class="header ">
  <div class="header-helper  d-flex justify-content-between">
   <div class="logo-header pt-4 pl-0">
    <img class="logo-header-img " src="/assets/img/Group 49.svg" alt="">
      
   </div>
   <div class="header-links">
    <ul class="d-flex m-0">
      <li class="px-4  pt-6"  id="biografija"><a href="/{{app()->getLocale()}}/biografija">{{ __('text.biografija') }}</a></li>
      <li class="px-4  pt-6"  id="media"><a href="/{{app()->getLocale()}}/media">{{ __('text.media') }}</a></li>
      <li class="px-4  pt-6"  id="dritanizam"><a href="/{{app()->getLocale()}}/dritanizam">{{ __('text.dritanizam') }}</a></li>
    </ul>
   </div>
   <div class="header-btn pt-4">
    <a href="" class="btn btn-header">Budi dio promjena</a>
   </div>
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
  }
  else if(catIdPath == 'biografija'){
    $("#biografija").addClass("header-link-active");
  }
    else if(catIdPath == 'dritanizam'){
    $("#dritanizam").addClass("header-link-active");
  }
  else if(catIdPath == 'blog'){
    $("#media").addClass("header-link-active");

  }

  
});
</script>

  @yield('header_content')
@endsection