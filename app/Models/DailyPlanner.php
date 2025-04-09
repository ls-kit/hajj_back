<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyPlanner extends Model
{
    use HasFactory;

    protected $fillable = ['day_number', 'title_bn', 'details_bn'];
}
