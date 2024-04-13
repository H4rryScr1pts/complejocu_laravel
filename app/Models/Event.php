<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "picture",
        "description",
        "places",
        "date",
        "availables",
        "place_id",
        "organizer_id",
        "parking_id",
    ];

    public function organizer() {
        return $this->belongsTo(Organizer::class);
    }

    public function place() {
        return $this->belongsTo(Place::class);
    }

    public function parking() {
        return $this->belongsTo(Parking::class);
    }
}
