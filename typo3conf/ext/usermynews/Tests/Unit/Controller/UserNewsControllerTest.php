<?php
namespace NewsVendor\Usermynews\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Mohsin Abbas <mohsinpucit@gmail.com>, Coeus
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
 * Test case for class NewsVendor\Usermynews\Controller\UserNewsController.
 *
 * @author Mohsin Abbas <mohsinpucit@gmail.com>
 */
class UserNewsControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \NewsVendor\Usermynews\Controller\UserNewsController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('NewsVendor\\Usermynews\\Controller\\UserNewsController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllUserNewssFromRepositoryAndAssignsThemToView() {

		$allUserNewss = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$userNewsRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$userNewsRepository->expects($this->once())->method('findAll')->will($this->returnValue($allUserNewss));
		$this->inject($this->subject, 'userNewsRepository', $userNewsRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('userNewss', $allUserNewss);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenUserNewsToView() {
		$userNews = new \NewsVendor\Usermynews\Domain\Model\UserNews();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('userNews', $userNews);

		$this->subject->showAction($userNews);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenUserNewsToView() {
		$userNews = new \NewsVendor\Usermynews\Domain\Model\UserNews();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newUserNews', $userNews);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($userNews);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenUserNewsToUserNewsRepository() {
		$userNews = new \NewsVendor\Usermynews\Domain\Model\UserNews();

		$userNewsRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$userNewsRepository->expects($this->once())->method('add')->with($userNews);
		$this->inject($this->subject, 'userNewsRepository', $userNewsRepository);

		$this->subject->createAction($userNews);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenUserNewsToView() {
		$userNews = new \NewsVendor\Usermynews\Domain\Model\UserNews();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('userNews', $userNews);

		$this->subject->editAction($userNews);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenUserNewsInUserNewsRepository() {
		$userNews = new \NewsVendor\Usermynews\Domain\Model\UserNews();

		$userNewsRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$userNewsRepository->expects($this->once())->method('update')->with($userNews);
		$this->inject($this->subject, 'userNewsRepository', $userNewsRepository);

		$this->subject->updateAction($userNews);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenUserNewsFromUserNewsRepository() {
		$userNews = new \NewsVendor\Usermynews\Domain\Model\UserNews();

		$userNewsRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$userNewsRepository->expects($this->once())->method('remove')->with($userNews);
		$this->inject($this->subject, 'userNewsRepository', $userNewsRepository);

		$this->subject->deleteAction($userNews);
	}
}
