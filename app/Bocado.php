<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Bocado extends Model
{
    use Notifiable;
    protected $fillable = [
        'title', 'idUser', 'message', 'confirm'
    ];
}
