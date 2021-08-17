<?php
use App\Models\Languages; ?>

@extends('site.partials.header')
@section('header_content')
    <div class="container-flud p-0 m-0">
        <div class="nav-second w-100">
            <div class="container-nav-media m-auto">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item aktivizam" role="presentation">
                        <a class="nav-link p-0 px-3 " id="pills-globus-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-globus" type="button" role="tab" aria-controls="pills-globus"
                            aria-selected="true" onclick="showPogledaj()">{{ __('text.pogledaj') }}</a>
                    </li>
                    <li class="nav-item aktivizam" role="presentation">
                        <a class="nav-link p-0 pl-0 pr-3  active" id="pills-aktivizam-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-aktivizam" type="button" role="tab" aria-controls="pills-aktivizam"
                            aria-selected="false" onclick="showAktivizam()">{{ __('text.gradjanskiaktivizam') }}</a>
                    </li>
                    <li class="nav-item aktivizam" role="presentation">
                        <a class="nav-link p-0 px-3" id="pills-politicki-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-politicki" type="button" role="tab" aria-controls="pills-politicki"
                            aria-selected="false" onclick="showPoliticki()">{{ __('text.ploitickiaktivizam') }}</a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="container ">
            <div class="tab-content p-0" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-aktivizam" role="tabpanel" aria-labelledby="pills-globus-tab">

                    <div class="container blog-section">
                        @foreach ($blogs as $blog)
                            @php
                                $languages = Languages::where('id', $blog->lang_id)->first();
                            @endphp
                            @if (app()->getLocale() == strtolower($languages->name))
                                @if ($blog->categories_id == 1)
                                    <div class="row single-blog">
                                        <div class="col-6">
                                            <div class="owl-carousel owl-theme drag-m ">

                                                <div class="item">
                                                    <img class="d-block drop-desk-img-m"
                                                        src="/assets/blog_cover_img/{{ $blog->cover_image }}" alt="Slika">
                                                </div>

                                                @foreach ($blog_images as $blog_image)
                                                    @if ($blog_image->blogs_id == $blog->id)
                                                        <div class="item">
                                                            <img class="d-block w-100 drop-desk-img-m "
                                                                src="/assets/blog_images/{{ $blog_image->images }}"
                                                                alt="Slika">
                                                        </div>
                                                    @endif
                                                @endforeach

                                            </div>
                                            <div class="green-line"></div>

                                        </div>
                                        <div class="col-6">
                                            <div class="blog-text m-auto">
                                                <h1 class="clr-green blog-h1">
                                                    <a class="clr-green blog-h1"
                                                        href="{{ route('showBlogsOnSite', [app()->getLocale(), $blog->id]) }}">{{ $blog->title }}</a>
                                                </h1>
                                                <p>{{ $blog->blog }}</p>

                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>





            <div class="tab-pane fade" id="pills-politicki" role="tabpanel" aria-labelledby="pills-politicki-tab">
                <div class="row pb-4">


                    @foreach ($blogs as $blog)

                        @php
                            $languages = Languages::where('id', $blog->lang_id)->first();
                        @endphp
                        @if (app()->getLocale() == strtolower($languages->name))
                            @if ($blog->categories_id == 2)
                                <div class="col-lg-4 col-12 my-4">
                                    <a class="blog-link-space"
                                        href="{{ route('showBlogsOnSite', [app()->getLocale(), $blog->id]) }}">
                                    </a>
                                    <div class="owl-carousel owl-theme drag-m">

                                        <div class="item">
                                            <img class="d-block w-100 drop-desk-img-m"
                                                src="/assets/blog_cover_img/{{ $blog->cover_image }}" alt="Slika">
                                        </div>

                                        @foreach ($blog_images as $blog_image)
                                            @if ($blog_image->blogs_id == $blog->id)
                                                <div class="item">
                                                    <img class="d-block w-100 drop-desk-img-m "
                                                        src="/assets/blog_images/{{ $blog_image->images }}" alt="Slika">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="owl-bg">


                                        <p class="p-2">{{ $blog->cover_text }}</p>

                                    </div>

                                </div>


                            @endif
                        @endif
                    @endforeach



                </div>

            </div>
            <div class="tab-pane fade" id="pills-globus" role="tabpanel" aria-labelledby="pills-globus-tab">
                <div class="row mb-6">
                    @foreach ($videos as $video)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-sx-12 my-4 media-yt ">
                            <iframe width="100%" height="315" src="{{ $video->yt_link }}" frameborder="0"
                                allowfullscreen="allowfullscreen"></iframe>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            items: 1,
            stagePadding: 0,
            lazyLoad: true,
            rtl: true,
            autplay: true,
            nav: true,
            navigation: true,
            smartSpeed: 200,
            dots: true
        })
        $(".green-line:odd").addClass('odd');
    </script>
    <script>
        function showPogledaj() {
            $('#pills-globus').css('display', 'block');
            $('#pills-aktivizam').css('display', 'none');
            $('#pills-politicki').css('display', 'none');
        }

        function showAktivizam() {
            $('#pills-globus').css('display', 'none');
            $('#pills-aktivizam').css('display', 'block');
            $('#pills-politicki').css('display', 'none');
        }

        function showPoliticki() {
            $('#pills-globus').css('display', 'none');
            $('#pills-aktivizam').css('display', 'none');
            $('#pills-politicki').css('display', 'block');
        }
    </script>
@endsection
