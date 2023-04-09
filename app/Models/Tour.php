<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @method static create($data)
 */
class Tour extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

}
