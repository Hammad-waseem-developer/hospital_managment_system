<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine_status extends Model
{
    use HasFactory;
    protected $table = "vaccine_statuses";
    protected $primaryKey = "v_status_id";
}
