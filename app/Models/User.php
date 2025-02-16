<?php

namespace App\Models;

use App\Abstracts\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 */
class User extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * @var string
     */
    protected $table = 'users';
}
