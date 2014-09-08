<?php
namespace DP\DpKickstartTheme\ViewHelpers;

/***************************************************************
 *
 *  The MIT License (MIT)
 *
 *  Copyright (c) 2014 Stefan Bruggmann, http://www.dotpulse.ch
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
 * @author Stefan Bruggmann <stefan.bruggmann@dotpulse.ch>
 *
 * DebugViewHelper
 *
 * debugs only if the header "dp-debug" is sent to the server..
 */
class DebugViewHelper extends \TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper {

	/**
	 * A wrapper for Tx_Extbase_Utility_Debugger::var_dump().
	 *
	 * @param string $title optional custom title for the debug output
	 * @param integer $maxDepth Sets the max recursion depth of the dump (defaults to 8). De- or increase the number according to your needs and memory limit.
	 * @param boolean $plainText If TRUE, the dump is in plain text, if FALSE the debug output is in HTML format.
	 * @param boolean $ansiColors If TRUE, ANSI color codes is added to the plaintext output, if FALSE (default) the plaintext debug output not colored.
	 * @param boolean $inline if TRUE, the dump is rendered at the position of the <f:debug> tag. If FALSE (default), the dump is displayed at the top of the page.
	 * @param array $blacklistedClassNames An array of class names (RegEx) to be filtered. Default is an array of some common class names.
	 * @param array $blacklistedPropertyNames An array of property names and/or array keys (RegEx) to be filtered. Default is an array of some common property names.
	 * @return string
	 */
	public function render($title = NULL, $maxDepth = 8, $plainText = FALSE, $ansiColors = FALSE, $inline = FALSE, $blacklistedClassNames = NULL, $blacklistedPropertyNames = NULL) {
		if ( isset($_SERVER['HTTP_DP_DEBUG']) ) {
			return \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->renderChildren(), $title, $maxDepth, (boolean) $plainText, (boolean) $ansiColors, (boolean) $inline, $blacklistedClassNames, $blacklistedPropertyNames);
		}else{
			return '';
		}
	}
}

?>