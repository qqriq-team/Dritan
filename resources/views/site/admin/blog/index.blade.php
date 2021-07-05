@extends('site.admin.adminapp')
@section('content')
    <style>
        .tr-admin {
            height: 35px !important;
        }

        table {
            color: white !important;
        }

    </style>

    <div class="w-100 px-5  mt-5">
        <div class="row justify-content-center">
            <div class="tab-pane active table-responsive userprof-tab" id="tab1">
                <table class="table table-bordered table-hover mb-0 text-nowrap mt-sm-5 mt-md-5 mt-xs-5">
                    <thead>
                        <tr>
                            <th class='tr-admin'>Id </th>
                            <th class='tr-admin'>Fotografija</th>
                            <th class='tr-admin'>Jezici</th>
                            <th class='tr-admin'>Naslov</th>
                            <th class='tr-admin'>Blog</th>
                            <th class='tr-admin'>Izmijeni/Obriši</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>
                                    {{ $blog->id }}
                                </td>

                                <td>
                                    <img src="{{ asset('/assets/blog_cover_img/' . $blog->cover_image) }}" width="100">

                                </td>
                                <td>
                                    {{ $blog->lang_mne }} </br>
                                    {{ $blog->lang_en }} </br>
                                    {{ $blog->lang_al }}</br>
                                </td>
                                <td>
                                   MNE: {{ $blog->title_mne }} </br>
                                   EN: {{ $blog->title_en }} </br>
                                   AL: {{ $blog->title_al }} </br>
                                </td>

                                <td>
                                    {{ $blog->cover_text_mne }} </br>
                                    {{ $blog->cover_text_mne }} </br>
                                    {{ $blog->cover_text_mne }} </br>
                                </td>
                                <td>
                                    <div class="blog-options">

                                        <a href="/{{ app()->getLocale() }}/blogs/{{ $blog->id }}/edit"
                                            class="m-4"><img src="/assets/img/Edit.svg" width="30px" alt=""></a>
                                        <a href="/{{ app()->getLocale() }}/blogs/destroy/{{ $blog->id }}"><img
                                                src="/assets/img/Delete.svg" width="35px" alt=""></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
