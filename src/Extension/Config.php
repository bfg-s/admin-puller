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
     * @var array
     */
    protected array $scripts = [
        'vendor/puller/puller.js'
    ];

    /**
     * @return array
     */
    public function metas(): array
    {
        return [
            '<meta name="puller-guard" content="admin">',
        ];
    }
}
