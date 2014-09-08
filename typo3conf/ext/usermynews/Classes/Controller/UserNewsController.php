<?php
namespace NewsVendor\Usermynews\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Mohsin Abbas <mohsinpucit@gmail.com>, Coeus
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
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
/**
 * UserNewsController
 */
class UserNewsController extends ActionController {

    protected $contentObject;
    protected $userNewsRepository;


    public function injectUserNewsRepository(UserNewsRepository $userNewsRepository) {
        $this->userNewsRepository = $userNewsRepository;
    }

    public function initializeAction() {
        $this->contentObject = $this->configurationManager->getContentObject();
        echo 'saa';
    }
	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		var_dump($this->userNewsRepository);
        exit;
        $userNews = $this->userNewsRepository->findAll();

        $this->view->assign('userNews', $userNews);
	}

	/**
	 * action show
	 * 
	 * @param \NewsVendor\Usermynews\Domain\Model\UserNews $userNews
	 * @return void
	 */
	public function showAction(\NewsVendor\Usermynews\Domain\Model\UserNews $userNews) {
		$this->view->assign('userNews', $userNews);
	}

	/**
	 * action new
	 * 
	 * @param \NewsVendor\Usermynews\Domain\Model\UserNews $newUserNews
	 * @ignorevalidation $newUserNews
	 * @return void
	 */
	public function newAction(\NewsVendor\Usermynews\Domain\Model\UserNews $newUserNews = NULL) {
		$this->view->assign('newUserNews', $newUserNews);
	}

	/**
	 * action create
	 * 
	 * @param \NewsVendor\Usermynews\Domain\Model\UserNews $newUserNews
	 * @return void
	 */
	public function createAction(\NewsVendor\Usermynews\Domain\Model\UserNews $newUserNews) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->userNewsRepository->add($newUserNews);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \NewsVendor\Usermynews\Domain\Model\UserNews $userNews
	 * @ignorevalidation $userNews
	 * @return void
	 */
	public function editAction(\NewsVendor\Usermynews\Domain\Model\UserNews $userNews) {
		$this->view->assign('userNews', $userNews);
	}

	/**
	 * action update
	 * 
	 * @param \NewsVendor\Usermynews\Domain\Model\UserNews $userNews
	 * @return void
	 */
	public function updateAction(\NewsVendor\Usermynews\Domain\Model\UserNews $userNews) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->userNewsRepository->update($userNews);
		$this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 * @param \NewsVendor\Usermynews\Domain\Model\UserNews $userNews
	 * @return void
	 */
	public function deleteAction(\NewsVendor\Usermynews\Domain\Model\UserNews $userNews) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->userNewsRepository->remove($userNews);
		$this->redirect('list');
	}

}