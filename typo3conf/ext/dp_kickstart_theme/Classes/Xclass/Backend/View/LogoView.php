<?php
namespace DP\DpKickstartTheme\Xclass\Backend\View;

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
 */
class LogoView extends \TYPO3\CMS\Backend\View\LogoView {

	/**
	 * renders the actual logo code
	 *
	 * @return string Logo html code snippet to use in the backend
	 */
	public function render() {

        if(!$GLOBALS['TBE_STYLES']['logo']) {
            return parent::render();
        }

		// Overwrite with custom logo
		if ($GLOBALS['TBE_STYLES']['logo']) {
			$imgInfo = @getimagesize(\TYPO3\CMS\Core\Utility\GeneralUtility::resolveBackPath((PATH_typo3 . $GLOBALS['TBE_STYLES']['logo']), 3));
			$imgUrl = $GLOBALS['TBE_STYLES']['logo'];
		}

		// High-res?
		$width = $imgInfo[0];
		$height = $imgInfo[1];

		if (strpos($imgUrl, '@2x.')) {
			$width = $width/2;
			$height = $height/2;
		}

		$logoTag = '<img src="' . $imgUrl . '" width="' . $width . '" height="' . $height . '" title="'. $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] . '" alt="" />'
                 . '<span class="typo3-sitename">'. $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] . '</span>';
		return '<a href="http://'.$GLOBALS['_SERVER']['HTTP_HOST'].'/" target="_blank">' . $logoTag . '</a>';
	}

}