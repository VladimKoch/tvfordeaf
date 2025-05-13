<?php
declare(strict_types=1);

namespace App\Service;


use GuzzleHttp\Client;

class YouTubeService
{
    private string $apiKey = 'AIzaSyDHlsSUNWn59jBbaw0tKjJZSRl01-r4H30';
    private Client $http;

    public function __construct()
    {
        // $this->apiKey = $apiKey;
        $this->http = new Client([
            'base_uri' => 'https://www.googleapis.com/youtube/v3/',
        ]);
    }

    public function getVideoInfo(string $videoId): ?array
    {
        try {
            $response = $this->http->request('GET', 'videos', [
                'query' => [
                    'part' => 'snippet,statistics',
                    'id' => $videoId,
                    'key' => $this->apiKey,
                ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            return $data['items'][0] ?? null;

        } catch (\Throwable $e) {
            // log or handle error
            return null;
        }
    }
}