<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.performance.caching.form_provider' shared service.

return $this->services['prestashop.adapter.performance.caching.form_provider'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\PerformanceFormDataProvider(($this->services['prestashop.adapter.caching.configuration'] ?? $this->load('getPrestashop_Adapter_Caching_ConfigurationService.php')));