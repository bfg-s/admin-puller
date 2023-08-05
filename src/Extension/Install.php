<?php

namespace Admin\Extend\AdminPuller\Extension;

use Admin\Core\InstallExtensionProvider;
use Admin\Interfaces\ActionWorkExtensionInterface;

/**
 * Class Install
 * @package Admin\Extend\AdminPuller\Extension
 */
class Install extends InstallExtensionProvider implements ActionWorkExtensionInterface {

    /**
     * @return void
     */
    public function handle(): void
    {
        \Artisan::call('vendor:publish', [
            '--tag' => 'puller-assets',
        ]);
    }
}
