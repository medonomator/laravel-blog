<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AphorismsAuthors extends Model
{
    /**
     * Связанная с моделью таблица.
     */
    protected $table = 'aphorisms_authors';
    /**
     * Разрешаем добавлять данные к полям.
     */
    protected $fillable = ['name', 'machine_name'];
    /**
     * Получить афоризмы.
     */
    public function getAphorisms()
    {
        return $this->hasMany('App\Aphorisms');
    }
}
