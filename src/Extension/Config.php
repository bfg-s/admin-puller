<?php

namespace Admin\Extend\AdminPuller\Extension;

use Admin\Core\ConfigExtensionProvider;

/**
 * Class Config
 * @package Admin\Extend\AdminPuller\Extension
 */
class Config extends ConfigExtensionProvider {

    protected $scripts = [
        'vendor/puller/puller.js'
    ];
}
