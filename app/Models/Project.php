<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'partnert_id',
        'title',
        'start_year',
        'end_year',
        'desc',
        'location',
        'cover',
        'status',
        'user_id'
    ];

}
