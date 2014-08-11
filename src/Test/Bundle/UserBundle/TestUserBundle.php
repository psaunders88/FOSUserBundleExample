<?php

namespace Test\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TestUserBundle extends Bundle
{
    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
