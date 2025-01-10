<?php

namespace App\Http\Pages;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Streams\Ui\Pages\Page;

class Map extends Page
{
    protected static string $layout = 'layouts.default';

    protected static string $view = 'map';

    protected static ?string $slug = '/{id}';

    public $next = null;

    public function mount()
    {
        $id = Request::route('id');

        $next = entries('map')
            ->where('id', '>', $id)
            ->orderBy('id', 'asc')
            ->first();

        if ($next) {
            View::share('next', $next->id);
        }
    }
}
