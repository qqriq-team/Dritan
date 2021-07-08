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
            <div class="tab-pane active table-responsive  userprof-tab" id="tab1">
                <div class="container">
                    <form action="{{ route('blogs.update', [app()->getLocale(), $blog->id]) }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method('PATCH')
                        <div class="pb-5">
                            <select class="categories form-control" name="cat_id" id="cat_id">
                                @foreach ($categories as $category)
                                    @if ($category->id == $blog->categories_id)
                                        <option name="cat_name" id="cat_name" value="{{ $category->id }}">
                                            {{ $category->name }}</option>
                                    @endif
                                    <option name="cat_name" id="cat_name" value="{{ $category->id }}">
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="pb-5">
                            <select class="categories form-control" name="languages_id" id="languages_id">
                                @foreach ($languages as $lang)
                                    @if ($lang->id == $blog->lang_id)
                                        <option name="lang" id="lang" value="{{ $lang->id }}"> {{ $lang->name }}
                                        </option>
                                    @endif
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
                                        value="{{ $blog->title }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Kratki tekst</label>
                                    <textarea class="form-control summernote" name="cover_text"
                                        id="exampleFormControlTextarea1" rows="3 "> {{ $blog->cover_text }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Tekst objave</label>
                                    <textarea class="form-control summernote" name="body" id="exampleFormControlTextarea1"
                                        rows="3 "> {{ $blog->blog }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong> <label class="form-label">Youtbe Link</label></strong>
                            <input type="text" name="yt_link" value="{{ $blog->yt_link }}" class="form-control" required>
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
                                <input type="file" name="cover_photo" class="form-control-file"
                                    id="exampleFormControlFile1">
                            </div>
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit" value="Submit">
                        </div>
                    </form>
                    <form action="{{ route('blogimages.destroy', [app()->getLocale(), $blog->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div>
                            <h3>Naslovna fotografija</h3>
                            <div class="text-center">
                                <img src="/assets/blog_cover_img/{{ $blog->cover_image }}" width="600">
                                {{-- <div class="pt-3">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </div> --}}
                            </div>
                            <h3 class="pt-3">Fotografije na blogu</h3>
                            <div>
                                <div class="row">
                                    @foreach ($blogImages as $item)
                                        <div class="col-lg-3">
                                            <img src="/assets/blog_images/{{ $item->images }}" width="200">
                                            <div class="pt-3">
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
