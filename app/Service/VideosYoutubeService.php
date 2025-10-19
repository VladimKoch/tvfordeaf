<?php
declare(strict_types=1);

namespace App\Service;

use Nette\Database\Explorer;


class VideosYoutubeService
{
    public function __construct(private Explorer $database)
    {
       
    }

    // Metoda pro získání všech videí z youtube 'prodeti'

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

    // Metoda pro získání všech videí z youtube 'pritomnapravda'

    public function videosPritomnaPravda()
    {
        //playlist id
        $apiKey = "AIzaSyC1XfUNh-tAz3UZWAix43J_cr2v-XNU6H4";
        $playlistId = "PLGng993tSmjEED2_zeHOqoRWyVxdE_AAB";
      
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
                // echo '<pre>';
                // print_r($data->items);
                // echo'</pre>';
                // die;

    
        // Získání vídeí pouze příběhy pro děti
        foreach($data->items as $item){

            $title = $item->snippet->title ?? null;
            $jpg = $item->snippet->thumbnails->standard->url ?? null;
            $videoId = $item->snippet->resourceId->videoId ?? null;
            
          
                if ($title && $videoId && $jpg) {
      
                        try {
                            $this->database->table('pritomnapravda')->insert([
                                    'title' => $title,
                                    'video_url' => $videoId,
                                    'jpg_url' => $jpg,
                                    'created_at' => new \DateTime(),
                                ]);
                                } catch (\Nette\Database\UniqueConstraintViolationException $e) {
                                        // Přeskoč duplicitní řádek
                                        continue;
                                    }
                                }
                            }
                        
                       // Příprava na další stránku
                        $nextPageToken = $data->nextPageToken ?? null;

                } while ($nextPageToken);
            

    }

    // Metoda pro získání všech videí z youtube 'kazani'

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

    
        // Získání vídeí pouze kázání
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

    // Metoda pro získání všech videí z youtube 'staryzakon'

    public function bibleProjectOld()
    {
        //playlist id
        $apiKey = "AIzaSyC1XfUNh-tAz3UZWAix43J_cr2v-XNU6H4";
        $playlistIdOld = "PL3SgRG0V2xXLilBpOLEUPlVd3riCYo32_";

        $nextPageToken = '';
        do {
            // Sestavení URL
            $apiUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=$playlistIdOld&key=$apiKey";
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

                // echo '<pre>';
                // print_r($data->items);
                // echo'</pre>';
                // die;

    
        // Získání vídeí starý zákon
        foreach($data->items as $item){
          

            $title = $item->snippet->title ?? null;
            $jpg = $item->snippet->thumbnails->standard->url ?? null;
            $videoId = $item->snippet->resourceId->videoId ?? null;

            
                if ($title && $videoId) {
      
                        try {
                            $this->database->table('oldtestament')->insert([
                                    'testament'=> 'Starý Zákon',
                                    'title' => $title,
                                    'video_url' => $videoId,
                                    'jpg_url'=>$jpg,
                                    'created_at' => new \DateTime(),
                                ]);
                                } catch (\Nette\Database\UniqueConstraintViolationException $e) {
                                        // Přeskoč duplicitní řádek
                                        continue;
                                    }
                                }
                            }
                        // }
                       // Příprava na další stránku
                        $nextPageToken = $data->nextPageToken ?? null;

                } while ($nextPageToken);
    }

    // Metoda pro získání všech videí z youtube 'novyzakon'

    public function bibleProjectNew()
    {
        //playlist id
        $apiKey = "AIzaSyC1XfUNh-tAz3UZWAix43J_cr2v-XNU6H4";
        $playlistIdNew = "PL3SgRG0V2xXJciGjZfWRg2FINfOh6klaF";

        $nextPageToken = '';
        do {
            // Sestavení URL
            $apiUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=$playlistIdNew&key=$apiKey";
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

                // echo '<pre>';
                // print_r($data->items);
                // echo'</pre>';
                // die;

    
        // Získání vídeí nový zákon
        foreach($data->items as $item){
          

            $title = $item->snippet->title ?? null;
            $jpg = $item->snippet->thumbnails->standard->url ?? null;
            $videoId = $item->snippet->resourceId->videoId ?? null;

            
                if ($title && $videoId) {
      
                        try {
                            $this->database->table('newtestament')->insert([
                                    'testament'=> 'Nový Zákon',
                                    'title' => $title,
                                    'video_url' => $videoId,
                                    'jpg_url'=>$jpg,
                                    'created_at' => new \DateTime(),
                                ]);
                                } catch (\Nette\Database\UniqueConstraintViolationException $e) {
                                        // Přeskoč duplicitní řádek
                                        continue;
                                    }
                                }
                            }
                        // }
                       // Příprava na další stránku
                        $nextPageToken = $data->nextPageToken ?? null;

                } while ($nextPageToken);
    }
}