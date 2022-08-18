<?php

namespace App\Http\Controllers;

use App\Models\TimeLog;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class TimeLogController
{
    public function getAll(): string
    {
        return json_encode(TimeLog::query()
            ->get());
    }

    public function getNew(): Model
    {
        return TimeLog::create(['startTime' => Carbon::now()]);
    }

    public function getLatest(): Model|null
    {
        return TimeLog::query()
            ->whereNull('endTime')
            ->orderby('created_at', 'desc')
            ->first() ?? null;
    }

    public function postLatest(Request $request): void
    {
        $timeLog = TimeLog::query()
            ->whereId($request->log['id'])
            ->first();

        $timeLog->endTime = Carbon::Now();
        $timeLog->save();
    }
}
