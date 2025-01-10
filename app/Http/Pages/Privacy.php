<?php

namespace App\Http\Pages;

use Streams\Ui\Pages\Page;

class Privacy extends Page
{
    protected static string $layout = 'layouts.default';

    protected static string $view = 'privacy';

    protected static ?string $slug = '/privacy';
}
