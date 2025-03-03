<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Streamer extends Model
{
    use HasFactory;

    // Define the table if it's not the plural of the model name
    protected $table = 'streamers';

    // Define the fillable fields
    protected $fillable = ['name', 'rank'];
}
