<?php

declare(strict_types=1);

namespace Companybase\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'tags';

    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'status'];

    protected $dates 	= ['deleted_at'];

    /**
     * Scope a query to only include tags of a given type.
     *
     * @param  $query
     * @return Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Count model
     *
     * @param null
     * @return int
     */
    public static function countTag()
    {
        $counts = Tag::active()->count();

        if($counts){
            return $counts;
        }

        return 0;
    }
}
