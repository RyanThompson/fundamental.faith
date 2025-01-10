<?php

namespace App\Http\Pages;

use Streams\Ui\Pages\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class Articles extends Page
{
    protected static string $layout = 'layouts.default';

    protected static string $view = 'articles';

    protected static ?string $slug = '/{category}';

    public ?string $category = null;
    public ?string $categoryTitle = null;
    public ?string $categoryDescription = null;

    protected static array $categories = [
        'thoughts' => [
            'id' => 'thoughts',
            'title' => 'Thoughts',
            'description' => 'Exploring longer form thoughts.',
        ],
        'culture' => [
            'id' => 'culture',
            'title' => 'Culture',
            'description' => 'Exploring cultural topics and events.',
        ]
    ];

    public function mount()
    {
        if (in_array($category = Request::segment(1), array_keys(static::$categories))) {
            $this->category = static::$categories[$category]['id'];
            $this->categoryTitle = static::$categories[$category]['title'];
            $this->categoryDescription = static::$categories[$category]['description'];
        }

        $next = entries('articles')
            ->orderBy('id', 'asc')
            ->first();

        if ($next) {
            View::share('next', Str::slug($next->title) . "/{$next->id}");
        }
    }
}
