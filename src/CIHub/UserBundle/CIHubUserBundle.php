<?php

namespace CIHub\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CIHubUserBundle extends Bundle {
    public function getParent() {
        return 'FOSUserBundle';
    }
}
