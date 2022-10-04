<?php

declare(strict_types=1);

namespace Companybase\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Companybase\Http\Controllers\Frontend\BaseController;
use Illuminate\Http\Request;
use Companybase\Models\Admin;

class HomeController extends BaseController
{
    public $user;

    public function __construct(Admin $user)
    {
        parent::__construct();

        $this->user = $user;
    }

    public function index()
    {
        $posts = $this->getPosts(3);

        $services = $this->getServices(3);

        $tags = $this->getTags();

        $users = $this->user->where('role', 'customer')
            ->latest()
            ->paginate(3, ['id', 'name', 'role']);

        return view('companybase::home', compact('posts', 'tags', 'users', 'services'));
    }
}
