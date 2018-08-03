<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Algolia\SearchBundle\Command\SearchImportCommand' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/vendor/algolia/search-bundle/src/Command/IndexCommand.php';
include_once $this->targetDirs[3].'/vendor/algolia/search-bundle/src/Command/SearchImportCommand.php';

$this->privates['Algolia\SearchBundle\Command\SearchImportCommand'] = $instance = new \Algolia\SearchBundle\Command\SearchImportCommand(($this->services['search.index_manager'] ?? $this->load(__DIR__.'/getSearch_IndexManagerService.php')));

$instance->setName('search:import');

return $instance;