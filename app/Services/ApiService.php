<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiService
{
    protected $baseUrl;
    protected $url;
    protected $siteKey;

    public function __construct()
    {
        $this->baseUrl = env('API_BASE_URL');
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getCategory($params = null)
    {
        $response = Http::asForm()->get($this->baseUrl . $this->url, $params);
        if ($response->getStatusCode() == 200) {
            $content = $response->getBody()->getContents();
            dd($content);
        }

        return $result;
    }

    public function getListNews($requestData)
    {
        $response = Http::post('http://api.unibook.one/005', $requestData);
        // dd($response->json());
        return $response->json();
    }
}
