<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function positions()
    {
        return $this->hasMany(OrderPosition::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setNewOrderNumber() {
        $maxNumber = static::max('nr');
        $firstPartInt = (int)explode('-', $maxNumber)[0];
        $increment = sprintf('%04d/', $firstPartInt + 1);
        $this->nr = $increment . date_format(new DateTime($this->data), 'm/y');
    }
}
