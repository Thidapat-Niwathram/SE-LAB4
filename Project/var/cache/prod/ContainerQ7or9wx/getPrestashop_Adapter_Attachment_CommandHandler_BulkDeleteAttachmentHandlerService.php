<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.attachment.command_handler.bulk_delete_attachment_handler' shared service.

return $this->services['prestashop.adapter.attachment.command_handler.bulk_delete_attachment_handler'] = new \PrestaShop\PrestaShop\Adapter\Attachment\CommandHandler\BulkDeleteAttachmentsHandler(($this->services['validator'] ?? $this->getValidatorService()));