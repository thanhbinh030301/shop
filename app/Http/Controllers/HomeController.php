<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function getListHome(Request $request)
    {
        $requestData = $request->all();

        $data = $this->apiService->getListNews($requestData);
        return view('front.index')->with('data', $data);
    }
}
