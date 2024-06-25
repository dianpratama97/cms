<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ConfigResource;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        //get all posts
        $config = Config::first();

        //return collection of posts as a resource
        return new ConfigResource(true, 'List Data Posts', $config);
    }
}
