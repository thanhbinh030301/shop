<?php

namespace App\Http\Controllers;

use App\Services\API\BlogApi;

class BlogController extends Controller
{
    private $blogApi;
    public function __construct(BlogApi $blogApi)
    {
        $this->blogApi = $blogApi;
    }
    public function index()
    {
        $category = $this->blogApi->getCategories();
        return view('front.index');
    }
}
