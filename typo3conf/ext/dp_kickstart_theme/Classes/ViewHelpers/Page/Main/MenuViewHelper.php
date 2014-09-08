<?php

namespace DP\DpKickstartTheme\ViewHelpers\Page\Main;

/***************************************************************
 *
 *  The MIT License (MIT)
 *
 *  Copyright (c) 2014 Samuel Hauser, http://www.dotpulse.ch
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in
 *  all copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 *
 ***************************************************************/
/**
 * @author Samuel Hauser <samuel.hauser@dotpulse.ch>
 */
class MenuViewHelper extends \Tx_Vhs_ViewHelpers_Page_Menu_AbstractMenuViewHelper {

	protected $navClass = 'nav navbar-nav';
	protected $bootstrapClass = array(
		1 => 'hidden-xs',
		2 => 'hidden-sm',
		3 => 'visible-md visible-lg',
		4 => 'hidden-md hidden-lg',
		5 => 'visible-sm',
		6 => 'visible-xs',
		7 => 'hidden'
	);

	/**
	 * @return void
	 */
	public function initializeArguments() {
		parent::initializeArguments();
		$this->registerArgument('pageUid', 'integer', 'Optional parent page UID to use as top level of menu. If left out will be detected from rootLine using $entryLevel', FALSE, NULL);
	}

	protected function getItemClass($pageRow) {
		$class = array();
		if ($pageRow['active']) {
			$class[] = $this->arguments['classActive'];
		}
		if ($pageRow['current']) {
			$class[] = $this->arguments['classActive'];
		}
		if ($pageRow['hasSubPages']) {
			$class[] = $this->arguments['classHasSubpages'];
		}

		if ($pageRow['tx_dptoolbox_hide']) {
			$class[] = $this->bootstrapClass[$pageRow['tx_dptoolbox_hide']];
		}

		$class = array_unique($class);
		return $class;
	}

	protected function getContentClass($origClass) {
		$class = array();
		$class[] = $this->navClass;

		if ($origClass) {
			$class[] = $origClass;
		}

		$output = implode(' ', $class);
		return $output;
	}

	protected function autoRender($menu, $level = 1) {
		$tagName = $this->arguments['tagNameChildren'];
		$this->tag->setTagName($this->getWrappingTagName());
		$substElementUid = $this->arguments['substElementUid'];
		$linkCurrent = (boolean) $this->arguments['linkCurrent'];
		$linkActive = (boolean) $this->arguments['linkActive'];
		$showCurrent = (boolean) $this->arguments['showCurrent'];
		$expandAll = (boolean) $this->arguments['expandAll'];
		$maxLevels = (integer) $this->arguments['levels'];
		$includeAnchorTitle = (boolean) FALSE;
		$html = array();
		$itemsRendered = 0;
		$numberOfItems = count($menu);
		$includedPages = array();
		foreach ($menu as $page) {
			if ($page['current'] && !$showCurrent) {
				continue;
			}
			$class = trim($page['class']) != '' ? ' class="' . $page['class'] . '"' : '';
			$elementId = $substElementUid ? ' id="elem_' . $page['uid'] . '"' : '';
			$target = $page['target'] != '' ? ' target="' . $page['target'] . '"' : '';
			if (FALSE === $this->isNonWrappingMode()) {
				$html[] = '<' . $tagName . $elementId . $class . '>';
			}
			if ($page['current'] && $linkCurrent === FALSE) {
				$html[] = htmlspecialchars($page['linktext']);
			} elseif ($page['active'] && $linkActive === FALSE) {
				$html[] = htmlspecialchars($page['linktext']);
			} else {
				$html[] = sprintf('<a href="%s"%s%s>%s</a>', $page['link'], null, $target, htmlspecialchars($page['linktext']));
			}
			if (FALSE === $this->isNonWrappingMode()) {
				$html[] = '</' . $tagName . '>';
			}
			$itemsRendered++;
			if (TRUE === isset($this->arguments['divider']) && $itemsRendered < $numberOfItems) {
				$html[] = $this->arguments['divider'];
			}
		}
		$content = implode(LF, $html);
		return $content;
	}

	public function renderContent($menu) {
		$attributes = $this->tag->getAttributes();

		if (0 === count($menu)) {
			return NULL;
		}
		$this->tag->setTagName($this->getWrappingTagName());
		// echo '<pre>'.print_r($this->tag->getAttributes()).'</pre>';
		$this->tag->addAttribute('class', $this->getContentClass($attributes['class']) );

		$this->tag->forceClosingTag(TRUE);
		if (TRUE === (boolean) $this->arguments['deferred']) {
			$tagContent = $this->autoRender($menu);
			$this->tag->setContent($tagContent);
			$deferredContent = $this->tag->render();
			$this->viewHelperVariableContainer->addOrUpdate('Tx_Vhs_ViewHelpers_Page_Menu_AbstractMenuViewHelper', 'deferredString', $deferredContent);
			$this->viewHelperVariableContainer->addOrUpdate('Tx_Vhs_ViewHelpers_Page_Menu_AbstractMenuViewHelper', 'deferredArray', $menu);
			$output = $this->renderChildren();
			$this->unsetDeferredVariableStorage();
		} else {
			$content = $this->renderChildren();
			if (0 < strlen(trim($content))) {
				$output = $content;
			} else {
				$tagContent = $this->autoRender($menu);
				$this->tag->setContent($tagContent);
				$output = $this->tag->render();
			}
		}
		return $output;
	}

}
