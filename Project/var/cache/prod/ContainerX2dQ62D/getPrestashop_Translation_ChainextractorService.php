<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.chainextractor' shared service.

$this->services['prestashop.translation.chainextractor'] = $instance = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\ChainExtractor();

$instance->addExtractor('php', ($this->services['prestashop.translation.extractor.php'] ?? ($this->services['prestashop.translation.extractor.php'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\PhpExtractor())));
$instance->addExtractor('twig', ($this->services['prestashop.translation.extractor.twig'] ?? $this->load('getPrestashop_Translation_Extractor_TwigService.php')));
$instance->addExtractor('smarty', ($this->services['prestashop.translation.extractor.smarty'] ?? $this->load('getPrestashop_Translation_Extractor_SmartyService.php')));

return $instance;