<?php

namespace App\Http\Pages;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Streams\Ui\Pages\Page;

class Scripture extends Page
{
    protected static string $layout = 'layouts.default';

    protected static string $view = 'scripture';

    protected static ?string $slug = '/{id}';

    public $next = null;

    public function mount()
    {
        $id = Request::route('id');

        $next = entries('scripture')
            ->where('id', '>', $id)
            ->orderBy('id', 'asc')
            ->first();

        if ($next) {
            View::share('next', $next->id);
        }
    }
}
