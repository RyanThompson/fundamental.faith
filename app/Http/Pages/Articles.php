<?php

namespace App\Http\Pages;

use Streams\Ui\Pages\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

class Articles extends Page
{
    protected static string $layout = 'layouts.default';

    protected static string $view = 'articles';

    protected static ?string $slug = '/articles';

    public function mount()
    {
        $next = entries('articles')
            ->orderBy('id', 'asc')
            ->first();

        if ($next) {
            View::share('next', Str::slug($next->heading) . "/{$next->id}");
        }
    }
}
