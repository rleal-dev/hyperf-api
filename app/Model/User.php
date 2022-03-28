<?php

declare(strict_types=1);

namespace App\Models;

use Hyperf\DbConnection\Model\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
    ];
}
