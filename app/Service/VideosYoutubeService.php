<?php
declare(strict_types=1);

namespace App\Service;

use Nette\Database\Explorer;


class VideosYoutubeService
{
    public function __construct(private Explorer $database)
    {
       
    }

    public function videosProdeti()
    {
        //playlist id
        $apiKey = "AIzaSyC1XfUNh-tAz3UZWAix43J_cr2v-XNU6H4";
        $playlistId = "PLGng993tSmjEqFx6w4ohGY3xJOXjtePtd";
      
        $allVideos = [];

        $nextPageToken = '';
        do {
            // Sestavení URL
            $apiUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=$playlistId&key=$apiKey";
            if ($nextPageToken) {
                $apiUrl .= "&pageToken=" . urlencode($nextPageToken);
            }
                //Response from Youtube API
                $response = file_get_contents($apiUrl);

                if (!$response) {
                    throw new \RuntimeException('Nepodařilo se nahrát data z Youtube API');
                    
                }

                // Dekoduje JSON výstup do PHP objektu
                $data = json_decode($response);

    
        // Získání vídeí pouze příběhy pro děti
        foreach($data->items as $item){
            
            if (strpos($item->snippet->title, 'Příběh') !== false) {
                // vložit do tabulky pribehy
                $title = $item->snippet->title ?? null;
                $videoId = $item->snippet->resourceId->videoId ?? null;
                if ($title && $videoId) {
      
                        try {
                            $this->database->table('prodeti')->insert([
                                    'title' => $title,
                                    'video_url' => $videoId,
                                    'created_at' => new \DateTime(),
                                ]);
                                } catch (\Nette\Database\UniqueConstraintViolationException $e) {
                                        // Přeskoč duplicitní řádek
                                        continue;
                                    }
                                }
                            }
                        }
                       // Příprava na další stránku
                        $nextPageToken = $data->nextPageToken ?? null;

                } while ($nextPageToken);
    }



    public function videosKazani()
    {
        //playlist id
        $apiKey = "AIzaSyC1XfUNh-tAz3UZWAix43J_cr2v-XNU6H4";
        $playlistId = "PLGng993tSmjEqFx6w4ohGY3xJOXjtePtd";
      
        $nextPageToken = '';
        do {
            // Sestavení URL
            $apiUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=$playlistId&key=$apiKey";
            if ($nextPageToken) {
                $apiUrl .= "&pageToken=" . urlencode($nextPageToken);
            }
                //Response from Youtube API
                $response = file_get_contents($apiUrl);

                if (!$response) {
                    throw new \RuntimeException('Nepodařilo se nahrát data z Youtube API');
                    
                }

                // Dekoduje JSON výstup do PHP objektu
                $data = json_decode($response);

    
        // Získání vídeí pouze příběhy pro děti
        foreach($data->items as $item){
            
            if (strpos($item->snippet->title, 'Kázání') !== false) {
                // vložit do tabulky pribehy
                $title = $item->snippet->title ?? null;
                $videoId = $item->snippet->resourceId->videoId ?? null;
                if ($title && $videoId) {
      
                        try {
                            $this->database->table('videos')->insert([
                                    'title' => $title,
                                    'video_url' => $videoId,
                                    'created_at' => new \DateTime(),
                                ]);
                                } catch (\Nette\Database\UniqueConstraintViolationException $e) {
                                        // Přeskoč duplicitní řádek
                                        continue;
                                    }
                                }
                            }
                        }
                       // Příprava na další stránku
                        $nextPageToken = $data->nextPageToken ?? null;

                } while ($nextPageToken);
    }
}