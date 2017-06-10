<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\News;
use App\Pictures;

class PicturesController extends Controller
{

    public function __construct() {

        $this->middleware('auth');
    }
    
    public function addPicture(News $news) {

    	$news=$news->orderBy('created_at', 'desc')->get();

    	return view('admin.addpictures', compact('news'));

    }

    public function storePicture() {

    	$picture = new Pictures;
    	//this doesn't look good
    	$picture->news_id = request()->title;
    	$picture->path = request()->file('path')->store('public/images/'.request()->title);

    	$picture->save();

        session()->flash('message', 'Udało Ci się dodać zdjęcie');

    	return back();
    
    }

    public function selectPicture(News $news) {

        $news=$news->orderBy('created_at', 'desc')->get();

        return view('admin.selectpicture', compact('news'));
    }

    public function selectPicturesToRemove() {

        $id = request()->title;
        
        $news=News::where('id', $id)->first();

        //return $news;

        return view('admin.deletepicture', compact('news'));
    }

    public function confirmRemove(Pictures $picture) {
        $filenames = [];
        $filename = "";
        $input = request()->all();
        unset($input['_token']);
        unset($input['submit']);

        Pictures::whereIn('path', $input)->delete();
        Storage::delete($input);

        session()->flash('message', 'Udało Ci się usunąć zdjęcia');

        return redirect('admin');
        

    }

}
