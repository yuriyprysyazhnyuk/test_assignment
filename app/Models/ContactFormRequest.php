<?php

namespace App\Models;

use App\Abstracts\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ContactFormRequest
 * @package App\Models
 */
class ContactFormRequest extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'company',
        'role',
        'consent',
        'message',
    ];

    /**
     * @var string
     */
    protected $table = 'contact_form_requests';
}
