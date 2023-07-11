<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrashLocation extends Model
{
    use HasFactory;

    protected $fillable = ['location_name', 'lat', 'long'];
}
