<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AphorismTags extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'aphorisms_tags';
    /**
     * Получить Афоризм для данного тега
     */
    public function post()
    {
        return $this->belongsTo('App\Aphorisms');
    }
}
