<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'easyadmin.form.type.extension' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
include_once $this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Form\\Extension\\EasyAdminExtension.php';

return $this->privates['easyadmin.form.type.extension'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EasyAdminExtension(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
