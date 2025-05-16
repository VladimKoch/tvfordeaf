<?php

declare(strict_types=1);

namespace App\Model;

use Nette;

class ArticleManager
{
    public function __construct(private \Nette\Database\Explorer $database)
    {
        
    }

    public function findAllArticles()
    {
       return $this->database->table('posts');
    }

   //  public function findAllVideos()
   //  {
   //     return $this->database->table('posts')->relate('videa');
   //  }
}