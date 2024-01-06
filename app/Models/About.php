<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile',
        'letter',
        'vission',
        'mission',
        'address',
        'phone',
        'mobile',
        'email',
        'fax',
        'facebook',
        'instagram',
        'youtube',
        'linkedin',
        'twitter',
    ];


}
