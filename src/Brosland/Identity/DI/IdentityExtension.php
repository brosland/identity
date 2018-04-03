<?php

namespace Brosland\Identity\DI;

use Brosland\Identity\UserStorage;
use Nette\DI\CompilerExtension;
use Nette\Security\IUserStorage;

class IdentityExtension extends CompilerExtension
{

	public function beforeCompile()
	{
		parent::beforeCompile();

		$builder = $this->getContainerBuilder();

		$builder->getDefinitionByType(IUserStorage::class)
			->setFactory(UserStorage::class);
	}
}