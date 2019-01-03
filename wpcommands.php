<?php
/**
 * Plugin Name: Wordpress Commands
 * Plugin URI: https://ufo.kit.edu/held
 * Description: A utility plugin for running background tasks from the wordpress backend.
 * Author: Jonas Teufel
 * Version: 0.0.0.0
 * Author URI: google.com
 * License: GPLv2 or later
 */
namespace WpCommands;

// We need to include the autoload from composer
require_once __DIR__ . '/vendor/autoload.php';

use the16thpythonist\Wordpress\WpCommands;
use the16thpythonist\Command\Command;
use Log\LogPost;
use the16thpythonist\Wordpress\Data\DataPost;

WpCommands::register();
LogPost::register('log');
DataPost::register('log');


class TestCommand extends Command {

    public $params = array(
        'param1'    => 'value1'
    );

    protected function run(array $args)
    {
        $this->log->info('hello');
    }

}
TestCommand::register('test-command1');