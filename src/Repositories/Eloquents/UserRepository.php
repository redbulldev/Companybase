<?php

namespace Companybase\Repositories\Eloquents;

use Companybase\Repositories\Contracts\UserRepositoryInterface;
use Companybase\Models\Admin;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
	protected $user;

	function __construct(Admin $user)
	{
		$this->user = $user;

		parent::__construct($user);
	}

}
