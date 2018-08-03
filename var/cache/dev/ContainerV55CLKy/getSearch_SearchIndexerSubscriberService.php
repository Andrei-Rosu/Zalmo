<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'search.search_indexer_subscriber' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/EventSubscriber.php';
include_once $this->targetDirs[3].'/vendor/algolia/search-bundle/src/EventListener/SearchIndexerSubscriber.php';

return $this->services['search.search_indexer_subscriber'] = new \Algolia\SearchBundle\EventListener\SearchIndexerSubscriber(($this->services['search.index_manager'] ?? $this->load(__DIR__.'/getSearch_IndexManagerService.php')), array(0 => 'postPersist'));
