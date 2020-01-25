<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AphorismsCategory extends Model
{
    /**
     * Связанная с моделью таблица.
     */
    protected $table = 'aphorisms_categories';
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
