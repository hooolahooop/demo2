<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Массово присваиваемые атрибуты.
     *
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'int',
    ];

    /**
     * Получить пользователя - владельца данной задачи
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
