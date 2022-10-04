<?php

namespace Companybase\Repositories\Eloquents;

use Companybase\Repositories\Contracts\ContactRepositoryInterface;
use Companybase\Models\Contact;

class ContactRepository extends AbstractRepository implements ContactRepositoryInterface
{
	protected $contact;

	function __construct(Contact $contact)
	{
		$this->contact = $contact;

		parent::__construct($contact);
	}

}
