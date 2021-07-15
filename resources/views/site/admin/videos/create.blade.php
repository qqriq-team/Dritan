@extends('site.admin.adminapp')
@section('content')
    <style>
        .tr-admin {
            height: 35px !important;
        }

        table {
            color: white !important;
        }

        .container {
            color: white;
        }

    </style>
    <div class="w-100 px-5 mt-5">
        <div class="row justify-content-center">
            <div class="tab-pane active table-responsive userprof-tab" id="tab1">
                <div class="container">
                    <form action="{{ route('videos.store', app()->getLocale()) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Naslov</label>
                                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1"
                                        placeholder="Naslov" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong> <label class="form-label">Youtbe Link</label></strong>
                            <input type="text" name="yt_link" class="form-control" required>
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit" value="Submit">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
