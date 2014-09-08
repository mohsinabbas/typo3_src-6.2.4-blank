<?php
namespace VList\Simplelist\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
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
 * Test case for class VList\Simplelist\Controller\SimpleListController.
 *
 */
class SimpleListControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VList\Simplelist\Controller\SimpleListController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('VList\\Simplelist\\Controller\\SimpleListController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllSimpleListsFromRepositoryAndAssignsThemToView() {

		$allSimpleLists = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$simpleListRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$simpleListRepository->expects($this->once())->method('findAll')->will($this->returnValue($allSimpleLists));
		$this->inject($this->subject, 'simpleListRepository', $simpleListRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('simpleLists', $allSimpleLists);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenSimpleListToView() {
		$simpleList = new \VList\Simplelist\Domain\Model\SimpleList();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('simpleList', $simpleList);

		$this->subject->showAction($simpleList);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenSimpleListToView() {
		$simpleList = new \VList\Simplelist\Domain\Model\SimpleList();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newSimpleList', $simpleList);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($simpleList);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenSimpleListToSimpleListRepository() {
		$simpleList = new \VList\Simplelist\Domain\Model\SimpleList();

		$simpleListRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$simpleListRepository->expects($this->once())->method('add')->with($simpleList);
		$this->inject($this->subject, 'simpleListRepository', $simpleListRepository);

		$this->subject->createAction($simpleList);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenSimpleListToView() {
		$simpleList = new \VList\Simplelist\Domain\Model\SimpleList();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('simpleList', $simpleList);

		$this->subject->editAction($simpleList);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenSimpleListInSimpleListRepository() {
		$simpleList = new \VList\Simplelist\Domain\Model\SimpleList();

		$simpleListRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$simpleListRepository->expects($this->once())->method('update')->with($simpleList);
		$this->inject($this->subject, 'simpleListRepository', $simpleListRepository);

		$this->subject->updateAction($simpleList);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenSimpleListFromSimpleListRepository() {
		$simpleList = new \VList\Simplelist\Domain\Model\SimpleList();

		$simpleListRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$simpleListRepository->expects($this->once())->method('remove')->with($simpleList);
		$this->inject($this->subject, 'simpleListRepository', $simpleListRepository);

		$this->subject->deleteAction($simpleList);
	}
}
