@extends('site.partials.header')
@section('header_content')
<div class="container-flud p-0 m-0">
 
 <div class="nav-second w-100">
  <div class="container-nav m-auto">
   <ul class="nav nav-pills" id="pills-tab" role="tablist">
     <li class="nav-item" role="presentation">
       <a class="nav-link p-0 pl-0 pr-3 active" id="pills-istorija-tab" data-bs-toggle="pill" data-bs-target="#pills-istorija" type="button" role="tab" aria-controls="pills-istorija" aria-selected="true">{{ __('text.istorijat') }} </a>
     </li>
     <li class="nav-item" role="presentation">
       <a class="nav-link p-0 px-3" id="pills-biografija-tab" data-bs-toggle="pill" data-bs-target="#pills-biografija" type="button" role="tab" aria-controls="pills-biografija" aria-selected="false">{{ __('text.biografija') }} </a>
     </li>

   </ul>
 </div>
</div>
<div class="container">

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show  active" id="pills-istorija" role="tabpanel" aria-labelledby="pills-istorija-tab">
<ul
      class="nav w-100 nav-pills mb-3 m-auto d-flex justify-content-between timeline"
      id="pills-tab"
      role="tablist"
      style="white-space: nowrap"
    >
      <li class="nav-item" role="presentation">
        <button
          class="nav-link border-none  active"
          id="pills-djetinjstvo-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-djetinjstvo"
          type="button"
          role="tab"
          aria-controls="pills-djetinjstvo"
          aria-selected="true"
        >
          <img class="round-img" src="/assets/img/9.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">{{ __('text.djetinjstvo') }}</p>
        </button>
      </li>
      <li class="nav-item " role="presentation">
        <button
          class="nav-link border-none"
          id="pills-obrazovanje-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-obrazovanje"
          type="button"
          role="tab"
          aria-controls="pills-obrazovanje"
          aria-selected="false"
        >
          <img class="round-img" src="/assets/img/dritan2.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">{{ __('text.obrazovanje') }}</p>
          
        </button>
      </li>
      <li class="nav-item border-none" role="presentation">
        <button
          class="nav-link border-none"
          id="pills-nauka-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-nauka"
          type="button"
          role="tab"
          aria-controls="pills-nauka"
          aria-selected="false"
        >
          <img class="round-img" src="/assets/img/dritan5.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">{{ __('text.naucnirad') }}</p>

        </button>
      </li>
            <li class="nav-item" role="presentation">
        <button
          class="nav-link border-none"
          id="pills-karijera-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-karijera"
          type="button"
          role="tab"
          aria-controls="pills-karijera"
          aria-selected="false"
        >
          <img class="round-img" src="/assets/img/dritan33.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">{{ __('text.karijera') }}</p>

        </button>
      </li>
        <li class="nav-item" role="presentation">
        <button
          class="nav-link border-none"
          id="pills-politika-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-politika"
          type="button"
          role="tab"
          aria-controls="pills-politika"
          aria-selected="false"
        >
          <img class="round-img" src="/assets/img/dritan4.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">{{ __('text.politickiangazman') }}</p>

        </button>
      </li>
              <li class="nav-item" role="presentation">
        <button
          class="nav-link border-none"
          id="pills-rad-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-rad"
          type="button"
          role="tab"
          aria-controls="pills-rad"
          aria-selected="false"
        >
          <img class="round-img" src="/assets/img/dritan6.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">{{ __('text.dobrotvornirad') }}</p>

        </button>
      </li>
      <hr class="hr-mobile"/>
    </ul>
    <div class="tab-content container" id="pills-tabContent">
      <div
        class="tab-pane fade show active"
        id="pills-djetinjstvo"
        role="tabpanel"
        aria-labelledby="pills-djetinjstvo-tab"
      >
        <h1 class="h1-m"></h1>
        <p>
{{ __('text.djetinjstvo1') }} 
        </p>
      </div>
      <div
        class="tab-pane fade"
        id="pills-obrazovanje"
        role="tabpanel"
        aria-labelledby="pills-obrazovanje-tab"
      >
        <h1 class="h1-m"></h1>
        <p>
{{ __('text.obrazovanje1') }} 
<br>
<br>
{{ __('text.obrazovanje2') }} 

        </p>
      </div>
      <div
        class="tab-pane fade"
        id="pills-nauka"
        role="tabpanel"
        aria-labelledby="pills-nauka-tab"
      >
        <h1 class="h1-m"></h1>
        <p>
          {{ __('text.rad1') }} 
        </p>
         <p>
          {{ __('text.rad2') }} 
        </p>
         <p>
        {{ __('text.rad3') }} 
        </p>
         <p>
        {{ __('text.rad4') }} 
        </p>
        <p>
        {{ __('text.rad5') }} 
        </p>
        <p>
        {{ __('text.rad6') }} 
        </p>
      </div>
            <div
        class="tab-pane fade"
        id="pills-karijera"
        role="tabpanel"
        aria-labelledby="pills-karijera-tab"
      >
        <h1 class="h1-m"></h1>
        <p>
          <p>
        {{ __('text.karijera1') }} 

          </p>
          <p>
        {{ __('text.karijera2') }} 

          </p>
          <p>
        {{ __('text.karijera3') }} 

          </p>
        </p>
      </div>
      <div
         class="tab-pane fade"
         id="pills-politika"
         role="tabpanel"
         aria-labelledby="pills-politika-tab"
       >
         <h1 class="h1-m"></h1>
         <p>
          <p>
        {{ __('text.angazman1') }} 
        <br>
        {{ __('text.angazman2') }} 

          </p>
          <p>
        {{ __('text.angazman3') }} 

          </p>
          <p>
        {{ __('text.angazman4') }} 

          </p>
         </p>
       </div>
             <div
         class="tab-pane fade"
         id="pills-rad"
         role="tabpanel"
         aria-labelledby="pills-rad-tab"
       >
         <h1 class="h1-m">rad</h1>
         <p>
nema teskta
         </p>
       </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-biografija" role="tabpanel" aria-labelledby="pills-biografija-tab">
   <div class="row">
    <div class="col-lg-3 col-12">slika</div>
    <div class="col-lg-9 col-12">
      <h2 class="clr-blue">{{ __('text.naslovknjige1') }}</h2>
      <p>{{ __('text.tekstknjige1') }}</p>
      <a href="" class="clr-yellow d-flex">
        <div class="icon"></div>
        <p class="clr-yellow p-1">Prelistaj knjigu</p>
      </a>
    </div>
   </div>
  </div>
</div>
</div>
</div>


@endsection