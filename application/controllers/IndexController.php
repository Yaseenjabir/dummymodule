<?php

namespace Icinga\Module\Dummymodule\Controllers;

use Icinga\Web\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $this->view->version     = '1.0.0';
        $this->view->releaseNote = 'Initial release — baseline for patch testing.';
        $this->view->features    = [
            'Basic module structure',
            'Version display',
            'Ready for patch testing',
        ];
    }
}
