<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination_availability extends Model
{
    use HasFactory;
    protected $table = "vaccination_availabilities";
    protected $primaryKey = "vac_av_id";
}
