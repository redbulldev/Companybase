<?php

declare(strict_types=1);

namespace Companybase\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminField extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'admin_fields';

    /**
     * @var array
     */
    protected $fillable = ['field_name'];

    protected $dates 	= ['deleted_at'];

}
