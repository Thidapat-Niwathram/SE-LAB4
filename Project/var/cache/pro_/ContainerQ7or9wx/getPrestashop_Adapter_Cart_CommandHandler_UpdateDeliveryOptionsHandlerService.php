<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.cart.command_handler.update_delivery_options_handler' shared service.

return $this->services['prestashop.adapter.cart.command_handler.update_delivery_options_handler'] = new \PrestaShop\PrestaShop\Adapter\Cart\CommandHandler\UpdateCartDeliverySettingsHandler(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));