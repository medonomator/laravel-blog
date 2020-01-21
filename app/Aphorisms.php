<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aphorisms extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'aphorisms';
    /**
     * Получить комментарии статьи блога.
     */
    public function aphorisms()
    {
        return $this->hasMany('App\AphorismTags');
    }
}
