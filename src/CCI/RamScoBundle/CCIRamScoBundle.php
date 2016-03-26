<?php

namespace CCI\RamScoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CCIRamScoBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
