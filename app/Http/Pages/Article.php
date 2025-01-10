<?php

namespace App\Http\Pages;

use Streams\Ui\Pages\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class Article extends Page
{
    protected static string $layout = 'layouts.default';

    protected static string $view = 'article';

    protected static ?string $slug = '/{slug}/{id}';

    public function mount()
    {
        $id = Request::route('id');

        $article = entries('articles')
            ->where('id', $id)
            ->first();

        View::share('article', $article);

        $next = entries('articles')
            ->where('id', '>', $id);

        if ($article->category) {
            $next = $next->where('category', $article->category);
        }
            
        $next = $next->orderBy('id', 'asc')->first();

        if ($next) {
            View::share('next', Str::slug($next->title) . "/{$next->id}");
        } else {
            View::share('next', 'thoughts');
        }
    }
}
