<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drawer extends Model
{
    use HasFactory;

    protected $fillable = [
        "status",
        "entry_time",
        "departure_time",
        "parking_id"
    ];
}
