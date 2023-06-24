<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'l_name',
        'doc_type',
        'doc_number',
        'bir_date',
        'chris_date',
        'h_spirit',
        'is_active',
        'directive',
        'position',
    ];
}
