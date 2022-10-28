<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FishingTable extends Model
{
    use HasFactory;

    protected $fillable = ['UrlPath','id'];
}
