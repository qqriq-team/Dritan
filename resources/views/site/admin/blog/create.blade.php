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
                    <form action="{{ route('blogs.store', app()->getLocale()) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="pb-5">
                            <select class="categories form-control" name="cat_id" id="cat_id">
                                @foreach ($categories as $category)
                                    <option name="cat_name" id="cat_name" value="{{ $category->id }}">
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="pb-5 pt-4">
                            <select class="languages form-control" name="languages_id" id="languages_id">
                                @foreach ($languages as $lang)
                                    <option name="lang" id="lang" value="{{ $lang->id }}">
                                        {{ $lang->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Naslov objave</label>
                                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1"
                                        placeholder="Naslov" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Kratki tekst</label>
                                    <textarea class="form-control summernote" name="cover_text"
                                        id="exampleFormControlTextarea1" rows="3 " placeholder="Kratak opis"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Tekst objave</label>
                                    <textarea class="form-control summernote" name="body"
                                        id="exampleFormControlTextarea1" rows="3 " placeholder="Blog"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong> <label class="form-label">Youtbe Link</label></strong>
                            <input type="text" name="yt_link" class="form-control" required>
                        </div>
                        <div class="col-xs-12 form-group">

                        </div>
                        <div class="d-flex" class="form-group">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Fotografije</label>
                                <input type="file" name="images[]" class="form-control-file" id="exampleFormControlFile1"
                                    multiple="multiple">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Naslovna fotografija</label>
                                <input type="file" name="cover_image" class="form-control-file"
                                    id="exampleFormControlFile1">
                            </div>
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
