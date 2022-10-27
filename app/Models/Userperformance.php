<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userperformance extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'weekday',
        'user_id',
        'Presence',
        'AllowedOvertime',
        'UnauthorizedOvertime',
        'lowTimeWork',
        'Leave',
        'Mission',
        'TheFirstEvent',
        'TheLastEvent',
        'workgroup',
        'Shifts',
        'Descriptions'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
