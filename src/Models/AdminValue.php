<?php

declare(strict_types=1);

namespace Companybase\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminValue extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'admin_values';

    /**
     * @var array
     */
    protected $fillable = ['admin_id', 'field_id', 'value'];

}
