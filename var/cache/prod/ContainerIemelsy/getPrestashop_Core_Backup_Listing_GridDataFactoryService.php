<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.backup.listing.grid_data_factory' shared service.

return $this->services['prestashop.core.backup.listing.grid_data_factory'] = new \PrestaShop\PrestaShop\Core\Backup\Listing\BackupGridDataFactory(${($_ = isset($this->services['prestashop.adapter.backup.backup_provider']) ? $this->services['prestashop.adapter.backup.backup_provider'] : ($this->services['prestashop.adapter.backup.backup_provider'] = new \PrestaShop\PrestaShop\Adapter\Backup\BackupRepository())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.backup.comparator.backup_by_date_comparator']) ? $this->services['prestashop.core.backup.comparator.backup_by_date_comparator'] : ($this->services['prestashop.core.backup.comparator.backup_by_date_comparator'] = new \PrestaShop\PrestaShop\Core\Backup\Comparator\BackupByDateComparator())) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getLanguage()->date_format_full);
