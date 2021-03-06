<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::where('user_id',auth()->id())->get();

//        return view('photo.index',compact('photos'));
        return $photos;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePhotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhotoRequest $request)
    {
        $request->validate([
            'photo' => 'nullable',
            'photo.*' => 'file|mimes:jpg,png',
        ]);


        if(!Storage::exists('public/thumbnail')){
            Storage::makeDirectory('public/thumbnail');
        }

        if($request->hasFile('photo')){

            foreach($request->file('photo') as $photo){

                $newName = uniqid().'_photo.'.$photo->extension();

                $photo->storeAs('public/photos',$newName);

                $img = Image::make($photo);
                $img->fit('500','500');
                $img->save('storage/thumbnail/'.$newName);

                //save on db
                $photo = new Photo();
                $photo->name = $newName;
                $photo->user_id = Auth::user()->id;
                $photo->post_id = $request->post_id;
                $photo->save();

            }
        }

        return redirect()->back()->with('status','successfully created photo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhotoRequest  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        Storage::delete('/public/photos/'.$photo->name);
        Storage::delete('/public/thumbnail/'.$photo->name);
        return redirect()->back()->with('status','successfully deleted photo!');
    }
}
