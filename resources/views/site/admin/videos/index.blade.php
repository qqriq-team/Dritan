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
                            <th class='tr-admin'>Naslov</th>
                            <th class='tr-admin'>Youtube Link</th>
                            <th class='tr-admin'>Izmijeni/Obriši</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                            <tr>
                                <td>
                                    {{ $video->id }}
                                </td>
                                <td>
                                    {{ $video->naslov }}
                                </td>
                                <td>
                                    {{ $video->yt_link }}
                                </td>
                                <td>
                                    <div class="video-options">

                                        <a href="/{{ app()->getLocale() }}/videos/{{ $video->id }}/edit"
                                            class="m-4"><img src="/assets/img/Edit.svg" width="30px" alt=""></a>
                                        <a href="/{{ app()->getLocale() }}/videos/destroy/{{ $video->id }}"><img
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
