<?php

namespace Companybase\Repositories\Eloquents;

use Companybase\Repositories\Contracts\TagRepositoryInterface;
use Companybase\Models\Tag;

class TagRepository extends AbstractRepository implements TagRepositoryInterface
{
	protected $tag;

	function __construct(Tag $tag)
	{
		$this->tag = $tag;

		parent::__construct($tag);
	}

}
