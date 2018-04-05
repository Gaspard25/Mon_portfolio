<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.builder' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ConstraintValidatorFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ContainerConstraintValidatorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\psr\\cache\\src\\CacheItemPoolInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\AdapterInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\PruneableInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\ResettableInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\ProxyTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\PhpArrayTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\PhpArrayAdapter.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\Mapping\\Cache\\CacheInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\Mapping\\Cache\\Psr6Cache.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ObjectInitializerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\Validator\\DoctrineInitializer.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\Validation.php';

$this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

$instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
    return ($this->privates['doctrine.orm.validator.unique'] ?? $this->load(__DIR__.'/getDoctrine_Orm_Validator_UniqueService.php'));
}, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
    return ($this->privates['security.validator.user_password'] ?? $this->load(__DIR__.'/getSecurity_Validator_UserPasswordService.php'));
}, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
    return ($this->privates['validator.email'] ?? $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false));
}, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
    return ($this->privates['validator.expression'] ?? $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator());
}, 'doctrine.orm.validator.unique' => function () {
    return ($this->privates['doctrine.orm.validator.unique'] ?? $this->load(__DIR__.'/getDoctrine_Orm_Validator_UniqueService.php'));
}, 'security.validator.user_password' => function () {
    return ($this->privates['security.validator.user_password'] ?? $this->load(__DIR__.'/getSecurity_Validator_UserPasswordService.php'));
}, 'validator.expression' => function () {
    return ($this->privates['validator.expression'] ?? $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator());
}))));
$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
$instance->setTranslationDomain('validators');
$instance->addXmlMappings(array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/config/validation.xml')));
$instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
$instance->addMethodMapping('loadValidatorMetadata');
$instance->setMetadataCache(new \Symfony\Component\Validator\Mapping\Cache\Psr6Cache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/validation.php'), ($this->privates['cache.validator'] ?? $this->load(__DIR__.'/getCache_ValidatorService.php')))));
$instance->addObjectInitializers(array(0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))));

return $instance;
