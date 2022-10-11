<?php

/**
 *
 * Your Plugin Name Shell
 *
 *
 * Version      1.0.0
 * Created      11/10/2022
 * Modified     11/10/2022
 *
 * @author      Token27
 * @copyright   Token27
 */
declare(strict_types=1);

namespace YourPluginName\Shell;

# Default

use Cake\Console\Shell;
use Cake\Console\ConsoleOptionParser;
use Cake\Core\Configure;
use Cake\ORM\Entity;

# Components
use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

# Database
use Cake\ORM\Exception\PersistenceFailedException;
use Cake\Datasource\Exception\RecordNotFoundException;

# Utility
use Cake\Utility\Text;
use Cake\Utility\Inflector;
use Cake\Filesystem\Folder;

# Errors
use RuntimeException;
use Throwable;


ini_set("memory_limit", "1G");
ini_set("set_time_limit", "0");
ini_set("max_execution_time", "0");
ini_set("date_default_timezone_set", "Europe/Madrid");
date_default_timezone_set('Europe/Madrid');
set_time_limit(0);

class ExampleShell extends Shell
{

    /**
     * Task list
     *
     * @var array
     */
    public $tasks = [];

    /**
     * Debug mode
     *
     * @var int
     */
    public $debug = 0;

    /**
     * init
     *
     * @access public
     */
    public function initialize(): void
    {

        parent::initialize();


    }

    public function getOptionParser(): ConsoleOptionParser
    {

        $parser = parent::getOptionParser();

        $parser->addOption('debug', [
            'long' => 'debug',
            'help' => 'The debug mode.',
            'default' => 0
        ]);


        return $parser;
    }

    /**
     * Main
     *
     * @access public
     */
    public function main()
    {

        $this->debug = isset($this->params['debug']) ? (int)$this->params['debug'] : 0;

        if ($this->debug) {
            $this->out('################################', 1, Shell::QUIET);
            $this->out('#### Debug is ON !', 1, Shell::QUIET);
            $this->out('################################', 1, Shell::QUIET);
        }

    }

    /**
     * Start Batch
     *
     * @access public
     */
    public function start()
    {

    }

}

?>
