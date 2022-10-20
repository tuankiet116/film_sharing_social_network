<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'access_token',
        'user_id',
        'user_id_fb',
        'created_at',
        'updated_at'
    ];
}
