<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploader;
use App\Models\Constants;
use App\Models\Article;
use Alert;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')
        ->paginate(Constants::$DEFAULT_PAGINATION_COUNT);
        $total_articles = Article::count();
        return view('admin.articles.index',compact('articles','total_articles'));
    }


    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {
        $request->validate(Article::$validation);
        $article = new Article;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->status = Constants::$ARTIKEL_PUBLISH;
        if($request->file('thumbnail')){
            $image_path = $request->file('thumbnail')->path();
            $extension = $request->file('thumbnail')->extension();
            $image = base64_encode(file_get_contents($image_path));
            $image_url = $imageUploader->upload($image, $extension);
            $article->thumbnail = $image_url;
            }
    
        $article->save();

        return redirect('about-us')->with('status', 'success');

    }

    
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.show', compact('article'));
    }

  
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit',compact('article'));
    }

  
    public function update($id, Request $request, ImageUploader $imageUploader)
    {
        $request->validate(Article::$validationUpdate);
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->status = Constants::$ARTIKEL_PUBLISH;
        if($request->file('thumbnail')){
            $image_path = $request->file('thumbnail')->path();
            $extension = $request->file('thumbnail')->extension();
            $image = base64_encode(file_get_contents($image_path));
            $image_url = $imageUploader->upload($image, $extension);
            $article->thumbnail = $image_url;
            }

        $article->save();
        Alert::toast('Artikel berhasil di update','success');
        return redirect('about-us')->with('status', 'Article updated');
    }

    public function draft($id, Request $request)
    {
        $article = Article::findOrFail($id);
        $article->status = Constants::$ARTIKEL_DRAFT;
        $article->save();
        Alert::toast('About Us berhasil di draftkan','success');

        return redirect()->back();
    }

    public function publish($id, Request $request)
    {
        $article = Article::findOrFail($id);
        $article->status = Constants::$ARTIKEL_PUBLISH;
        $article->save();
        Alert::toast('About Us berhasil di publish','success');
        return redirect()->back();
    }

   
    public function destroy(Article $article)
    {
        Article::destroy($article->id);
        Alert::toast('Artikel berhasil di hapus','success');
        return redirect('about-us')->with('status', 'Article deleted');


    }
}
