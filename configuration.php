<?php

$this->menuSection(N_('Dummy Module'), [
    'icon'     => 'wrench',
    'priority' => 99,
])
->add(N_('Dashboard'))
->setUrl('dummymodule/index/index')
->setIcon('wrench')
->setPriority(10);
