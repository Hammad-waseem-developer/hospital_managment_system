<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid_test extends Model
{
    use HasFactory;
    protected $table = "covid_tests";
    protected $primaryKey = "test_id";
}
