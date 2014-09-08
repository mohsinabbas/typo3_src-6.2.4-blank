<?php
class FluidCache_Standalone_partial_Navigation_Main_fa83c8f059eb6ed730b6fedc95619277acddfcaf extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 hidden-xs">
                    ';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Page_LanguageMenuViewHelper
$arguments1 = array();
$arguments1['class'] = 'lang-menu';
$arguments1['classCurrent'] = 'active';
$arguments1['defaultLanguageLabel'] = 'D';
$arguments1['labelOverwrite'] = 'D,E';
$arguments1['order'] = '0,1';
$arguments1['layout'] = 'name';
$arguments1['additionalAttributes'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['tagName'] = 'ul';
$arguments1['tagNameChildren'] = 'li';
$arguments1['defaultIsoFlag'] = 'gb';
$arguments1['hideNotTranslated'] = false;
$arguments1['useCHash'] = true;
$arguments1['flagPath'] = 'typo3/sysext/t3skin/images/flags/';
$arguments1['flagImageType'] = 'png';
$arguments1['linkCurrent'] = true;
$arguments1['as'] = 'languageMenu';
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'Tx_Vhs_ViewHelpers_Page_LanguageMenuViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper Tx_Vhs_ViewHelpers_Page_LanguageMenuViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
                </div>
                <div class="col-sm-8">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        ';
// Rendering ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper
$arguments4 = array();
$arguments4['class'] = 'nav navbar-nav hidden-xs';
$arguments4['additionalAttributes'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['tagName'] = 'ul';
$arguments4['tagNameChildren'] = 'li';
$arguments4['entryLevel'] = 0;
$arguments4['levels'] = 1;
$arguments4['divider'] = NULL;
$arguments4['expandAll'] = false;
$arguments4['classActive'] = 'active';
$arguments4['classCurrent'] = 'current';
$arguments4['classHasSubpages'] = 'sub';
$arguments4['useShortcutTarget'] = false;
$arguments4['useShortcutData'] = false;
$arguments4['useShortcutUid'] = true;
$arguments4['classFirst'] = '';
$arguments4['classLast'] = '';
$arguments4['substElementUid'] = '';
$arguments4['includeSpacers'] = false;
$arguments4['resolveExclude'] = false;
$arguments4['showHidden'] = false;
$arguments4['showHiddenInMenu'] = false;
$arguments4['showCurrent'] = true;
$arguments4['linkCurrent'] = true;
$arguments4['linkActive'] = true;
$arguments4['titleFields'] = 'nav_title,title';
$arguments4['doktypes'] = NULL;
$arguments4['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments4['deferred'] = false;
$arguments4['as'] = 'menu';
$arguments4['rootLineAs'] = 'rootLine';
$arguments4['excludePages'] = '';
$arguments4['includeAnchorTitle'] = true;
$arguments4['pageUid'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '
                        ';
// Rendering ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper
$arguments7 = array();
$arguments7['classHasSubpages'] = 'dropdown';
$arguments7['additionalAttributes'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['tagName'] = 'ul';
$arguments7['tagNameChildren'] = 'li';
$arguments7['entryLevel'] = 0;
$arguments7['levels'] = 1;
$arguments7['divider'] = NULL;
$arguments7['expandAll'] = false;
$arguments7['classActive'] = 'active';
$arguments7['classCurrent'] = 'current';
$arguments7['useShortcutTarget'] = false;
$arguments7['useShortcutData'] = false;
$arguments7['useShortcutUid'] = true;
$arguments7['classFirst'] = '';
$arguments7['classLast'] = '';
$arguments7['substElementUid'] = '';
$arguments7['includeSpacers'] = false;
$arguments7['resolveExclude'] = false;
$arguments7['showHidden'] = false;
$arguments7['showHiddenInMenu'] = false;
$arguments7['showCurrent'] = true;
$arguments7['linkCurrent'] = true;
$arguments7['linkActive'] = true;
$arguments7['titleFields'] = 'nav_title,title';
$arguments7['doktypes'] = NULL;
$arguments7['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments7['deferred'] = false;
$arguments7['as'] = 'menu';
$arguments7['rootLineAs'] = 'rootLine';
$arguments7['excludePages'] = '';
$arguments7['includeAnchorTitle'] = true;
$arguments7['pageUid'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
                            <ul class="nav navbar-nav visible-xs">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments10 = array();
$arguments10['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'menu', $renderingContext);
$arguments10['as'] = 'page';
$arguments10['iteration'] = 'pageIterator';
$arguments10['key'] = '';
$arguments10['reverse'] = false;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                                    <li';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments13 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments14 = array();
$arguments14['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.class', $renderingContext);
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = NULL;
$arguments14['doubleEncode'] = true;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value16) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments14['encoding'] !== NULL ? $arguments14['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments14['doubleEncode'])));
$output17 = '';

$output17 .= ' class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.class', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());

$output17 .= (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));

$output17 .= '"';
$arguments13['then'] = $output17;
$arguments13['else'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper22->setArguments($arguments13);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output12 .= $viewHelper22->initializeArgumentsAndRender();

$output12 .= '>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments23 = array();
// Rendering Boolean node
$arguments23['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.hasSubPages', $renderingContext));
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments26 = array();
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments29 = array();
$arguments29['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
// Rendering Array
$array30 = array();
$array30['data-toggle'] = 'dropdown';
$arguments29['additionalAttributes'] = $array30;
$arguments29['additionalParams'] = array (
);
$arguments29['pageType'] = 0;
$arguments29['noCache'] = false;
$arguments29['noCacheHash'] = false;
$arguments29['section'] = '';
$arguments29['linkAccessRestrictedPages'] = false;
$arguments29['absolute'] = false;
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['addQueryStringMethod'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['target'] = NULL;
$arguments29['rel'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.linktext', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());
return (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper35->setArguments($arguments29);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output28 .= $viewHelper35->initializeArgumentsAndRender();

$output28 .= '
                                                ';
// Rendering ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper
$arguments36 = array();
$arguments36['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
$arguments36['class'] = 'dropdown-menu';
$arguments36['additionalAttributes'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['tagName'] = 'ul';
$arguments36['tagNameChildren'] = 'li';
$arguments36['entryLevel'] = 0;
$arguments36['levels'] = 1;
$arguments36['divider'] = NULL;
$arguments36['expandAll'] = false;
$arguments36['classActive'] = 'active';
$arguments36['classCurrent'] = 'current';
$arguments36['classHasSubpages'] = 'sub';
$arguments36['useShortcutTarget'] = false;
$arguments36['useShortcutData'] = false;
$arguments36['useShortcutUid'] = true;
$arguments36['classFirst'] = '';
$arguments36['classLast'] = '';
$arguments36['substElementUid'] = '';
$arguments36['includeSpacers'] = false;
$arguments36['resolveExclude'] = false;
$arguments36['showHidden'] = false;
$arguments36['showHiddenInMenu'] = false;
$arguments36['showCurrent'] = true;
$arguments36['linkCurrent'] = true;
$arguments36['linkActive'] = true;
$arguments36['titleFields'] = 'nav_title,title';
$arguments36['doktypes'] = NULL;
$arguments36['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments36['deferred'] = false;
$arguments36['as'] = 'menu';
$arguments36['rootLineAs'] = 'rootLine';
$arguments36['excludePages'] = '';
$arguments36['includeAnchorTitle'] = true;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper

$output28 .= $viewHelper38->initializeArgumentsAndRender();

$output28 .= '
                                            ';
return $output28;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper39->setArguments($arguments26);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output25 .= $viewHelper39->initializeArgumentsAndRender();

$output25 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments40 = array();
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments43 = array();
$arguments43['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
$arguments43['additionalAttributes'] = NULL;
$arguments43['additionalParams'] = array (
);
$arguments43['pageType'] = 0;
$arguments43['noCache'] = false;
$arguments43['noCacheHash'] = false;
$arguments43['section'] = '';
$arguments43['linkAccessRestrictedPages'] = false;
$arguments43['absolute'] = false;
$arguments43['addQueryString'] = false;
$arguments43['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments43['addQueryStringMethod'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['target'] = NULL;
$arguments43['rel'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.linktext', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());
return (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper48->setArguments($arguments43);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output42 .= $viewHelper48->initializeArgumentsAndRender();

$output42 .= '
                                            ';
return $output42;
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper49->setArguments($arguments40);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output25 .= $viewHelper49->initializeArgumentsAndRender();

$output25 .= '
                                        ';
return $output25;
};
$arguments23['__thenClosure'] = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments51 = array();
$arguments51['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
// Rendering Array
$array52 = array();
$array52['data-toggle'] = 'dropdown';
$arguments51['additionalAttributes'] = $array52;
$arguments51['additionalParams'] = array (
);
$arguments51['pageType'] = 0;
$arguments51['noCache'] = false;
$arguments51['noCacheHash'] = false;
$arguments51['section'] = '';
$arguments51['linkAccessRestrictedPages'] = false;
$arguments51['absolute'] = false;
$arguments51['addQueryString'] = false;
$arguments51['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments51['addQueryStringMethod'] = NULL;
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$arguments51['target'] = NULL;
$arguments51['rel'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.linktext', $renderingContext);
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());
return (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper57->setArguments($arguments51);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output50 .= $viewHelper57->initializeArgumentsAndRender();

$output50 .= '
                                                ';
// Rendering ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper
$arguments58 = array();
$arguments58['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
$arguments58['class'] = 'dropdown-menu';
$arguments58['additionalAttributes'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['tagName'] = 'ul';
$arguments58['tagNameChildren'] = 'li';
$arguments58['entryLevel'] = 0;
$arguments58['levels'] = 1;
$arguments58['divider'] = NULL;
$arguments58['expandAll'] = false;
$arguments58['classActive'] = 'active';
$arguments58['classCurrent'] = 'current';
$arguments58['classHasSubpages'] = 'sub';
$arguments58['useShortcutTarget'] = false;
$arguments58['useShortcutData'] = false;
$arguments58['useShortcutUid'] = true;
$arguments58['classFirst'] = '';
$arguments58['classLast'] = '';
$arguments58['substElementUid'] = '';
$arguments58['includeSpacers'] = false;
$arguments58['resolveExclude'] = false;
$arguments58['showHidden'] = false;
$arguments58['showHiddenInMenu'] = false;
$arguments58['showCurrent'] = true;
$arguments58['linkCurrent'] = true;
$arguments58['linkActive'] = true;
$arguments58['titleFields'] = 'nav_title,title';
$arguments58['doktypes'] = NULL;
$arguments58['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments58['deferred'] = false;
$arguments58['as'] = 'menu';
$arguments58['rootLineAs'] = 'rootLine';
$arguments58['excludePages'] = '';
$arguments58['includeAnchorTitle'] = true;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper');
$viewHelper60->setArguments($arguments58);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper

$output50 .= $viewHelper60->initializeArgumentsAndRender();

$output50 .= '
                                            ';
return $output50;
};
$arguments23['__elseClosure'] = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments62 = array();
$arguments62['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
$arguments62['additionalAttributes'] = NULL;
$arguments62['additionalParams'] = array (
);
$arguments62['pageType'] = 0;
$arguments62['noCache'] = false;
$arguments62['noCacheHash'] = false;
$arguments62['section'] = '';
$arguments62['linkAccessRestrictedPages'] = false;
$arguments62['absolute'] = false;
$arguments62['addQueryString'] = false;
$arguments62['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments62['addQueryStringMethod'] = NULL;
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['target'] = NULL;
$arguments62['rel'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.linktext', $renderingContext);
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());
return (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));
};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper67->setArguments($arguments62);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output61 .= $viewHelper67->initializeArgumentsAndRender();

$output61 .= '
                                            ';
return $output61;
};
$viewHelper68 = $self->getViewHelper('$viewHelper68', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper68->setArguments($arguments23);
$viewHelper68->setRenderingContext($renderingContext);
$viewHelper68->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output12 .= $viewHelper68->initializeArgumentsAndRender();

$output12 .= '
                                    </li>
                                ';
return $output12;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
                            </ul>
                        ';
return $output9;
};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper');
$viewHelper69->setArguments($arguments7);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper

$output0 .= $viewHelper69->initializeArgumentsAndRender();

$output0 .= '
                    </div>
                </div>
                <div class="col-sm-2">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments70 = array();
$arguments70['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'rootPage', $renderingContext);
$arguments70['class'] = 'logo-small';
$arguments70['additionalAttributes'] = NULL;
$arguments70['additionalParams'] = array (
);
$arguments70['pageType'] = 0;
$arguments70['noCache'] = false;
$arguments70['noCacheHash'] = false;
$arguments70['section'] = '';
$arguments70['linkAccessRestrictedPages'] = false;
$arguments70['absolute'] = false;
$arguments70['addQueryString'] = false;
$arguments70['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments70['addQueryStringMethod'] = NULL;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$arguments70['target'] = NULL;
$arguments70['rel'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments72 = array();
$arguments72['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pageTitle', $renderingContext);
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = NULL;
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());
return (!is_string($value74) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments72['encoding'] !== NULL ? $arguments72['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments72['doubleEncode']));
};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper75->setArguments($arguments70);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output0 .= $viewHelper75->initializeArgumentsAndRender();

$output0 .= '
                </div>
            </div>
        </div>
    </nav>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output76 = '';

$output76 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments77 = array();
$arguments77['name'] = 'Main';
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 hidden-xs">
                    ';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Page_LanguageMenuViewHelper
$arguments80 = array();
$arguments80['class'] = 'lang-menu';
$arguments80['classCurrent'] = 'active';
$arguments80['defaultLanguageLabel'] = 'D';
$arguments80['labelOverwrite'] = 'D,E';
$arguments80['order'] = '0,1';
$arguments80['layout'] = 'name';
$arguments80['additionalAttributes'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['tagName'] = 'ul';
$arguments80['tagNameChildren'] = 'li';
$arguments80['defaultIsoFlag'] = 'gb';
$arguments80['hideNotTranslated'] = false;
$arguments80['useCHash'] = true;
$arguments80['flagPath'] = 'typo3/sysext/t3skin/images/flags/';
$arguments80['flagImageType'] = 'png';
$arguments80['linkCurrent'] = true;
$arguments80['as'] = 'languageMenu';
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'Tx_Vhs_ViewHelpers_Page_LanguageMenuViewHelper');
$viewHelper82->setArguments($arguments80);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure81);
// End of ViewHelper Tx_Vhs_ViewHelpers_Page_LanguageMenuViewHelper

$output79 .= $viewHelper82->initializeArgumentsAndRender();

$output79 .= '
                </div>
                <div class="col-sm-8">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        ';
// Rendering ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper
$arguments83 = array();
$arguments83['class'] = 'nav navbar-nav hidden-xs';
$arguments83['additionalAttributes'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$arguments83['tagName'] = 'ul';
$arguments83['tagNameChildren'] = 'li';
$arguments83['entryLevel'] = 0;
$arguments83['levels'] = 1;
$arguments83['divider'] = NULL;
$arguments83['expandAll'] = false;
$arguments83['classActive'] = 'active';
$arguments83['classCurrent'] = 'current';
$arguments83['classHasSubpages'] = 'sub';
$arguments83['useShortcutTarget'] = false;
$arguments83['useShortcutData'] = false;
$arguments83['useShortcutUid'] = true;
$arguments83['classFirst'] = '';
$arguments83['classLast'] = '';
$arguments83['substElementUid'] = '';
$arguments83['includeSpacers'] = false;
$arguments83['resolveExclude'] = false;
$arguments83['showHidden'] = false;
$arguments83['showHiddenInMenu'] = false;
$arguments83['showCurrent'] = true;
$arguments83['linkCurrent'] = true;
$arguments83['linkActive'] = true;
$arguments83['titleFields'] = 'nav_title,title';
$arguments83['doktypes'] = NULL;
$arguments83['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments83['deferred'] = false;
$arguments83['as'] = 'menu';
$arguments83['rootLineAs'] = 'rootLine';
$arguments83['excludePages'] = '';
$arguments83['includeAnchorTitle'] = true;
$arguments83['pageUid'] = NULL;
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper');
$viewHelper85->setArguments($arguments83);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper

$output79 .= $viewHelper85->initializeArgumentsAndRender();

$output79 .= '
                        ';
// Rendering ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper
$arguments86 = array();
$arguments86['classHasSubpages'] = 'dropdown';
$arguments86['additionalAttributes'] = NULL;
$arguments86['class'] = NULL;
$arguments86['dir'] = NULL;
$arguments86['id'] = NULL;
$arguments86['lang'] = NULL;
$arguments86['style'] = NULL;
$arguments86['title'] = NULL;
$arguments86['accesskey'] = NULL;
$arguments86['tabindex'] = NULL;
$arguments86['onclick'] = NULL;
$arguments86['tagName'] = 'ul';
$arguments86['tagNameChildren'] = 'li';
$arguments86['entryLevel'] = 0;
$arguments86['levels'] = 1;
$arguments86['divider'] = NULL;
$arguments86['expandAll'] = false;
$arguments86['classActive'] = 'active';
$arguments86['classCurrent'] = 'current';
$arguments86['useShortcutTarget'] = false;
$arguments86['useShortcutData'] = false;
$arguments86['useShortcutUid'] = true;
$arguments86['classFirst'] = '';
$arguments86['classLast'] = '';
$arguments86['substElementUid'] = '';
$arguments86['includeSpacers'] = false;
$arguments86['resolveExclude'] = false;
$arguments86['showHidden'] = false;
$arguments86['showHiddenInMenu'] = false;
$arguments86['showCurrent'] = true;
$arguments86['linkCurrent'] = true;
$arguments86['linkActive'] = true;
$arguments86['titleFields'] = 'nav_title,title';
$arguments86['doktypes'] = NULL;
$arguments86['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments86['deferred'] = false;
$arguments86['as'] = 'menu';
$arguments86['rootLineAs'] = 'rootLine';
$arguments86['excludePages'] = '';
$arguments86['includeAnchorTitle'] = true;
$arguments86['pageUid'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                            <ul class="nav navbar-nav visible-xs">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments89 = array();
$arguments89['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'menu', $renderingContext);
$arguments89['as'] = 'page';
$arguments89['iteration'] = 'pageIterator';
$arguments89['key'] = '';
$arguments89['reverse'] = false;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                                    <li';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments92 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.class', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());
$arguments92['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode'])));
$output96 = '';

$output96 .= ' class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.class', $renderingContext);
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());

$output96 .= (!is_string($value99) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode']));

$output96 .= '"';
$arguments92['then'] = $output96;
$arguments92['else'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper101->setArguments($arguments92);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output91 .= $viewHelper101->initializeArgumentsAndRender();

$output91 .= '>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments102 = array();
// Rendering Boolean node
$arguments102['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.hasSubPages', $renderingContext));
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments105 = array();
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments108 = array();
$arguments108['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
// Rendering Array
$array109 = array();
$array109['data-toggle'] = 'dropdown';
$arguments108['additionalAttributes'] = $array109;
$arguments108['additionalParams'] = array (
);
$arguments108['pageType'] = 0;
$arguments108['noCache'] = false;
$arguments108['noCacheHash'] = false;
$arguments108['section'] = '';
$arguments108['linkAccessRestrictedPages'] = false;
$arguments108['absolute'] = false;
$arguments108['addQueryString'] = false;
$arguments108['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments108['addQueryStringMethod'] = NULL;
$arguments108['class'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$arguments108['target'] = NULL;
$arguments108['rel'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.linktext', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());
return (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper114->setArguments($arguments108);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure110);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output107 .= $viewHelper114->initializeArgumentsAndRender();

$output107 .= '
                                                ';
// Rendering ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper
$arguments115 = array();
$arguments115['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
$arguments115['class'] = 'dropdown-menu';
$arguments115['additionalAttributes'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['tagName'] = 'ul';
$arguments115['tagNameChildren'] = 'li';
$arguments115['entryLevel'] = 0;
$arguments115['levels'] = 1;
$arguments115['divider'] = NULL;
$arguments115['expandAll'] = false;
$arguments115['classActive'] = 'active';
$arguments115['classCurrent'] = 'current';
$arguments115['classHasSubpages'] = 'sub';
$arguments115['useShortcutTarget'] = false;
$arguments115['useShortcutData'] = false;
$arguments115['useShortcutUid'] = true;
$arguments115['classFirst'] = '';
$arguments115['classLast'] = '';
$arguments115['substElementUid'] = '';
$arguments115['includeSpacers'] = false;
$arguments115['resolveExclude'] = false;
$arguments115['showHidden'] = false;
$arguments115['showHiddenInMenu'] = false;
$arguments115['showCurrent'] = true;
$arguments115['linkCurrent'] = true;
$arguments115['linkActive'] = true;
$arguments115['titleFields'] = 'nav_title,title';
$arguments115['doktypes'] = NULL;
$arguments115['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments115['deferred'] = false;
$arguments115['as'] = 'menu';
$arguments115['rootLineAs'] = 'rootLine';
$arguments115['excludePages'] = '';
$arguments115['includeAnchorTitle'] = true;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper117 = $self->getViewHelper('$viewHelper117', $renderingContext, 'DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper');
$viewHelper117->setArguments($arguments115);
$viewHelper117->setRenderingContext($renderingContext);
$viewHelper117->setRenderChildrenClosure($renderChildrenClosure116);
// End of ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper

$output107 .= $viewHelper117->initializeArgumentsAndRender();

$output107 .= '
                                            ';
return $output107;
};
$viewHelper118 = $self->getViewHelper('$viewHelper118', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper118->setArguments($arguments105);
$viewHelper118->setRenderingContext($renderingContext);
$viewHelper118->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output104 .= $viewHelper118->initializeArgumentsAndRender();

$output104 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments119 = array();
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments122 = array();
$arguments122['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
$arguments122['additionalAttributes'] = NULL;
$arguments122['additionalParams'] = array (
);
$arguments122['pageType'] = 0;
$arguments122['noCache'] = false;
$arguments122['noCacheHash'] = false;
$arguments122['section'] = '';
$arguments122['linkAccessRestrictedPages'] = false;
$arguments122['absolute'] = false;
$arguments122['addQueryString'] = false;
$arguments122['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments122['addQueryStringMethod'] = NULL;
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['title'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$arguments122['target'] = NULL;
$arguments122['rel'] = NULL;
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments124 = array();
$arguments124['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.linktext', $renderingContext);
$arguments124['keepQuotes'] = false;
$arguments124['encoding'] = NULL;
$arguments124['doubleEncode'] = true;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$value126 = ($arguments124['value'] !== NULL ? $arguments124['value'] : $renderChildrenClosure125());
return (!is_string($value126) ? $value126 : htmlspecialchars($value126, ($arguments124['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments124['encoding'] !== NULL ? $arguments124['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments124['doubleEncode']));
};
$viewHelper127 = $self->getViewHelper('$viewHelper127', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper127->setArguments($arguments122);
$viewHelper127->setRenderingContext($renderingContext);
$viewHelper127->setRenderChildrenClosure($renderChildrenClosure123);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output121 .= $viewHelper127->initializeArgumentsAndRender();

$output121 .= '
                                            ';
return $output121;
};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper128->setArguments($arguments119);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure120);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output104 .= $viewHelper128->initializeArgumentsAndRender();

$output104 .= '
                                        ';
return $output104;
};
$arguments102['__thenClosure'] = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments130 = array();
$arguments130['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
// Rendering Array
$array131 = array();
$array131['data-toggle'] = 'dropdown';
$arguments130['additionalAttributes'] = $array131;
$arguments130['additionalParams'] = array (
);
$arguments130['pageType'] = 0;
$arguments130['noCache'] = false;
$arguments130['noCacheHash'] = false;
$arguments130['section'] = '';
$arguments130['linkAccessRestrictedPages'] = false;
$arguments130['absolute'] = false;
$arguments130['addQueryString'] = false;
$arguments130['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments130['addQueryStringMethod'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['target'] = NULL;
$arguments130['rel'] = NULL;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments133 = array();
$arguments133['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.linktext', $renderingContext);
$arguments133['keepQuotes'] = false;
$arguments133['encoding'] = NULL;
$arguments133['doubleEncode'] = true;
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$value135 = ($arguments133['value'] !== NULL ? $arguments133['value'] : $renderChildrenClosure134());
return (!is_string($value135) ? $value135 : htmlspecialchars($value135, ($arguments133['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments133['encoding'] !== NULL ? $arguments133['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments133['doubleEncode']));
};
$viewHelper136 = $self->getViewHelper('$viewHelper136', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper136->setArguments($arguments130);
$viewHelper136->setRenderingContext($renderingContext);
$viewHelper136->setRenderChildrenClosure($renderChildrenClosure132);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output129 .= $viewHelper136->initializeArgumentsAndRender();

$output129 .= '
                                                ';
// Rendering ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper
$arguments137 = array();
$arguments137['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
$arguments137['class'] = 'dropdown-menu';
$arguments137['additionalAttributes'] = NULL;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$arguments137['tagName'] = 'ul';
$arguments137['tagNameChildren'] = 'li';
$arguments137['entryLevel'] = 0;
$arguments137['levels'] = 1;
$arguments137['divider'] = NULL;
$arguments137['expandAll'] = false;
$arguments137['classActive'] = 'active';
$arguments137['classCurrent'] = 'current';
$arguments137['classHasSubpages'] = 'sub';
$arguments137['useShortcutTarget'] = false;
$arguments137['useShortcutData'] = false;
$arguments137['useShortcutUid'] = true;
$arguments137['classFirst'] = '';
$arguments137['classLast'] = '';
$arguments137['substElementUid'] = '';
$arguments137['includeSpacers'] = false;
$arguments137['resolveExclude'] = false;
$arguments137['showHidden'] = false;
$arguments137['showHiddenInMenu'] = false;
$arguments137['showCurrent'] = true;
$arguments137['linkCurrent'] = true;
$arguments137['linkActive'] = true;
$arguments137['titleFields'] = 'nav_title,title';
$arguments137['doktypes'] = NULL;
$arguments137['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments137['deferred'] = false;
$arguments137['as'] = 'menu';
$arguments137['rootLineAs'] = 'rootLine';
$arguments137['excludePages'] = '';
$arguments137['includeAnchorTitle'] = true;
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper');
$viewHelper139->setArguments($arguments137);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper

$output129 .= $viewHelper139->initializeArgumentsAndRender();

$output129 .= '
                                            ';
return $output129;
};
$arguments102['__elseClosure'] = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments141 = array();
$arguments141['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.uid', $renderingContext);
$arguments141['additionalAttributes'] = NULL;
$arguments141['additionalParams'] = array (
);
$arguments141['pageType'] = 0;
$arguments141['noCache'] = false;
$arguments141['noCacheHash'] = false;
$arguments141['section'] = '';
$arguments141['linkAccessRestrictedPages'] = false;
$arguments141['absolute'] = false;
$arguments141['addQueryString'] = false;
$arguments141['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments141['addQueryStringMethod'] = NULL;
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['target'] = NULL;
$arguments141['rel'] = NULL;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments143 = array();
$arguments143['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.linktext', $renderingContext);
$arguments143['keepQuotes'] = false;
$arguments143['encoding'] = NULL;
$arguments143['doubleEncode'] = true;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$value145 = ($arguments143['value'] !== NULL ? $arguments143['value'] : $renderChildrenClosure144());
return (!is_string($value145) ? $value145 : htmlspecialchars($value145, ($arguments143['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments143['encoding'] !== NULL ? $arguments143['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments143['doubleEncode']));
};
$viewHelper146 = $self->getViewHelper('$viewHelper146', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper146->setArguments($arguments141);
$viewHelper146->setRenderingContext($renderingContext);
$viewHelper146->setRenderChildrenClosure($renderChildrenClosure142);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output140 .= $viewHelper146->initializeArgumentsAndRender();

$output140 .= '
                                            ';
return $output140;
};
$viewHelper147 = $self->getViewHelper('$viewHelper147', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper147->setArguments($arguments102);
$viewHelper147->setRenderingContext($renderingContext);
$viewHelper147->setRenderChildrenClosure($renderChildrenClosure103);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output91 .= $viewHelper147->initializeArgumentsAndRender();

$output91 .= '
                                    </li>
                                ';
return $output91;
};

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
                            </ul>
                        ';
return $output88;
};
$viewHelper148 = $self->getViewHelper('$viewHelper148', $renderingContext, 'DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper');
$viewHelper148->setArguments($arguments86);
$viewHelper148->setRenderingContext($renderingContext);
$viewHelper148->setRenderChildrenClosure($renderChildrenClosure87);
// End of ViewHelper DP\DpKickstartTheme\ViewHelpers\Page\MenuViewHelper

$output79 .= $viewHelper148->initializeArgumentsAndRender();

$output79 .= '
                    </div>
                </div>
                <div class="col-sm-2">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments149 = array();
$arguments149['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'rootPage', $renderingContext);
$arguments149['class'] = 'logo-small';
$arguments149['additionalAttributes'] = NULL;
$arguments149['additionalParams'] = array (
);
$arguments149['pageType'] = 0;
$arguments149['noCache'] = false;
$arguments149['noCacheHash'] = false;
$arguments149['section'] = '';
$arguments149['linkAccessRestrictedPages'] = false;
$arguments149['absolute'] = false;
$arguments149['addQueryString'] = false;
$arguments149['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments149['addQueryStringMethod'] = NULL;
$arguments149['dir'] = NULL;
$arguments149['id'] = NULL;
$arguments149['lang'] = NULL;
$arguments149['style'] = NULL;
$arguments149['title'] = NULL;
$arguments149['accesskey'] = NULL;
$arguments149['tabindex'] = NULL;
$arguments149['onclick'] = NULL;
$arguments149['target'] = NULL;
$arguments149['rel'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments151 = array();
$arguments151['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pageTitle', $renderingContext);
$arguments151['keepQuotes'] = false;
$arguments151['encoding'] = NULL;
$arguments151['doubleEncode'] = true;
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$value153 = ($arguments151['value'] !== NULL ? $arguments151['value'] : $renderChildrenClosure152());
return (!is_string($value153) ? $value153 : htmlspecialchars($value153, ($arguments151['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments151['encoding'] !== NULL ? $arguments151['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments151['doubleEncode']));
};
$viewHelper154 = $self->getViewHelper('$viewHelper154', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper154->setArguments($arguments149);
$viewHelper154->setRenderingContext($renderingContext);
$viewHelper154->setRenderChildrenClosure($renderChildrenClosure150);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output79 .= $viewHelper154->initializeArgumentsAndRender();

$output79 .= '
                </div>
            </div>
        </div>
    </nav>

';
return $output79;
};

$output76 .= '';

$output76 .= '
';

return $output76;
}


}
#1410196389    62838     