<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'search.settings_manager' shared service.

include_once $this->targetDirs[3].'/vendor/algolia/search-bundle/src/Settings/SettingsManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/algolia/search-bundle/src/Settings/AlgoliaSettingsManager.php';
include_once $this->targetDirs[3].'/vendor/algolia/algoliasearch-client-php/src/AlgoliaSearch/Client.php';

return $this->services['search.settings_manager'] = new \Algolia\SearchBundle\Settings\AlgoliaSettingsManager(($this->privates['algolia_client'] ?? $this->privates['algolia_client'] = new \AlgoliaSearch\Client($this->getEnv('ALGOLIA_APP_ID'), $this->getEnv('ALGOLIA_API_KEY'))), array('prefix' => 'app_dev_', 'nbResults' => 12, 'doctrineSubscribedEvents' => array(0 => 'postPersist'), 'indices' => array('tags' => array('class' => 'App\\Entity\\Tag', 'enable_serializer_groups' => true, 'index_if' => NULL), 'products' => array('class' => 'App\\Entity\\Product', 'enable_serializer_groups' => true, 'index_if' => NULL)), 'settingsDirectory' => ($this->targetDirs[3].'/config/settings/algolia_search/'), 'batchSize' => 500));
