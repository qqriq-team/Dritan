@extends('site.partials.header')
@section('header_content')
<style>


</style>
<div class="h"></div>
        {{-- <img src="/assets/posteri/Posteri.png" width="100%" alt=""> --}}
                <div class="posteri d-flex">
        <div class="w-17"><img src="/assets/img/robovlasnistvo fin.png" alt="">
                {{-- <div class="hover-poster">
                        <h2>Prva crnogorska štamparija</h2>
                        <p>Štamparija Crnojevića ili Cetinjska štamparija je jedna od najstarijih ćiriličkih i slovenskih štamparija, odnosno južnoslovenska i prva srpska štamparija, koja je radila od 1493. do 1496. godine na Cetinju, pod upravom jeromonaha Makarija i pod pokroviteljstvom Đurđa Crnojevića, vladara Zete (1490-1496).</p>
                </div> --}}
        </div>
        <div class="w-17"><img src="/assets/img/Demokratija u Grckoj-final.png" alt="">
                {{-- <div class="hover-poster">
                        <h2>Donešen ustav Crne Gore 2007. godine</h2>
                        <p>Ustav Republike Crne Gore je najviši pravni akt Crne Gore. Usvojen je na sjednici Skupštine Crne Gore, koja je održana 19. oktobra 2007. godine, a proglašen je 22. oktobra 2007. godine. Stupanjem na snagu ovog ustava prestao je da važi dotadašnji Ustav Crne Gore iz 1992. godine. Novim ustavom, koji je bio donet nakon sticanja državne nezavisnosti (2006), Crna Gora je postavila osnovu za sveobuhvatnu reformu državnog zakonodavstva i preuređenje pravnog poretka. Donošenje ovog ustava bilo je praćeno brojnim političkim raspravama i sporovima, koji su se odnosili na zaštitu prava i regulisanje položaja srpskog naroda u Crnoj Gori.</p>
                </div> --}}
        </div>
        <div class="w-32"><img src="/assets/img/maradona gol rukom.png" alt="">
                {{-- <div class="hover-poster">
                        <h2>Prvi ustanak u Evropi</h2>
                        <p>Trinaestojulski ustanak ili Ustanak u Crnoj Gori bio je najveći ustanak u okupiranoj Evropi 1941. godine. Počeo je 13. jula 1941, pod rukovodstvom Komunističke partije Jugoslavije i trajao je do polovine avgusta, kada je ugušen jakom italijanskom ofanzivom. Iako je planiran u mnogo manjoj meri, ustanak je od prvog dana dobio karakter opštenarodnog ustanka u kojem je učestvovalo preko 30.000 ljudi. Ustanici su razbili i zarobili do tada najveći okupatorski garnizon u porobljenoj Evropi, od oko 1.000 italijanskih vojnika i starješina.</p>
                </div> --}}
                
        </div>
        <div class="w-17"><img src="/assets/img/posteri dritanizacija.png" alt="">
                        {{-- <div class="hover-poster">
                        <h2>EKO država - 1991.</h2>
                        <p>Deklaracija o ekološkoj državi Crnoj Gori usvojena je na sjednici parlamenta koja je održana na otvorenom na Žabljaku 20. septembra 1991.
                                <br>
                                <br> U deklaraciji je bilo definisano strateško opredeljenje te zemlje da usvaja i primenjuje najviše standarde i norme iz oblasti zaštite životne sredine, očuvanja prirode i ekonomskog razvoja na principima ekološki održivog sistema.</p>
                </div> --}}
        </div>
        <div class="w-17"><img src="/assets/img/regenerativna-medicina-final.png" alt="">
                                {{-- <div class="hover-poster">
                        <h2>Podizanje zastave na East Riveru</h2>
                        <p>Crnogorska zastava se zavijorila na Ist Riveru u Njujorku pred sjedištem Ujedinjenih nacija, nakon što je Generalna skupština odobrila prijem države Crne Gore u svjetsku organizaciju.
                                <br>
                                <br>  Nakon što je Savjet bezbjednosti odobrio kandidaturu Crne Gore za prijem u UN, Crna Gora je zvanično postala 192 država svijeta.</p>
                </div> --}}
        </div>
        </div>
        <div class="posteri d-flex">
                <div class="w-30-p">
                        <img src="/assets/img/revolucija-FINAL.png" alt="">
                </div>
                <div class="w-30-p">
                        <img src="/assets/img/tocak-final.png" alt="">
                </div>
                <div class="w-17-p">
                        <img src="/assets/img/ZNACAJ-INTERNETA-FIN.png" alt="">
                </div>
        </div>
        <p class="text-center"> <span>Dritanizacija</span> je proces izgradnje klime kroz političko djelovanje u kojoj se postižu stvari koje su ljudima gotovo nezamislive.</p>
        <div class="posteri d-flex">
        <div class="w-17"><img src="/assets/img/1-Dritanizacija-Prva-crnogorska-štamparija.jpg" alt="">
                <div class="hover-poster">
                        <h2>{{ __('text.stamparija') }}</h2>
                        <p> {{ __('text.stamparijatxt') }}</p>
                </div>
        </div>
        <div class="w-17"><img src="/assets/img/2-Dritanizacija-Prvi-ustanak-u-Evropi.jpg" alt="">
                <div class="hover-poster">
                        <h2>{{ __('text.ustanak') }}</h2>
                        <p>{{ __('text.ustanaktxt') }}</p>
                </div>
        </div>
        <div class="w-32"><img src="/assets/img/Component 20 – 1.png" alt="">
                <div class="hover-poster">
                        <h2>{{ __('text.ustav') }}</h2>
                        <p>{{ __('text.ustavtxt') }}
                        </p>
                </div>
                
        </div>
        <div class="w-17"><img src="/assets/img/2-Dritanizacija-Prvi-ustanak-u-Evropi.jpg" alt="">
                        <div class="hover-poster">
                        <h2>{{ __('text.eko') }}</h2>
                        <p>{{ __('text.ekotxt1') }}
                                <br>
                                <br>{{ __('text.ekotxt2') }}</p>
                </div>
        </div>
        <div class="w-17"><img src="/assets/img/6-Podizanje CG zastave na East Riveru (1).png" alt="">
                                <div class="hover-poster">
                        <h2>{{ __('text.zastave') }}</h2>
                        <p>{{ __('text.zastavetxt1') }}
                                <br>
                                <br> {{ __('text.zastavetxt2') }}
                       
                        </p>
                </div>
        </div>
        </div>
        <div class="posteri d-flex ">
                <div class="w-33">
                        <img src="/assets/img/3-Dritanizacija-Nezavisnost-CG-2006 (1).jpg" alt="">
                        <div class="hover-poster">
                                <h2>{{ __('text.nezavisnost') }}</h2>
                                <p>{{ __('text.nezavisnosttxt') }}
                                </p>
                        </div>
                </div>
                <div class="w-33">
                        <img src="/assets/img/Screenshot_5 (1).png" alt=""> 
                                        <div class="hover-poster">
                        <h2>{{ __('text.promjenavlasti') }}</h2>
                        <p>Lorem ipsum dolor sit amet, ex veri liberavisse duo. Vivendo qualisque voluptatum duo id. His omittam accusata at. Veri primis eum an, eu eos tota aliquip molestie, duo vide minimum efficiantur an. Ad mucius pertinacia incorrupte duo, alienum repudiare eu sed. Duo id debitis efficiantur, suavitate voluptatum adversarium ea cum. Erant assentior ea usu.</p>
                </div> 
                </div>
                <div class="w-34 ">
                        <img src="/assets/img/4-Dritanizacija-lanstvo-u-Nato.jpg" alt=""> 
                                        <div class="hover-poster">
                        <h2>{{ __('text.nato') }}</h2>
                        <p>Lorem ipsum dolor sit amet, ex veri liberavisse duo. Vivendo qualisque voluptatum duo id. His omittam accusata at. Veri primis eum an, eu eos tota aliquip molestie, duo vide minimum efficiantur an. Ad mucius pertinacia incorrupte duo, alienum repudiare eu sed. Duo id debitis efficiantur, suavitate voluptatum adversarium ea cum. Erant assentior ea usu.</p>
                </div>   
                </div>
        </div>
        <div class="hidden p-2">hidden</div>


@endsection
