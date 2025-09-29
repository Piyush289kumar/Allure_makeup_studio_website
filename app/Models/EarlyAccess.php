<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EarlyAccess extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'email',
        'name',
        'company',
        'job_title',
        'notes',
        'country',
        'source',
        'interests',
        'subscribed',
        'signup_ip',
        'referral_code',
    ];

    // Cast JSON fields
    protected $casts = [
        'interests' => 'array',
        'subscribed' => 'boolean',
    ];
}
