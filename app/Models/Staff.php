<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
      'role',
      'email_address',
      'days_per_week',
      'monthly_wage'
    ];
}
