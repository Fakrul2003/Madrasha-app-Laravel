<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // কোন কোন ফিল্ড mass assignment এ fillable হবে
    protected $fillable = [
        'name',
        'email',
        'subject',
    ];
}
