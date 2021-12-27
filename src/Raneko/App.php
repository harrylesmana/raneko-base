<?php

namespace Raneko;

/**
 * Primary container for Raneko APP which includes:
 * - Configuration
 * - Logger
 * @author Harry Lesmana <harry.lesmana@msn.com>
 * @since 2021-12-27
 */
class App {

    /**
     * Logger to be used throughout the user of Raneko APP.
     * @var \Monolog\Logger
     */
    private $logger;

    /**
     * Absolute path to the configuration file.
     * @var string
     */
    private $config;

    /**
     * Singleton instance of this APP.
     * Exception will be thrown if there is attempt to instantiate the APP more than once.
     * @var type
     */
    private $instance = NULL;

    public function test() {
        echo "OK";
    }

    private function __construct() {
        
    }

    /**
     * @return \Raneko\App Raneko APP instance.
     */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new \Raneko\App();
        }
        return self::$instance;
    }

}
