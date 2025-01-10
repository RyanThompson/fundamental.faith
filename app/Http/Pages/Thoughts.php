<?php

namespace App\Http\Pages;

use Streams\Ui\Pages\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

class Thoughts extends Page
{
    protected static string $layout = 'layouts.default';

    protected static string $view = 'thoughts';

    protected static ?string $slug = '/thoughts';

    public function mount()
    {
        $next = entries('thoughts')
            ->orderBy('id', 'asc')
            ->first();

        if ($next) {
            View::share('next', Str::slug($next->heading) . "/{$next->id}");
        }
    }
}
