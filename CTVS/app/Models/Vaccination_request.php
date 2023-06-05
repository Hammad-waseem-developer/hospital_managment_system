<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination_request extends Model
{
    use HasFactory;
    protected $table = "vaccination_requests";
    protected $primaryKey = "vac_req_id";
}
