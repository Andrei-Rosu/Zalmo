<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Algolia\SearchBundle\Command\SearchSettingsBackupCommand' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/algolia/search-bundle/src/Command/SearchSettingsCommand.php';
include_once $this->targetDirs[3].'/vendor/algolia/search-bundle/src/Command/SearchSettingsBackupCommand.php';

$this->privates['Algolia\SearchBundle\Command\SearchSettingsBackupCommand'] = $instance = new \Algolia\SearchBundle\Command\SearchSettingsBackupCommand(($this->services['search.settings_manager'] ?? $this->load(__DIR__.'/getSearch_SettingsManagerService.php')));

$instance->setName('search:settings:backup');

return $instance;
