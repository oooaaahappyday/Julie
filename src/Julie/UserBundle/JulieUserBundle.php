<?php

namespace Julie\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JulieUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}