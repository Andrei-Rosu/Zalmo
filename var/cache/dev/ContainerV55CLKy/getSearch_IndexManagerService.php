<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'search.index_manager' shared service.

include_once $this->targetDirs[3].'/vendor/algolia/search-bundle/src/IndexManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/algolia/search-bundle/src/IndexManager.php';

return $this->services['search.index_manager'] = new \Algolia\SearchBundle\IndexManager(($this->services['serializer'] ?? $this->load(__DIR__.'/getSerializerService.php')), ($this->services['search.engine'] ?? $this->load(__DIR__.'/getSearch_EngineService.php')), array('prefix' => 'app_dev_', 'nbResults' => 12, 'doctrineSubscribedEvents' => array(0 => 'postPersist'), 'indices' => array('tags' => array('class' => 'App\\Entity\\Tag', 'enable_serializer_groups' => true, 'index_if' => NULL), 'products' => array('class' => 'App\\Entity\\Product', 'enable_serializer_groups' => true, 'index_if' => NULL)), 'settingsDirectory' => ($this->targetDirs[3].'/config/settings/algolia_search/'), 'batchSize' => 500));
