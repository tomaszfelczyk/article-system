<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Article;

class ArticleController extends Controller
{
  public function index()
  {
      $article = Article::all();
      $article = DB::table('articles')->paginate(4);
      return view('articleslist', compact('article'));
  }

  public function show(Article $article)
  {
      return view('article', compact('article'));
  }
  public function edit(Article $article)
  {
      return view('edit', compact('article'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required | min:3 | max:100',
      'subtitle' => 'required',
      'author' => 'required | min:2 | max:30',
      'content' => 'required | min:100'
    ]);
      $article = Article::create($request->all());

      return redirect('/')->with('message', 'The article has been added!');
  }

  public function update(Request $request, Article $article)
  {
    $request->validate([
      'title' => 'required | min:3 | max:100',
      'subtitle' => 'required',
      'author' => 'required | min:2 | max:30',
      'content' => 'required | min:100'
    ]);
      $article = Article::create($request->all());
      $article->update($request->all());

      return redirect('/')->with('message', 'The article has been updated!');
  }

  public function destroy(Article $article)
  {
      $article = Article::where('id', $article['id']);
      $article->delete();

      return redirect('/')->with('message', 'The article has been deleted!');
  }
}
