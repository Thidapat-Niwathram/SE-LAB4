<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.form.choice_provider.features_choice_provider' shared service.

return $this->services['prestashop.adapter.form.choice_provider.features_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\FeaturesChoiceProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Repository\\FeatureRepository'] ?? $this->load('getFeatureRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getInt("PS_LANG_DEFAULT"));
