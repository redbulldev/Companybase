<?php

namespace Companybase\Repositories\Eloquents;

use Companybase\Repositories\Contracts\SettingRepositoryInterface;
use Companybase\Models\Setting;

class SettingRepository extends AbstractRepository implements SettingRepositoryInterface
{
	protected $setting;

	function __construct(Setting $setting)
	{
		$this->setting = $setting;

		parent::__construct($setting);
	}

}
