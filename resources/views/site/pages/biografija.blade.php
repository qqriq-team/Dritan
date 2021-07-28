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
       <a class="nav-link p-0 px-3" id="pills-biografija-tab" data-bs-toggle="pill" data-bs-target="#pills-biografija" type="button" role="tab" aria-controls="pills-biografija" aria-selected="false">{{ __('text.bibliografija') }} </a>
     </li>
          {{-- <li class="nav-item" role="presentation">
       <a class="nav-link p-0 px-3" id="pills-paneli-tab" data-bs-toggle="pill" data-bs-target="#pills-paneli" type="button" role="tab" aria-controls="pills-paneli" aria-selected="false">Paneli/Predavač</a>
     </li>
          <li class="nav-item" role="presentation">
       <a class="nav-link p-0 px-3" id="pills-konferencije-tab" data-bs-toggle="pill" data-bs-target="#pills-konferencije" type="button" role="tab" aria-controls="pills-konferencije" aria-selected="false">Konferencije</a>
     </li>
          <li class="nav-item" role="presentation">
       <a class="nav-link p-0 px-3" id="pills-skole-tab" data-bs-toggle="pill" data-bs-target="#pills-skole" type="button" role="tab" aria-controls="pills-skole" aria-selected="false">Škole</a>
     </li>
          <li class="nav-item" role="presentation">
       <a class="nav-link p-0 px-3" id="pills-clanci-tab" data-bs-toggle="pill" data-bs-target="#pills-clanci" type="button" role="tab" aria-controls="pills-clanci" aria-selected="false">Članci </a>
     </li> --}}

   </ul>
 </div>
</div>
<div class="container">

<div class="tab-content mb-7 " id="pills-tabContent">
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
          <img class="round-img" src="/assets/img/obrazovanje.jpg" alt="" />
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
          <img class="round-img" src="/assets/img/dritan-slika-1.jpg" alt="" />
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
              {{-- <li class="nav-item" role="presentation">
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
      </li> --}}
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
             {{-- <div
         class="tab-pane fade"
         id="pills-rad"
         role="tabpanel"
         aria-labelledby="pills-rad-tab"
       >
         <h1 class="h1-m">rad</h1>
         <p>
            nema teskta
         </p>
       </div> --}}
    </div>
  </div>
  <div class="tab-pane fade" id="pills-biografija" role="tabpanel" aria-labelledby="pills-biografija-tab">
   <div class="row">
    <div class="col-lg-3 col-12"><img src="/assets/img/Dritan Abazović - Kosmopolitska kultura - Knjiga-Mockup.png" width="100%" alt=""></div>
    <div class="col-lg-9 col-12">
      <h2 class="clr-blue">{{ __('text.naslovknjige1') }}</h2>
      <p>{{ __('text.tekstknjige1') }}</p>
      <div class="d-flex">
        <a href="/assets/books/Dritan Abazovic -Kosmopolitska kultura i globalna pravda.pdf" target="_blank" class="clr-yellow d-flex">
          <div class="icon"><img src="/assets/img/book-icon.svg" alt=""></div>
          <a href="/assets/books/Dritan Abazovic -Kosmopolitska kultura i globalna pravda.pdf" target="_blank" class="clr-yellow p-1">Prelistaj knjigu</a>
        </a>
      </div>
    </div>
   </div>
  </div>
    {{-- <div class="tab-pane fade" id="pills-paneli" role="tabpanel" aria-labelledby="pills-paneli-tab">
   <div class="row">
     <div class="paneli-text">
      <p>
        <span class="panel-num ">1.</span>
        {{ __('text.panel1') }}
        </p> 
              <p>
        <span class="panel-num">2.</span>
        {{ __('text.panel2') }}
        </p>       
        <p>
        <span class="panel-num">3.</span>
        {{ __('text.panel3') }}
        </p>      
         <p>
        <span class="panel-num">4.</span>
        {{ __('text.panel4') }}
        </p>      
         <p>
        <span class="panel-num">5.</span>
        {{ __('text.panel5') }}
        </p>       
        <p>
        <span class="panel-num">6.</span>
        {{ __('text.panel6') }}
        </p>       
        <p>
        <span class="panel-num">7.</span>
        {{ __('text.panel7') }}
        </p>       
        <p>
        <span class="panel-num">8.</span>
        {{ __('text.panel8') }}
        </p>       
        <p>
        <span class="panel-num">9.</span>
        {{ __('text.panel9') }}
        </p>       
        <p>
        <span class="panel-num">10.</span>
        {{ __('text.panel10') }}
        </p>       
        <p>
        <span class="panel-num">11.</span>
        {{ __('text.panel11') }}
        </p>       
        <p>
        <span class="panel-num">12.</span>
        {{ __('text.panel12') }}
        </p> 
     </div>
  </div>
</div>
    <div class="tab-pane fade" id="pills-konferencije" role="tabpanel" aria-labelledby="pills-konferencije-tab">
   <div class="row">
     <div class="paneli-text">
      <p>
        <span class="panel-num ">1.</span>
        {{ __('text.konferencija1') }}
        </p> 
              <p>
        <span class="panel-num">2.</span>
        {{ __('text.konferencija2') }}
        </p>       
        <p>
        <span class="panel-num">3.</span>
        {{ __('text.konferencija3') }}
        </p>      
         <p>
        <span class="panel-num">4.</span>
        {{ __('text.konferencija4') }}
        </p>      
         <p>
        <span class="panel-num">5.</span>
        {{ __('text.konferencija5') }}
        </p>       
        <p>
        <span class="panel-num">6.</span>
        {{ __('text.konferencija6') }}
        </p>       
        <p>
        <span class="panel-num">7.</span>
        {{ __('text.konferencija7') }}
        </p>       
        <p>
        <span class="panel-num">8.</span>
        {{ __('text.konferencija8') }}
        </p>       
        <p>
     </div>
  </div>
</div>
      <div class="tab-pane fade" id="pills-skole" role="tabpanel" aria-labelledby="pills-skole-tab">
   <div class="row">
<div class="paneli-text">
      <p>
        <span class="panel-num ">1.</span>
        {{ __('text.skole1') }}
        </p> 
              <p>
        <span class="panel-num">2.</span>
        {{ __('text.skole2') }}
        </p>       
        <p>
        <span class="panel-num">3.</span>
        {{ __('text.skole3') }}
        </p>      
         <p>
        <span class="panel-num">4.</span>
        {{ __('text.skole4') }}
        </p>      
         <p>
        <span class="panel-num">5.</span>
        {{ __('text.skole5') }}
        </p>       
     </div>
  </div>
</div>

        <div class="tab-pane fade" id="pills-clanci" role="tabpanel" aria-labelledby="pills-clanci-tab">
   <div class="row">
<div class="paneli-text">
      <p>
        <span class="panel-num ">1.</span>
        {{ __('text.clanci1') }}
        </p> 
              <p>
        <span class="panel-num">2.</span>
        {{ __('text.clanci2') }}
        </p>       
        <p>
        <span class="panel-num">3.</span>
        {{ __('text.clanci3') }}
        </p>      
         <p>
        <span class="panel-num">4.</span>
        {{ __('text.clanci4') }}
        </p>      
         <p>
        <span class="panel-num">5.</span>
        {{ __('text.clanci5') }}
        </p>       
     </div> 
  </div>
</div>
--}}

@endsection