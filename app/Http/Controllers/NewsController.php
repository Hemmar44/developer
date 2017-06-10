<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\News;
use App\Pictures;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['showNews', 'show']]);
    }
    
    public function show(News $news) {

    	$news = $news->orderBy('created_at', 'DESC')->paginate(5);
        $check = [];
    	return view('index', compact('news', 'check'));

    }

    public function showNews(News $news) {

       return view('news', compact('news'));

    }

    public function addNews() {

    	return view('admin.addnews');

    }

    public function storeNews() {

    	$news = new News;
    	$news->user_id = request()->user()->id;
    	$news->title = request()->title;
    	$news->body = request()->body;

    	//var_dump($news);
    	$news->save();

        session()->flash('message', 'Udało Ci się dodać nową wiadomość');

    	return redirect('/admin');
    }

    public function selectNews(News $news) {

        $news=$news->orderBy('created_at', 'desc')->get();

        return view('admin.selectnews', compact('news'));
    }

    public function selectNewsToEdit() {

        $id = request()->title;
        
        $news=News::where('id', $id)->first();

        //return $news;

        return view('admin.editnews', compact('news'));

    }  

    public function saveChangedNews(Request $request) {

        $input = $request->all();
            $id=request()->id;
            $user_id = request()->user()->id;
            $title = request()->title;
            $body = request()->body;

            if(array_key_exists('save', $input)){
            
            
            News::where('id', $id)->update(['user_id' => $user_id, 'title'=> $title, 'body' => $body]);
            
            session()->flash('message', 'Udało Ci się edytować wiadomość');

            return redirect('admin');
        }

        Storage::deleteDirectory('public/images/'.$id);
        
        News::where('id', $id)->delete();

        session()->flash('message', 'Udało Ci się usunąć wiadomość');
        
        return redirect('admin');
    }



    


}
