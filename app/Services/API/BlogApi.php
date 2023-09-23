<?php

namespace App\Services\API;

use App\Services\API\ApiService;
use Illuminate\Support\Facades\Http;

class BlogApi
{
    private $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function getNavigation()
    {
        $url = $this->apiService->getUrl('/001');
        $response = Http::post($url);
        if ($response->getStatusCode() == 200) {
            $content = $response->getBody()->getContents();
            $result = json_decode($content, true);
        }

        return $result['data'];
    }
}
