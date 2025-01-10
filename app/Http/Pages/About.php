<?php

namespace App\Http\Pages;

use Streams\Ui\Pages\Page;

class About extends Page
{
    protected static string $layout = 'layouts.default';

    protected static string $view = 'about';

    protected static ?string $slug = '/about';
}
