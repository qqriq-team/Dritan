@extends('site.partials.header')
@section('header_content')
<div class="container-flud p-0 m-0">
 
 <div class="nav-second w-100">
  <div class="container-nav m-auto">
   <ul class="nav nav-pills" id="pills-tab" role="tablist">
     <li class="nav-item" role="presentation">
       <a class="nav-link p-0 pl-0 pr-3 active" id="pills-istorija-tab" data-bs-toggle="pill" data-bs-target="#pills-istorija" type="button" role="tab" aria-controls="pills-istorija" aria-selected="true">Istorijat</a>
     </li>
     <li class="nav-item" role="presentation">
       <a class="nav-link p-0 px-3" id="pills-biografija-tab" data-bs-toggle="pill" data-bs-target="#pills-biografija" type="button" role="tab" aria-controls="pills-biografija" aria-selected="false">Biografija</a>
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
          <p class="position-absolute">Djetinjstvo</p>
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
          <img class="round-img" src="/assets/img/9.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">Obrazovanje</p>
          
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
          <img class="round-img" src="/assets/img/9.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">Naučni rad</p>

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
          <img class="round-img" src="/assets/img/9.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">Radna karijera</p>

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
          <img class="round-img" src="/assets/img/9.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">Politički angažman</p>

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
          <img class="round-img" src="/assets/img/9.png" alt="" />
          <div class="circle"></div>
          <p class="position-absolute">Dobrotvorni rad</p>

        </button>
      </li>
      <hr />
    </ul>
    <div class="tab-content container" id="pills-tabContent">
      <div
        class="tab-pane fade show active"
        id="pills-djetinjstvo"
        role="tabpanel"
        aria-labelledby="pills-djetinjstvo-tab"
      >
        <h1 class="h1-m">Dritan Abazović rođen je u Ulcinju.</h1>
        <p>
          Dritan Abazović rođen je 25.12.1985. godine u Ulcinju. Osnovnu školu i
          Gimnaziju završio je u Ulcinju, diplomirao na Fakultetu političkih
          nauka, stekao zvanje diplomirani politikolog; student generacije i
          dobitnik “Zlatne značke” i “Zlatne povelje” Univerziteta u Sarajevu.
          Od 2005. do 2007. bio je asistent na Fakultetu političkih nauka
          Univerziteta u Sarajevu.
        </p>
      </div>
      <div
        class="tab-pane fade"
        id="pills-obrazovanje"
        role="tabpanel"
        aria-labelledby="pills-obrazovanje-tab"
      >
        <h1 class="h1-m">Edukacija</h1>
        <p>
          Magistrirao je 2008. godine na Odsjeku za međunarodne odnose Fakulteta
          političkih nauka Univerziteta u Crnoj Gori. Na Fakultetu političkih
          nauka u Sarajevu 2009. odbranio je doktorsku disertaciju na temu
          “Globalna politika – Etički aspekti globalizacije”. Dugogodišnji
          saradnik nevladinih organizacija iz oblasti ljudskih prava,
          euroatlantizma i građanskog aktivizma. Bio angažovan na projektima u
          vezi sa promocijom multikulturalizma u post-konfliktnim zonama bivše
          Jugoslavije. Učesnik mnogobrojnih međunarodnih programa, konferencija
          i seminara poput: Internacionalne ljetnje škole u Oslu, Međunarodnog
          programa liderstva u Stejt Department-u, SAD, Regionalne akademije za
          demokratiju u Barseloni, Strateškog foruma Bled, Konferencije OSCE PA
          “Izborni proces u konfliktnim regijama” u Kijevu.
        </p>
      </div>
      <div
        class="tab-pane fade"
        id="pills-nauka"
        role="tabpanel"
        aria-labelledby="pills-nauka-tab"
      >
        <h1 class="h1-m">Specijalista za nekoliko studijskih programa</h1>
        <p>
          Kao polaznik međunarodnih programa, konferencija i seminara,
          specijalizovao se za nekoliko studijskih programa. 2009. godine
          završio je kurs za istraživanje mira na Univerzitetu u Oslu. Na istom
          univerzitetu završio je seminar za stručno usavršavanje. Takođe, bio
          je angažovan i kao predavač na temu “Istočna Evropa”, na Institutu za
          tehnologiju MSU, Iligan (Filipini) i na temu “Novi koncept ljudske
          bezbjednosti u političkom sektoru”, na Bilgi Univerzitetu u Istanbulu.
          Svoju prvu knjigu “Kosmopolitska kultura i globalna pravda“ objavio je
          2010. godine.
        </p>
      </div>
            <div
        class="tab-pane fade"
        id="pills-karijera"
        role="tabpanel"
        aria-labelledby="pills-karijera-tab"
      >
        <h1 class="h1-m">Karijera</h1>
        <p>
          Kao polaznik međunarodnih programa, konferencija i seminara,
          specijalizovao se za nekoliko studijskih programa. 2009. godine
          završio je kurs za istraživanje mira na Univerzitetu u Oslu. Na istom
          univerzitetu završio je seminar za stručno usavršavanje. Takođe, bio
          je angažovan i kao predavač na temu “Istočna Evropa”, na Institutu za
          tehnologiju MSU, Iligan (Filipini) i na temu “Novi koncept ljudske
          bezbjednosti u političkom sektoru”, na Bilgi Univerzitetu u Istanbulu.
          Svoju prvu knjigu “Kosmopolitska kultura i globalna pravda“ objavio je
          2010. godine.
        </p>
      </div>
      <div
         class="tab-pane fade"
         id="pills-politika"
         role="tabpanel"
         aria-labelledby="pills-politika-tab"
       >
         <h1 class="h1-m">politika</h1>
         <p>
           Kao polaznik međunarodnih programa, konferencija i seminara,
           specijalizovao se za nekoliko studijskih programa. 2009. godine
           završio je kurs za istraživanje mira na Univerzitetu u Oslu. Na istom
           univerzitetu završio je seminar za stručno usavršavanje. Takođe, bio
           je angažovan i kao predavač na temu “Istočna Evropa”, na Institutu za
           tehnologiju MSU, Iligan (Filipini) i na temu “Novi koncept ljudske
           bezbjednosti u političkom sektoru”, na Bilgi Univerzitetu u Istanbulu.
           Svoju prvu knjigu “Kosmopolitska kultura i globalna pravda“ objavio je
           2010. godine.
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
           Kao polaznik međunarodnih programa, konferencija i seminara,
           specijalizovao se za nekoliko studijskih programa. 2009. godine
           završio je kurs za istraživanje mira na Univerzitetu u Oslu. Na istom
           univerzitetu završio je seminar za stručno usavršavanje. Takođe, bio
           je angažovan i kao predavač na temu “Istočna Evropa”, na Institutu za
           tehnologiju MSU, Iligan (Filipini) i na temu “Novi koncept ljudske
           bezbjednosti u političkom sektoru”, na Bilgi Univerzitetu u Istanbulu.
           Svoju prvu knjigu “Kosmopolitska kultura i globalna pravda“ objavio je
           2010. godine.
         </p>
       </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-biografija" role="tabpanel" aria-labelledby="pills-biografija-tab">
   <div class="row">
    <div class="col-3">slika</div>
    <div class="col-9">
      <h2 class="clr-blue">Kosmopolitska kultura i globalna pravda</h2>
      <p>Lorem ipsum dolor sit amet, ex veri liberavisse duo. Vivendo qualisque voluptatum duo id. His omittam accusata at. Veri primis eum an, eu eos tota aliquip molestie, duo vide minimum efficiantur an. Ad mucius pertinacia incorrupte duo, alienum repudiare eu sed. Duo id debitis efficiantur, suavitate voluptatum adversarium ea cum. Erant assentior ea usu.</p>
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