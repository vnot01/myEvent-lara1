<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Home extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $casts = [
        'start_date1' => 'datetime:Y-m-d',
        'end_date1' => 'datetime:Y-m-d',
    ];
}