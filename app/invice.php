<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invice extends Model
{
    //
    protected $table = 'invices';

    protected $fillable = [
        'user_id',
        'status',
        'invice',
        'prescrip_id'
    ];
}
