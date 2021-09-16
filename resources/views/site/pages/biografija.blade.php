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
       <h1 class="bio-h1">{{ __('text.biografija') }} </h1>
   <p class="bio-p">{{ __('text.biografija-intro') }}</p>
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
          <img class="round-img" src="/assets/img/obrazovanje.jpg" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">{{ __('text.obrazovanje') }}</p>
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
          <img class="round-img" src="/assets/img/funkcije.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute w-80">{{ __('text.funkcije') }}</p>
          
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
          <img class="round-img" src="/assets/img/3-naucni-rad-color.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute w-80">{{ __('text.karijera') }}</p>

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
          <img class="round-img" src="/assets/img/4-radna-karijera-color.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute ">{{ __('text.politicka-karijera') }}</p>

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
          <img class="round-img" src="/assets/img/privatnizivot.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">{{ __('text.privatni-zivot') }}</p>

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
<p>{{ __('text.obrazovanje-bio1') }} </p>
<p>{{ __('text.obrazovanje-bio2') }} </p>
<p>{{ __('text.obrazovanje-bio3') }} </p>
<p>{{ __('text.obrazovanje-bio4') }} </p>
<p>{{ __('text.obrazovanje-bio5') }} </p>


      </div>
      <div
        class="tab-pane fade"
        id="pills-obrazovanje"
        role="tabpanel"
        aria-labelledby="pills-obrazovanje-tab"
      >
        <h1 class="h1-m"></h1>
