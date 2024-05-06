<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCount extends Model
{
    protected $table='user_counts';
    protected $fillable = ['count'];
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
}
