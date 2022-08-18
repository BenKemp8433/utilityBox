<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeLog extends model
{
    protected $fillable = [
        'startTime',
        'endTime',
        'weekNumber',
        'yearNumber',
    ];
}
