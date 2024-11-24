<?php

namespace App\Integrations;

use Illuminate\Support\Facades\Http;

class EasyBroker {
    protected $env;
    protected $apiKey;

    public function __construct($env, $apiKey){
        $this->env = $env;
        $this->apiKey = $apiKey;
    }

    public function getRequest($endpoint, $payload = []){
        $url = $this->env == 'staging' ? 'https://api.stagingeb.com/v1' : 'https://api.stagingeb.com/v1';
        $url = "{$url}{$endpoint}";

        return Http::withoutVerifying()
        ->withHeaders([
            'accept' => 'application/json',
            'X-Authorization' => $this->apiKey
        ])
        ->get($url);
    }

    public function getProperties(){
        $body = $this->getRequest('/properties?page=1&limit=20')
            ->body();

        $result = json_decode($body, true);

        return optional($result)['content'] ?? [];
    }
}