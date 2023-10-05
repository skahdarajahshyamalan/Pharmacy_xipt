<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    protected $table = 'prescriptions';

    protected $fillable = [
        'images',
        'note',
        'deliveryaddress',
        'delideliverytime',
        'user_id',
        'status'
    ];
}
