<?php
declare(strict_types=1);    

namespace App\Presentation\YouTubeApi;


use App\Service\YouTubeService;
use Nette\Application\UI\Presenter;

final class YoutubeApiPresenter extends Presenter
{
    private YouTubeService $youtube;

    public function __construct(YouTubeService $youtube)
    {
        parent::__construct();
        $this->youtube = $youtube;
    }

    public function renderDefault(): void
    {
        $videoId = 'HWhDsC-zGhI';
        $videoInfo = $this->youtube->getVideoInfo($videoId);

        print_r($videoInfo['statistics']); // Debugging line
        die;

        if ($videoInfo) {
            $this->template->title = $videoInfo['snippet']['title'];
            $this->template->views = $videoInfo['statistics']['viewCount'];
        } else {
            $this->template->error = 'Nepodařilo se načíst video.';
        }
    }
}