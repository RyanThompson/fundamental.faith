<?php

namespace App\Http\Pages;

use Streams\Ui\Pages\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class Thought extends Page
{
    protected static string $layout = 'layouts.default';

    protected static string $view = 'thought';

    protected static ?string $slug = '/thought/{slug}/{id}';

    public function mount()
    {
        $id = Request::route('id');

        $thought = entries('thoughts')
            ->where('id', $id)
            ->first();

        View::share('thought', $thought);

        $next = entries('thoughts')
            ->where('id', '>', $id)
            ->orderBy('id', 'asc')
            ->first();

        if ($next) {
            View::share('next', Str::slug($next->heading) . "/{$next->id}");
        }
    }
}
