<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    function showArticles() {
    	$articles = Article::all();
    	return view('articles.articles_list',compact('articles'));
    }

    function show($id) {
    	$article = Article::find($id);
    	return view('articles.single_article',compact('article'));
    }

    function createForm() {
    	return view('articles.article_create');
    }

    function store(Request $request) {
    	$new_article = new Article();
    	$new_article->title = $request->title;
    	$new_article->content = $request->content;
    	$new_article->save();
    	return redirect('/articles');
    }

    function delete($id) {
    	$article = Article::find($id);
    	$article->delete();
    	return redirect('/articles');
    }

    function editForm($id) {
    	$article = Article::find($id);
    	return view('articles.article_edit',compact('article'));
    }

    function update(Request $request,$id) {
    	$article = Article::find($id);
    	$article->title = $request->title;
    	$article->content = $request->content;
    	$article->save();
    	return redirect("/articles/$id");
    }
}
