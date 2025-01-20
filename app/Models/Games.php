<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'season',
        'status',
        'period',
        'time',
        'postseason',
        'time',
        'home_team_score',
        'visitor_team_score',
        'home_team',
        'visitor_team',
    ];

    protected $hidden = ['pivot', 'created_at', 'updated_at'];

    // "id": 874129,
    // "date": "1946-11-01",
    // "season": 1946,
    // "status": "Final",
    // "period": 4,
    // "time": null,
    // "postseason": false,
    // "home_team_score": 66,
    // "visitor_team_score": 68,
    // "home_team": {
    // },
    // "visitor_team": {
    // }
}
