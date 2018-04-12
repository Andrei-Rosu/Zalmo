<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistry.php';

return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Form\\CustomerType' => function () {
    return ($this->privates['App\Form\CustomerType'] ?? $this->privates['App\Form\CustomerType'] = new \App\Form\CustomerType());
}, 'App\\Form\\TransactionType' => function () {
    return ($this->privates['App\Form\TransactionType'] ?? $this->privates['App\Form\TransactionType'] = new \App\Form\TransactionType());
}, 'App\\Form\\ProductType' => function () {
    return ($this->privates['App\Form\ProductType'] ?? $this->load(__DIR__.'/getProductTypeService.php'));
}, 'App\\Form\\UserType' => function () {
    return ($this->privates['App\Form\UserType'] ?? $this->privates['App\Form\UserType'] = new \App\Form\UserType());
}, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
    return ($this->privates['form.type.entity'] ?? $this->load(__DIR__.'/getForm_Type_EntityService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
    return ($this->privates['form.type.choice'] ?? $this->load(__DIR__.'/getForm_Type_ChoiceService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
    return ($this->privates['form.type.form'] ?? $this->load(__DIR__.'/getForm_Type_FormService.php'));
})), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load(__DIR__.'/getForm_TypeExtension_Form_HttpFoundationService.php'));
    yield 1 => ($this->privates['form.type_extension.form.validator'] ?? $this->load(__DIR__.'/getForm_TypeExtension_Form_ValidatorService.php'));
    yield 2 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load(__DIR__.'/getForm_TypeExtension_Upload_ValidatorService.php'));
    yield 3 => ($this->privates['form.type_extension.csrf'] ?? $this->load(__DIR__.'/getForm_TypeExtension_CsrfService.php'));
    yield 4 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->load(__DIR__.'/getForm_TypeExtension_Form_DataCollectorService.php'));
}, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? $this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? $this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
}, 1)), new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load(__DIR__.'/getForm_TypeGuesser_ValidatorService.php'));
    yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load(__DIR__.'/getForm_TypeGuesser_DoctrineService.php'));
}, 2))), ($this->privates['form.resolved_type_factory'] ?? $this->load(__DIR__.'/getForm_ResolvedTypeFactoryService.php')));
