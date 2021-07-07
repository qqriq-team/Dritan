@extends('site.partials.header')
@section('header_content')
    <div class="container-flud p-0 m-0">

        <div class="nav-second w-100">
            <div class="container-nav-media m-auto">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item aktivizam" role="presentation">
                        <a class="nav-link p-0 pl-0 pr-3 active" id="pills-aktivizam-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-aktivizam" type="button" role="tab" aria-controls="pills-aktivizam"
                            aria-selected="true">{{ __('text.gradjanskiaktivizam') }}</a>
                    </li>
                    <li class="nav-item aktivizam" role="presentation">
                        <a class="nav-link p-0 px-3" id="pills-politicki-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-politicki" type="button" role="tab" aria-controls="pills-politicki"
                            aria-selected="false">{{ __('text.ploitickiaktivizam') }}</a>
                    </li>
                    <li class="nav-item aktivizam" role="presentation">
                        <a class="nav-link p-0 px-3" id="pills-globus-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-globus" type="button" role="tab" aria-controls="pills-globus"
                            aria-selected="false">{{ __('text.globus') }}</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="container">

            <div class="tab-content p-0" id="pills-tabContent">
                <div class="tab-pane fade show  active" id="pills-aktivizam" role="tabpanel"
                    aria-labelledby="pills-istorija-tab">
                    {{-- loop for blogs --}}
                    <div class="row">
                        <?php
                        $colcount = count($blogs);
                        $i = 1;
                        ?>
                        @foreach ($blogs as $blog)
                            @if ($blog->categories_id == 1)
                                <div class="col-lg-4 col-12 my-4">
                                    <a class="blog-link-space"
                                        href="{{ route('showBlogsOnSite', [app()->getLocale(), $blog->id]) }}">
                                    </a>
                                    <div class="owl-carousel owl-theme drag-m ">

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
                                       @if(app()->getLocale() == "mne")
                                       <p class="p-2">{{$blog->cover_text_mne}}</p>
                                       @elseif(app()->getLocale() == "en")
                                       <p class="p-2">{{$blog->cover_text_en}}</p>
                                       @else
                                       <p class="p-2">{{$blog->cover_text_al}}</p>
                                       @endif
                                    </div>

                                </div>
                            @endif
                        @endforeach


                        @if ($i++ % 3 == 0)
                    </div>
                    <div class="row mx-0 px-0">

                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-politicki" role="tabpanel" aria-labelledby="pills-politicki-tab">
                    <div class="row">
                        <?php
                        $colcount = count($blogs);
                        $i = 1;
                        ?>
                        @foreach ($blogs as $blog)
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
                                       @if(app()->getLocale() == "mne")
                                       <p class="p-2">{{$blog->cover_text_mne}}</p>
                                       @elseif(app()->getLocale() == "en")
                                       <p class="p-2">{{$blog->cover_text_en}}</p>
                                       @else
                                       <p class="p-2">{{$blog->cover_text_al}}</p>
                                       @endif
                                    </div>

                                </div>


                    </div>

                    @endif
                    @endforeach


                    @if ($i++ % 3 == 0)
                </div>
                <div class="row mx-0 px-0">

                    @endif
                </div>
            </div>
            <div class="tab-pane fade" id="pills-globus" role="tabpanel" aria-labelledby="pills-globus-tab">
                <h1>Globus</h1>
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
            dots: false
        })
    </script>

@endsection
