<?php
namespace SJBR\StaticInfoTables\Domain\Model;
use \SJBR\StaticInfoTables\Utility\LocalizationUtility;
/***************************************************************
*  Copyright notice
*
*  (c) 2013 Stanislas Rolland <typo3(arobas)sjbr.ca>
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Abstract model for static entities
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class AbstractEntity extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Extbase configuration
	 *
	 * @var array
	 */
	protected $extbaseConfiguration;

	/**
	 * Name of the table from persistence mapping of this model
	 *
	 * @var string
	 */
	protected $tableName;

	/**
	 * Contains the persistence columns mapping of this model
	 *
	 * @var array
	 */
	protected $columnsMapping;

	/**
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManagerInterface
	 */
	protected $objectManager;

	/**
	 * On initialization, get the columns mapping configuration
	 */
	public function initializeObject() {
		$this->objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
		$configurationManager = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager');
		$this->extbaseConfiguration = $configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
	}

	/**
	 * Localized name of the entity
	 * @var string
	 */
	protected $nameLocalized = '';

	/**
	 * Sets the localized name of the entity
	 *
	 * @param string $nameLocalized
	 *
	 * @return void
	 */
	public function setNameLocalized($nameLocalized) {
		$this->nameLocalized = $nameLocalized;
	}

	/**
	 * Gets the localized name of the entity
	 *
	 * @return string
	 */
	public function getNameLocalized() {
		$language = LocalizationUtility::getCurrentLanguage();
		$labelFields = LocalizationUtility::getLabelFields($this->tableName, $language);
		foreach ($labelFields as $labelField) {
			if ($this->_hasProperty($this->columnsMapping[$labelField]['mapOnProperty'])) {
				$value = $this->_getProperty($this->columnsMapping[$labelField]['mapOnProperty']);
				if ($value) {
					$this->nameLocalized = $value;
					break;
				}
			}
		}
		return $this->nameLocalized;
	}
}
?>