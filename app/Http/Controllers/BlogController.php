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
        return view('front.index');
    }

    public function detailFeature ()
    {
        $isDetail = false;
        $category = $this->blogApi->getCategory();
        if ($category['type'] == 'NEWS') {
            $isDetail = true;
        }
        return view('front.detail', compact('category', 'isDetail'));
    }
}