<p>{{ __('text.funkcije-bio1') }} </p>
<p>{{ __('text.funkcije-bio2') }} </p>
<p>{{ __('text.funkcije-bio3') }} </p>
<p>{{ __('text.funkcije-bio4') }} </p>
<p>{{ __('text.funkcije-bio5') }} </p>
<p>{{ __('text.funkcije-bio6') }} </p>

      </div>
      <div
        class="tab-pane fade"
        id="pills-nauka"
        role="tabpanel"
        aria-labelledby="pills-nauka-tab"
      >
        <h1 class="h1-m"></h1>
        <p>
          {{ __('text.karijera-bio1') }} 
        </p>
         <p>
          {{ __('text.karijera-bio2') }} 
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
        {{ __('text.politickakarijera-bio1') }} 

          </p>
          <p>
        {{ __('text.politickakarijera-bio2') }} 

          </p>
          <p>
        {{ __('text.politickakarijera-bio3') }} 

          </p>
          <p>
        {{ __('text.politickakarijera-bio4') }} 

          </p>

          <p>
        {{ __('text.politickakarijera-bio5') }} 

          </p>
               <p>
        {{ __('text.politickakarijera-bio6') }} 

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
        {{ __('text.privatnizivot-bio1') }} 
          </p>
          <p>

        {{ __('text.privatnizivot-bio2') }} 

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
      <div class="d-flex justify-content-center w-100">
        <div class="bib-tab p-2 " onclick="showKnjige()">
          <div  class="icon-box-b box-b-1 active-box"><img src="/assets/img/Layer 2.svg" alt=""></div>
          <div class="bib-text p-2">{{ __('text.knjige') }} </div>
        </div>
          <div class="bib-tab p-2" onclick="showPredavanja()">
          <div class="icon-box-b box-b-2"><img src="/assets/img/Ikonice lecturer - icon.svg" alt=""></div>
          <div class="bib-text p-2">{{ __('text.predavanja') }} </div>
        </div>
        <div class="bib-tab p-2" onclick="showKonferencije()">
          <div class="icon-box-b box-b-3"><img src="/assets/img/Ikonice - conference-icon.svg" alt=""></div>
          <div class="bib-text p-2">{{ __('text.konferencije') }} </div>
        </div>
        <div class="bib-tab p-2" onclick="showSpisi()">
          <div class="icon-box-b box-b-4"><img src="/assets/img/Ikonice - rticle-icon.svg" alt=""></div>
          <div class="bib-text p-2">{{ __('text.spisi') }} </div>
        </div>

      </div>
    </div>
    <div class="row">
      <div id="knjige" class="mt-4">
        <div class="knjige-h1">
          <h1 class="my-3">{{ __('text.naslovknjige1') }} </h1>
          <p>{{ __('text.knjiga1') }}</p>
          <a href="" class="book-btn-2 "><img src="/assets/img/book-icon1.svg" class="p-3 clr-white" width="64px" alt="">{{ __('text.prelistaj') }} </a>
        </div>
      </div>
      <div id="predavanja" class="mt-4">
        <div class="row">
          <div class="col-lg-4 col-12">


            <p>{{ __('text.predavanja1') }}</p>
            <p>{{ __('text.predavanja2') }}</p>
            <p>
              {{ __('text.predavanja3') }}
            </p>
            <p>
             {{ __('text.predavanja4') }}
            </p>
            <p>
             {{ __('text.predavanja5') }}
            </p>
          </div>
          <div class="col-lg-4 col-12">
          <p>
          {{ __('text.predavanja6') }}
          </p>
          <p>
           {{ __('text.predavanja7') }}
          </p>
          <p>
         {{ __('text.predavanja8') }}
          </p>
          <p>
{{ __('text.predavanja9') }}
          </p>
          </div>
          <div class="col-lg-4 col-12">
            <p>
{{ __('text.predavanja10') }}
            </p>
            <p>
{{ __('text.predavanja11') }}
            </p>
            <p>
{{ __('text.predavanja12') }}
            </p>
            <p>{{ __('text.predavanja13') }}</p>
            <p>{{ __('text.predavanja14') }}</p>

          </div>

        </div>
      </div>
      <div id="konferencije"  class="mt-4">
        <div class="row">
          <div class="col-lg-4 col-12">
            <p>
{{ __('text.konferencije1') }} 
            </p>
            <p>
{{ __('text.konferencije2') }} 

            </p>
            <p>
{{ __('text.konferencije3') }} 

            </p>
          </div>
          <div class="col-lg-4 col-12">
            <p>
           {{ __('text.konferencije4') }} 

            </p>
            <p>
{{ __('text.konferencije5') }} 

            </p>
            <p>
{{ __('text.konferencije6') }} 

            </p>
          </div>
          <div class="col-lg-4 col-12">
            <p>
{{ __('text.konferencije7') }} 

            </p>
            <p>
{{ __('text.konferencije8') }} 

            </p>
          </div>

        </div>
      </div>
      <div id="spisi"  class="mt-4">
        <div class="row">
          <div class="col-lg-4 col-12">
            <p>
{{ __('text.spisi1') }} 

            </p>
            <p>
{{ __('text.spisi2') }} 

            </p>
            <p>
{{ __('text.spisi3') }} 

            </p>
            <p>
{{ __('text.spisi4') }} 

            </p>
          </div>
          <div class="col-lg-4 col-12">
            <p>
{{ __('text.spisi5') }} 

            </p>
            <p>
{{ __('text.spisi6') }} 

            </p>
            <p>
{{ __('text.spisi7') }} 

            </p>
          </div>
          <div class="col-lg-4 col-12">
            <p>
 {{ __('text.spisi8') }} 

            </p>
            <p>
{{ __('text.spisi9') }} 

            </p>
            <p>
{{ __('text.spisi10') }} 

            </p>
          </div>

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
    <script>
        function showKnjige() {
            $('#knjige').css('display', 'block');
            $('#knjige').css('display', 'block');
            $('#predavanja').css('display', 'none');
            $('#konferencije').css('display', 'none');
            $('#spisi').css('display', 'none');
            $('.box-b-1').css('background', 'linear-gradient(135deg, #6e9c8c 0%, #81ada0 100%) 0% 0% no-repeat padding-box');
            $('.box-b-2').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');
            $('.box-b-3').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');
            $('.box-b-4').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');


            

        }
        function showPredavanja() {
            $('#knjige').css('display', 'none');
            $('#predavanja').css('display', 'block');
            $('#konferencije').css('display', 'none');
            $('#spisi').css('display', 'none');
            $('.box-b-2').css('background', 'linear-gradient(135deg, #6e9c8c 0%, #81ada0 100%) 0% 0% no-repeat padding-box');
            $('.box-b-1').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');
            $('.box-b-3').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');
            $('.box-b-4').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');
        }
        function showKonferencije() {
            $('#knjige').css('display', 'none');
            $('#predavanja').css('display', 'none');
            $('#konferencije').css('display', 'block');
            $('#spisi').css('display', 'none');
            $('.box-b-3').css('background', 'linear-gradient(135deg, #6e9c8c 0%, #81ada0 100%) 0% 0% no-repeat padding-box');
            $('.box-b-1').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');
            $('.box-b-2').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');
            $('.box-b-4').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');
        }
        function showSpisi() {
            $('#knjige').css('display', 'none');
            $('#predavanja').css('display', 'none');
            $('#konferencije').css('display', 'none');
            $('#spisi').css('display', 'block');
            $('.box-b-4').css('background', 'linear-gradient(135deg, #6e9c8c 0%, #81ada0 100%) 0% 0% no-repeat padding-box');
            $('.box-b-1').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');
            $('.box-b-2').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');
            $('.box-b-3').css('background', 'linear-gradient(135deg, #b4ab7b 0%, #d9c787 100%) 0% 0% no-repeat padding-box');
        }

    </script>
    
@endsection