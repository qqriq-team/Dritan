<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Language;
use App\Models\Blog;
use Illuminate\Support\Str;
use  Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('site.admin.blog.index', compact('blogs'));
    }

    public function indexBlogsOnSite()
    {
        $blogs = Blog::all();
        return view('site.pages.media', compact('blogs'));
    }
       /**
     * Show specific blog on site.
     *
     * @param  int  $id
     * @param Language $locale
     * @return \Illuminate\Http\Response
     */
    public function showBlogsOnSite($locale, $id)
    {
        $blogs = Blog::find($id);
        return view('site.pages.blogpost', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //mozda ce nam zatrebati
        // $validator = Validator::make($request->all(), [
        //     'images' => 'required',
        //     'cover_photo' => 'required',
        //     'yt_link' => 'required',
        //     'title_mne' => 'required',
        //     'title_en' => 'required',
        //     'title_al' => 'required',
        //     'cover_txt_mne' => 'required',
        //     'cover_txt_en' => 'required',
        //     'cover_txt_al' => 'required',
        //     'body_mne'  => 'required',
        //     'body_en'  => 'required',
        //     'body_al'  => 'required',
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        //     } 

        $blog = new Blog();

        if (!empty($request->hasFile('images')) && !empty($request->hasFile('cover_photo'))) {
            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $fileName = time() . '_' . Str::random(5) . '.' . $extension;
                Image::make($image)->encode('jpg', 75)->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('assets/blog_images/' . $fileName);
                $data[] = $name;
                $image1 = new Image;
                $image1->title = json_encode($data);
                $blog->images = $fileName;
            }
            $coverPhoto = $request->file('cover_photo');
            $name1 = $coverPhoto->getClientOriginalName();
            $extension1 = $coverPhoto->getClientOriginalExtension();
            $fileName1 = time() . '_' . Str::random(5) . '.' . $extension1;
            Image::make($coverPhoto)->encode('jpg', 75)->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('assets/blog_cover_img/' . $fileName1);
            $blog->cover_image =  $fileName1;
        }

        $blog->yt_link = $request->yt_link;
        $blog->lang_mne = $request->lang_mne;
        $blog->lang_en = $request->lang_en;
        $blog->lang_al = $request->lang_al;
        $blog->title_mne = $request->title_mne;
        $blog->title_en = $request->title_en;
        $blog->title_al = $request->title_al;
        $blog->cover_text_mne = $request->cover_text_mne;
        $blog->cover_text_en = $request->cover_text_en;
        $blog->cover_text_al = $request->cover_text_al;
        $blog->blog_mne = $request->body_mne;
        $blog->blog_en = $request->body_en;
        $blog->blog_al = $request->body_al;
        $blog->save();
        return redirect()->back()
            ->withSuccess("Added successfully!")
            ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('site.pages.blogpost', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param Language $locale
     * @return \Illuminate\Http\Response
     */
    public function edit($locale,$id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('site.admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $blog = Blog::where('id', $id)->first();

        if (!empty($request->hasFile('images')) && !empty($request->hasFile('cover_photo'))) {
            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $fileName = time() . '_' . Str::random(5) . '.' . $extension;
                Image::make($image)->encode('jpg', 75)->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('assets/blog_images/' . $fileName);
                $data[] = $name;
                $image1 = new Image;
                $image1->title = json_encode($data);
                $blog->images = $fileName;
            }
            $coverPhoto = $request->file('cover_photo');
            $name1 = $coverPhoto->getClientOriginalName();
            $extension1 = $coverPhoto->getClientOriginalExtension();
            $fileName1 = time() . '_' . Str::random(5) . '.' . $extension1;
            Image::make($coverPhoto)->encode('jpg', 75)->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('assets/blog_cover_img/' . $fileName1);
            $blog->cover_image =  $fileName1;
        }

        $blog->yt_link = $request->yt_link;
        $blog->lang_mne = $request->lang_mne;
        $blog->lang_en = $request->lang_en;
        $blog->lang_al = $request->lang_al;
        $blog->title_mne = $request->title_mne;
        $blog->title_en = $request->title_en;
        $blog->title_al = $request->title_al;
        $blog->cover_text_mne = $request->cover_text_mne;
        $blog->cover_text_en = $request->cover_text_en;
        $blog->cover_text_al = $request->cover_text_al;
        $blog->update();
        return redirect()->back()
            ->withSuccess("Updated successfully!")
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param Language $locale
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, $id)
    {
        $blogs =  Blog::find($id);
        $blogs->delete();

        return redirect()->back()
        ->withSuccess("Blog is successfully deleted!")
        ->withInput();
    }
}
