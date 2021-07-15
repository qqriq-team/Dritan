<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Videos::all();
        return view('site.admin.videos.index', compact('videos'));
    }
    public function indexOnHomePage()
    {
        $videos = Videos::all();
        return view('site.pages.homepage', compact('videos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $videos  = new Videos();
        $videos->yt_link = $request->yt_link;
        $videos->naslov = $request->title;
        $videos->save();
        return redirect()->back()
        ->withSuccess("Uspješno dodat video!")
        ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param Language $locale
     * @return \Illuminate\Http\Response
     */
    public function show($locale,$id)
    {
        //
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
        $video = Videos::find($id);
        return view('site.admin.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param Language $locale
     * @return \Illuminate\Http\Response
     */
    public function update($locale,Request $request, $id)
    {
        $videos = Videos::find($id);
        $videos->yt_link = $request->yt_link;
        $videos->naslov = $request->title;
        $videos->update();

        return redirect()->back()
        ->withSuccess("Uspješno izmijenjen video!")
        ->withInput();
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param Language $locale
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale,$id)
    {
        Videos::find($id)->delete();
        
        return redirect()->back()
            ->withSuccess("Video je uspješno obrisan!")
            ->withInput();
    }
}
