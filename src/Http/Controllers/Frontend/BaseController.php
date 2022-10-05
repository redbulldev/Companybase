<?php

declare(strict_types=1);

namespace Companybase\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Companybase\Models\{Admin};
use Companyservice\Models\{Service};
use App\Http\Controllers\Controller;
use Companybase\Models\{ Setting, Tag };
use Companypost\Models\{ Post };

class BaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function getPosts($lenght)
    {
        return Post::active()
            ->latest()
            ->paginate($lenght, ['id', 'title', 'slug', 'quote', 'content', 'photo', 'user_id', 'created_at']);
    }

    public function getFeaturePosts()
    {
        return Post::active()
            ->where('is_featured', 1)
            ->latest()
            ->paginate(5);
    }

    public function getTags()
    {
        return Tag::active()
            ->latest()
            ->paginate(5, ['id', 'name', 'slug', 'status']);
    }

    public function getServices($lenght)
    {
        return Service::active()
            ->latest()
            ->paginate($lenght, ['id', 'service_name', 'slug', 'price', 'package', 'effective_time', 'display_position', 'feature', 'user_id', 'status', 'created_at']);
    }
}
