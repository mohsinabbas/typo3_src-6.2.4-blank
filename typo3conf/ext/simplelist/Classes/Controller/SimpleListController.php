<?php
namespace VList\Simplelist\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * SimpleListController
 */
class SimpleListController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		die("a");
        $simpleLists = $this->simpleListRepository->findAll();
		$this->view->assign('simpleLists', $simpleLists);
	}

	/**
	 * action show
	 * 
	 * @param \VList\Simplelist\Domain\Model\SimpleList $simpleList
	 * @return void
	 */
	public function showAction(\VList\Simplelist\Domain\Model\SimpleList $simpleList) {
		$this->view->assign('simpleList', $simpleList);
	}

	/**
	 * action new
	 * 
	 * @param \VList\Simplelist\Domain\Model\SimpleList $newSimpleList
	 * @ignorevalidation $newSimpleList
	 * @return void
	 */
	public function newAction(\VList\Simplelist\Domain\Model\SimpleList $newSimpleList = NULL) {
		$this->view->assign('newSimpleList', $newSimpleList);
	}

	/**
	 * action create
	 * 
	 * @param \VList\Simplelist\Domain\Model\SimpleList $newSimpleList
	 * @return void
	 */
	public function createAction(\VList\Simplelist\Domain\Model\SimpleList $newSimpleList) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->simpleListRepository->add($newSimpleList);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \VList\Simplelist\Domain\Model\SimpleList $simpleList
	 * @ignorevalidation $simpleList
	 * @return void
	 */
	public function editAction(\VList\Simplelist\Domain\Model\SimpleList $simpleList) {
		$this->view->assign('simpleList', $simpleList);
	}

	/**
	 * action update
	 * 
	 * @param \VList\Simplelist\Domain\Model\SimpleList $simpleList
	 * @return void
	 */
	public function updateAction(\VList\Simplelist\Domain\Model\SimpleList $simpleList) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->simpleListRepository->update($simpleList);
		$this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 * @param \VList\Simplelist\Domain\Model\SimpleList $simpleList
	 * @return void
	 */
	public function deleteAction(\VList\Simplelist\Domain\Model\SimpleList $simpleList) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->simpleListRepository->remove($simpleList);
		$this->redirect('list');
	}

}