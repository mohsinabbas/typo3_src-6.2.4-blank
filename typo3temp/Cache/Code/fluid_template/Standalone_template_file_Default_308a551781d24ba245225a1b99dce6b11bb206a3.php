<?php
class FluidCache_Standalone_template_file_Default_308a551781d24ba245225a1b99dce6b11bb206a3 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper
$arguments1 = array();
$arguments1['column'] = '3';
$arguments1['limit'] = NULL;
$arguments1['order'] = 'sorting';
$arguments1['sortDirection'] = 'ASC';
$arguments1['pageUid'] = 0;
$arguments1['contentUids'] = NULL;
$arguments1['slide'] = 0;
$arguments1['slideCollect'] = 0;
$arguments1['slideCollectReverse'] = 0;
$arguments1['loadRegister'] = NULL;
$arguments1['render'] = true;
$arguments1['hideUntranslated'] = false;
$arguments1['as'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'Tx_Vhs_ViewHelpers_Content_RenderViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-10">
        		';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper
$arguments4 = array();
$arguments4['column'] = '0';
$arguments4['limit'] = NULL;
$arguments4['order'] = 'sorting';
$arguments4['sortDirection'] = 'ASC';
$arguments4['pageUid'] = 0;
$arguments4['contentUids'] = NULL;
$arguments4['slide'] = 0;
$arguments4['slideCollect'] = 0;
$arguments4['slideCollectReverse'] = 0;
$arguments4['loadRegister'] = NULL;
$arguments4['render'] = true;
$arguments4['hideUntranslated'] = false;
$arguments4['as'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'Tx_Vhs_ViewHelpers_Content_RenderViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '
    		</div>
    	</div>
    </div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output7 = '';

$output7 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments8 = array();
$arguments8['name'] = 'Default';
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper10->setArguments($arguments8);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output7 .= $viewHelper10->initializeArgumentsAndRender();

$output7 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments11 = array();
$arguments11['name'] = 'Main';
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '

    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper
$arguments14 = array();
$arguments14['column'] = '3';
$arguments14['limit'] = NULL;
$arguments14['order'] = 'sorting';
$arguments14['sortDirection'] = 'ASC';
$arguments14['pageUid'] = 0;
$arguments14['contentUids'] = NULL;
$arguments14['slide'] = 0;
$arguments14['slideCollect'] = 0;
$arguments14['slideCollectReverse'] = 0;
$arguments14['loadRegister'] = NULL;
$arguments14['render'] = true;
$arguments14['hideUntranslated'] = false;
$arguments14['as'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'Tx_Vhs_ViewHelpers_Content_RenderViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper

$output13 .= $viewHelper16->initializeArgumentsAndRender();

$output13 .= '
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-10">
        		';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper
$arguments17 = array();
$arguments17['column'] = '0';
$arguments17['limit'] = NULL;
$arguments17['order'] = 'sorting';
$arguments17['sortDirection'] = 'ASC';
$arguments17['pageUid'] = 0;
$arguments17['contentUids'] = NULL;
$arguments17['slide'] = 0;
$arguments17['slideCollect'] = 0;
$arguments17['slideCollectReverse'] = 0;
$arguments17['loadRegister'] = NULL;
$arguments17['render'] = true;
$arguments17['hideUntranslated'] = false;
$arguments17['as'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'Tx_Vhs_ViewHelpers_Content_RenderViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper Tx_Vhs_ViewHelpers_Content_RenderViewHelper

$output13 .= $viewHelper19->initializeArgumentsAndRender();

$output13 .= '
    		</div>
    	</div>
    </div>

';
return $output13;
};

$output7 .= '';

return $output7;
}


}
#1410196389    6388      