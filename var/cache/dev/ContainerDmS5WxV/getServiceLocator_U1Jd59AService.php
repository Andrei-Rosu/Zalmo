<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.u1Jd59A' shared service.

return $this->privates['service_locator.u1Jd59A'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('userRepo' => function (): ?\App\Repository\UserRepository {
    return ($this->privates['App\Repository\UserRepository'] ?? $this->load(__DIR__.'/getUserRepositoryService.php'));
}));
