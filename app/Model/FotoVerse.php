<?php

declare(strict_types=1);

namespace App\Model;

use Nette\Database\Explorer;
use Nette\Caching\Cache;
use Nette\Caching\Storage;

class FotoVerse
{
    private Explorer $db;
    private Cache $cache;

    public function __construct(Explorer $db, Storage $storage)
    {
        $this->db = $db;
        // Vytvoření cache s namespacem 'fotoverse'
        $this->cache = new Cache($storage, 'fotoverse'); 
    }

    public function getDailyVerse(): ?object
    {
        $today = date('Y-m-d');

        // Pokusí se načíst z cache, pokud tam není, spustí se callback
        return $this->cache->load('daily_verse_' . $today, function () use ($today) {
            
            // 1. Zkusíme najít verš přesně pro dnešek
            $verse = $this->db->table('fotoverse')
                ->where('display_date', $today)
                ->fetch();

            // 2. Fallback: Pokud na dnešek není, vezmeme ten nejnovější z minulosti
            if (!$verse) {
                $verse = $this->db->table('fotoverse')
                    ->where('display_date <', $today)
                    ->order('display_date DESC')
                    ->limit(1)
                    ->fetch();
            }

            return $verse ? (object) $verse->toArray() : null;
        });
    }
}