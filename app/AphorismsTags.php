<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AphorismsTags extends Model
{
    /**
     * Связанная с моделью таблица.
     */
    protected $table = 'aphorisms_tags';
    /**
     * Разрешаем добавлять данные к полям.
     */
    protected $fillable = ['name', 'machine_name'];
    /**
     * Получить афоризмы.
     */
    public function getAphorisms()
    {
        return $this->belongsTo('App\Aphorisms');
    }
}
