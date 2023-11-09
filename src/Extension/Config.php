<?php

namespace Admin\Extend\AdminPuller\Extension;

use Admin\Core\ConfigExtensionProvider;
use Admin\ExtendProvider;

/**
 * Class Config
 * @package Admin\Extend\AdminPuller\Extension
 */
class Config extends ConfigExtensionProvider {

    /**
     * @param  ExtendProvider  $provider
     */
    public function __construct(ExtendProvider $provider)
    {
        parent::__construct($provider);

        $this->scripts[] = 'vendor/puller/puller.js';
    }
}
