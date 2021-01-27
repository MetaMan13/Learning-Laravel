<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {
        if(request('tag'))
        {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        }else{
            $articles = Article::latest()->get();
        }

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create', [
            'tags' => Tag::all()
            ]);
    }

    public function store()
    {
        // $validatedAttributes = request()->validate([
        //     'title' => ['required'],
        //     'excerpt' => ['required'],
        //     'body' => ['required'],
        // ]);

            // We can clean this up with the uncomented code below

        // $article = new Article();
        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');
        // $article->save();

            // The code

        // Article::create([
        //     'title' => request('title'),
        //     'excerpt' => request('excerpt'),
        //     'body' => request('body')
        // ]);

        // We can further clean this up by the following code

        // Article::create($validatedAttributes);

        // THE ULTIMATE AND SHORTEST WAY TO CLEAN THIS UP

        // Article::create(request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]));
        $this->validateArticle();
        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();
        $article->tags()->attach(request('tags'));

        // Article::create($this->validateArticle());

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        // $article->update(request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]));

        $article->update($this->validateArticle());

        // return redirect('/articles/' . $article->id);
        // return redirect(route('articles.show', $article));
        return redirect($article->path());
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
