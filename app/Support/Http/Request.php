<?php

namespace App\Support\Http;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class Request
 * @package App\Support\Http
 */
class Request extends FormRequest
{
    /**
     * @return bool
     */
    public function authorized()
    {
        return true;
    }
}
