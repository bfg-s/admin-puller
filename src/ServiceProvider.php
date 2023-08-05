<?php

namespace Admin\Extend\AdminPuller;

use Admin\ExtendProvider;
use Admin\Core\ConfigExtensionProvider;
use Admin\Extend\AdminPuller\Extension\Config;
use Admin\Extend\AdminPuller\Extension\Install;
use Admin\Extend\AdminPuller\Extension\Navigator;
use Admin\Extend\AdminPuller\Extension\Uninstall;
use Admin\Extend\AdminPuller\Extension\Permissions;

/**
 * Class ServiceProvider
 * @package Admin\Extend\AdminPuller
 */
class ServiceProvider extends ExtendProvider
{
    /**
     * Extension ID name
     * @var string
     */
    public static $name = "bfg/admin-puller";

    /**
     * Extension call slug
     * @var string
     */
    static $slug = "bfg_admin_puller";

    /**
     * Extension description
     * @var string
     */
    public static $description = "Long pull extension for bfg admin";

    /**
     * @var string
     */
    protected $navigator = Navigator::class;

    /**
     * @var string
     */
    protected $install = Install::class;

    /**
     * @var string
     */
    protected $uninstall = Uninstall::class;

    /**
     * @var string
     */
    protected $permissions = Permissions::class;

    /**
     * @var ConfigExtensionProvider|string
     */
    protected $config = Config::class;
}

