<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AphorismAuthors extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'aphorisms_tags';
    /**
     * Разрешаем добавлять данные к полям
     */
    protected $fillable = ['name', 'machine_name', 'aphorisms_id'];
    /**
     * Запрещаем добавлять данные к полям
     */
    protected $guarded = ['example'];
}
