<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.U4mjn_a' shared service.

return $this->privates['service_locator.U4mjn_a'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('transactionRepo' => function (): ?\App\Repository\TransactionRepository {
    return ($this->privates['App\Repository\TransactionRepository'] ?? $this->load(__DIR__.'/getTransactionRepositoryService.php'));
}));
