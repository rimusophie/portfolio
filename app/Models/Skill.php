<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string'    // 0始まりの文字列が数値に変換されるため
    ];
}
