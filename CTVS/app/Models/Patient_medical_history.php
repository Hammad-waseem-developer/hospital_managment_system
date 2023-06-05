<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_medical_history extends Model
{
    use HasFactory;
    protected $table = "patient_medical_histories";
    protected $primaryKey = "history_id";
}
