<?php

use Illuminate\Support\Facades\Blade;

Blade::directive('title', function ($expression) {
    return "<?php \$title = $expression ?>";
});