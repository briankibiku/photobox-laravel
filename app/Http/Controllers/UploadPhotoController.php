<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Photo;

use Illuminate\Support\Facades\File;
use  Image;


class UploadPhotoController extends Controller


{
    public function index()
    {
        return view('upload.index');
    }

    protected function validator(Request $request)
        {
            return Validator::make($request, [
                'photo' => ['required', 'binary'],
                'tag' => ['string',   'max:255' ],
                'description' => ['required', 'string',   'max:255' ],

            ]);
        }


        
        
    public function store(Request $request)
    {
            // dd($request->file());
            Photo::create([
                'photo' => $image,
                'tag' => $request->tag,
                'description' => $request->description,
            ]);
             return back()
             ->with('success','You have successfully upload image.')
             ->with('image',$request->photo);
            
    } 
        // public function delete($id)
        // {
        //     DB::table('photos')->where('id', '=', $id)->delete();
        //     return redirect('/upload');
        // }

        // public function edit($id)
        // {
        //     $vehicle =  Photo::find($id);
        //     return view('photo.edit', ['photo' => $photo] );
        // }

        // public function update(Request $request){
        //     $photo =  Photo::find($request->id);   
        //     $photo->photo=$request->photo;
        //     $photo->tag=$request->tag;
        //     $photo->description=$request->description;
        //     $photo->save();
        //     return redirect('/home');        
        // }
}