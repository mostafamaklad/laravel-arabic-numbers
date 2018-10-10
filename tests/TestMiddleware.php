<?php

namespace Maklad\ArabicNumbers\Test;

use Maklad\ArabicNumbers\Http\Middleware\ArabicNumbers;

class TestMiddleware extends ArabicNumbers
{
    /**
     * The attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        'password'
    ];
}
