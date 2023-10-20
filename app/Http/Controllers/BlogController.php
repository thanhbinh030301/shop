<?php

namespace App\Http\Controllers;

use App\Services\API\BlogApi;
use Illuminate\Support\Carbon;

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

    public function detailFeature($slug)
    {
        $now = Carbon::now()->toFormattedDateString();
        $isDetail = false;
        $data = $this->blogApi->getDetail($slug);
        if ($data['type'] != 'NEWS') {
            abort(404);
        }
        $details = $data['content'];
        return view('front.detail', compact('details', 'now'));
    }

    public function categoryList($slug)
    {
        $now = Carbon::now()->toFormattedDateString();
        $isDetail = false;
        $data = $this->blogApi->getDetail($slug);
        if ($data['type'] != 'DIVISION') {
            abort(404);
        }
        $categoryList = $data['content'];
        return view('front.categoryList', compact('categoryList', 'now'));
    }
}
