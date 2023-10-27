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
        $data = $this->blogApi->getDetail($slug);
        if ($data['type'] == 'NEWS') {
            $details = $data['content'];
            return view('front.detail', compact('details', 'now'));
        } else if ($data['type'] == 'DIVISION') {
            $categoryList = $data['content'];
            return view('front.category', compact('categoryList', 'now'));
        } else {
            abort(404);
        }
    }
}
