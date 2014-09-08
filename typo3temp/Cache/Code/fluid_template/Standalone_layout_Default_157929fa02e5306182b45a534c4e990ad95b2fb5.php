<?php
class FluidCache_Standalone_layout_Default_157929fa02e5306182b45a534c4e990ad95b2fb5 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<div class="body-bg">

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'Navigation/Main';
$arguments1['section'] = 'Main';
$arguments1['arguments'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

    <!--TYPO3SEARCH_begin-->
    <div class="main-section">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments4 = array();
$arguments4['section'] = 'Main';
$arguments4['partial'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '
    </div>
    <!--TYPO3SEARCH_end-->

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['partial'] = 'Structure/Footer';
$arguments7['arguments'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments7['section'] = NULL;
$arguments7['optional'] = false;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '

    <div class="container">
    	<div class="row">
	    	<div class="col-md-4">
	    		';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper
$arguments10 = array();
$arguments10['column'] = '10';
$arguments10['limit'] = NULL;
$arguments10['order'] = 'sorting';
$arguments10['sortDirection'] = 'ASC';
$arguments10['pageUid'] = 0;
$arguments10['contentUids'] = NULL;
$arguments10['slide'] = 0;
$arguments10['slideCollect'] = 0;
$arguments10['slideCollectReverse'] = 0;
$arguments10['loadRegister'] = NULL;
$arguments10['render'] = true;
$arguments10['hideUntranslated'] = false;
$arguments10['as'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'Tx_Vhs_ViewHelpers_Content_RenderViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '
	    	</div>
	    	<div class="col-md-4">
	    		';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper
$arguments13 = array();
$arguments13['column'] = '11';
$arguments13['limit'] = NULL;
$arguments13['order'] = 'sorting';
$arguments13['sortDirection'] = 'ASC';
$arguments13['pageUid'] = 0;
$arguments13['contentUids'] = NULL;
$arguments13['slide'] = 0;
$arguments13['slideCollect'] = 0;
$arguments13['slideCollectReverse'] = 0;
$arguments13['loadRegister'] = NULL;
$arguments13['render'] = true;
$arguments13['hideUntranslated'] = false;
$arguments13['as'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'Tx_Vhs_ViewHelpers_Content_RenderViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '
	    	</div>
	    	<div class="col-md-4">
	    		';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper
$arguments16 = array();
$arguments16['column'] = '12';
$arguments16['limit'] = NULL;
$arguments16['order'] = 'sorting';
$arguments16['sortDirection'] = 'ASC';
$arguments16['pageUid'] = 0;
$arguments16['contentUids'] = NULL;
$arguments16['slide'] = 0;
$arguments16['slideCollect'] = 0;
$arguments16['slideCollectReverse'] = 0;
$arguments16['loadRegister'] = NULL;
$arguments16['render'] = true;
$arguments16['hideUntranslated'] = false;
$arguments16['as'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'Tx_Vhs_ViewHelpers_Content_RenderViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper

$output0 .= $viewHelper18->initializeArgumentsAndRender();

$output0 .= '
	    	</div>
	    </div>
    </div>

</div>';

return $output0;
}


}
#1410196389    6690      