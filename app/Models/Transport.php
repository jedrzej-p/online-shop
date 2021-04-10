<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $table = 'transports';

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'transport_id', 'id');
    }
}
