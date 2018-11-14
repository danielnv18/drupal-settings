<?php

namespace DrupalSettings\Settings\Command;

use Drupal\Console\Core\Command\Command;

class InitCommand extends Command
{
    /**
     * @var string
     */
    protected $appRoot;

    /**
     * @var string
     */
    protected $consoleRoot;

    public function __construct($appRoot, $consoleRoot = null)
    {
        $this->appRoot = $appRoot;
        $this->consoleRoot = $consoleRoot?$consoleRoot:$appRoot;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('drupalsettings:init')
            ->setDescription('Drupal Settings initializer.');
    }
}
