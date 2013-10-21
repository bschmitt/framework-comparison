<?php
class FluidCache_Ni_Events_Event_action_index_b790ddad626a750b9838b9e547103d4f936c1936 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'A list of events';
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'events', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			<ul>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'events', $renderingContext);
$arguments7['as'] = 'event';
$arguments7['key'] = '';
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments10 = array();
$arguments10['action'] = 'show';
// Rendering Array
$array11 = array();
$array11['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments10['arguments'] = $array11;
$arguments10['additionalAttributes'] = NULL;
$arguments10['controller'] = NULL;
$arguments10['package'] = NULL;
$arguments10['subpackage'] = NULL;
$arguments10['section'] = '';
$arguments10['format'] = '';
$arguments10['additionalParams'] = array (
);
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['useParentRequest'] = false;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['name'] = NULL;
$arguments10['rel'] = NULL;
$arguments10['rev'] = NULL;
$arguments10['target'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.title', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = 'UTF-8';
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());
return (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments13['encoding'], $arguments13['doubleEncode']));
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper16->setArguments($arguments10);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output9 .= $viewHelper16->initializeArgumentsAndRender();

$output9 .= '

						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments17 = array();
$arguments17['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.description', $renderingContext);
$arguments17['keepQuotes'] = false;
$arguments17['encoding'] = 'UTF-8';
$arguments17['doubleEncode'] = true;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$value19 = ($arguments17['value'] !== NULL ? $arguments17['value'] : $renderChildrenClosure18());

$output9 .= (!is_string($value19) ? $value19 : htmlspecialchars($value19, ($arguments17['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments17['encoding'], $arguments17['doubleEncode']));

$output9 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments20 = array();
$arguments20['date'] = NULL;
$arguments20['format'] = 'Y-m-d';
$arguments20['forceLocale'] = NULL;
$arguments20['localeFormatType'] = NULL;
$arguments20['localeFormatLength'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.date', $renderingContext);
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output9 .= $viewHelper22->initializeArgumentsAndRender();

$output9 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments23 = array();
$arguments23['date'] = NULL;
$arguments23['format'] = 'Y-m-d';
$arguments23['forceLocale'] = NULL;
$arguments23['localeFormatType'] = NULL;
$arguments23['localeFormatLength'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.time', $renderingContext);
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output9 .= $viewHelper25->initializeArgumentsAndRender();

$output9 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments26 = array();
$arguments26['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.location', $renderingContext);
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = 'UTF-8';
$arguments26['doubleEncode'] = true;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());

$output9 .= (!is_string($value28) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments26['encoding'], $arguments26['doubleEncode']));

$output9 .= '


						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments29 = array();
$arguments29['action'] = 'edit';
// Rendering Array
$array30 = array();
$array30['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments29['arguments'] = $array30;
$arguments29['additionalAttributes'] = NULL;
$arguments29['controller'] = NULL;
$arguments29['package'] = NULL;
$arguments29['subpackage'] = NULL;
$arguments29['section'] = '';
$arguments29['format'] = '';
$arguments29['additionalParams'] = array (
);
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['useParentRequest'] = false;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['name'] = NULL;
$arguments29['rel'] = NULL;
$arguments29['rev'] = NULL;
$arguments29['target'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper32->setArguments($arguments29);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output9 .= $viewHelper32->initializeArgumentsAndRender();

$output9 .= '

						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments33 = array();
$arguments33['action'] = 'delete';
// Rendering Array
$array34 = array();
$array34['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments33['arguments'] = $array34;
$arguments33['additionalAttributes'] = NULL;
$arguments33['controller'] = NULL;
$arguments33['package'] = NULL;
$arguments33['subpackage'] = NULL;
$arguments33['object'] = NULL;
$arguments33['section'] = '';
$arguments33['format'] = '';
$arguments33['additionalParams'] = array (
);
$arguments33['absolute'] = false;
$arguments33['addQueryString'] = false;
$arguments33['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments33['fieldNamePrefix'] = NULL;
$arguments33['actionUri'] = NULL;
$arguments33['objectName'] = NULL;
$arguments33['useParentRequest'] = false;
$arguments33['enctype'] = NULL;
$arguments33['method'] = NULL;
$arguments33['name'] = NULL;
$arguments33['onreset'] = NULL;
$arguments33['onsubmit'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
							';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments37 = array();
$arguments37['value'] = 'Delete';
$arguments37['additionalAttributes'] = NULL;
$arguments37['name'] = NULL;
$arguments37['property'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper39->setArguments($arguments37);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output36 .= $viewHelper39->initializeArgumentsAndRender();

$output36 .= '
						';
return $output36;
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper40->setArguments($arguments33);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output9 .= $viewHelper40->initializeArgumentsAndRender();

$output9 .= '
					</li>
				';
return $output9;
};

$output6 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
			</ul>
		';
return $output6;
};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper41->setArguments($arguments4);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output3 .= $viewHelper41->initializeArgumentsAndRender();

$output3 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments42 = array();
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return '
			<p>No events created yet.</p>
		';
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output3 .= $viewHelper44->initializeArgumentsAndRender();

$output3 .= '
	';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
			<ul>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments46 = array();
$arguments46['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'events', $renderingContext);
$arguments46['as'] = 'event';
$arguments46['key'] = '';
$arguments46['reverse'] = false;
$arguments46['iteration'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments49 = array();
$arguments49['action'] = 'show';
// Rendering Array
$array50 = array();
$array50['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments49['arguments'] = $array50;
$arguments49['additionalAttributes'] = NULL;
$arguments49['controller'] = NULL;
$arguments49['package'] = NULL;
$arguments49['subpackage'] = NULL;
$arguments49['section'] = '';
$arguments49['format'] = '';
$arguments49['additionalParams'] = array (
);
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['useParentRequest'] = false;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['rev'] = NULL;
$arguments49['target'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments52 = array();
$arguments52['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.title', $renderingContext);
$arguments52['keepQuotes'] = false;
$arguments52['encoding'] = 'UTF-8';
$arguments52['doubleEncode'] = true;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$value54 = ($arguments52['value'] !== NULL ? $arguments52['value'] : $renderChildrenClosure53());
return (!is_string($value54) ? $value54 : htmlspecialchars($value54, ($arguments52['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments52['encoding'], $arguments52['doubleEncode']));
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper55->setArguments($arguments49);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output48 .= $viewHelper55->initializeArgumentsAndRender();

$output48 .= '

						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments56 = array();
$arguments56['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.description', $renderingContext);
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = 'UTF-8';
$arguments56['doubleEncode'] = true;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$value58 = ($arguments56['value'] !== NULL ? $arguments56['value'] : $renderChildrenClosure57());

$output48 .= (!is_string($value58) ? $value58 : htmlspecialchars($value58, ($arguments56['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments56['encoding'], $arguments56['doubleEncode']));

$output48 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments59 = array();
$arguments59['date'] = NULL;
$arguments59['format'] = 'Y-m-d';
$arguments59['forceLocale'] = NULL;
$arguments59['localeFormatType'] = NULL;
$arguments59['localeFormatLength'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.date', $renderingContext);
};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper61->setArguments($arguments59);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output48 .= $viewHelper61->initializeArgumentsAndRender();

$output48 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments62 = array();
$arguments62['date'] = NULL;
$arguments62['format'] = 'Y-m-d';
$arguments62['forceLocale'] = NULL;
$arguments62['localeFormatType'] = NULL;
$arguments62['localeFormatLength'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.time', $renderingContext);
};
$viewHelper64 = $self->getViewHelper('$viewHelper64', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper64->setArguments($arguments62);
$viewHelper64->setRenderingContext($renderingContext);
$viewHelper64->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output48 .= $viewHelper64->initializeArgumentsAndRender();

$output48 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.location', $renderingContext);
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = 'UTF-8';
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output48 .= (!is_string($value67) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments65['encoding'], $arguments65['doubleEncode']));

$output48 .= '


						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments68 = array();
$arguments68['action'] = 'edit';
// Rendering Array
$array69 = array();
$array69['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments68['arguments'] = $array69;
$arguments68['additionalAttributes'] = NULL;
$arguments68['controller'] = NULL;
$arguments68['package'] = NULL;
$arguments68['subpackage'] = NULL;
$arguments68['section'] = '';
$arguments68['format'] = '';
$arguments68['additionalParams'] = array (
);
$arguments68['addQueryString'] = false;
$arguments68['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments68['useParentRequest'] = false;
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['name'] = NULL;
$arguments68['rel'] = NULL;
$arguments68['rev'] = NULL;
$arguments68['target'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper71->setArguments($arguments68);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output48 .= $viewHelper71->initializeArgumentsAndRender();

$output48 .= '

						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments72 = array();
$arguments72['action'] = 'delete';
// Rendering Array
$array73 = array();
$array73['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments72['arguments'] = $array73;
$arguments72['additionalAttributes'] = NULL;
$arguments72['controller'] = NULL;
$arguments72['package'] = NULL;
$arguments72['subpackage'] = NULL;
$arguments72['object'] = NULL;
$arguments72['section'] = '';
$arguments72['format'] = '';
$arguments72['additionalParams'] = array (
);
$arguments72['absolute'] = false;
$arguments72['addQueryString'] = false;
$arguments72['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments72['fieldNamePrefix'] = NULL;
$arguments72['actionUri'] = NULL;
$arguments72['objectName'] = NULL;
$arguments72['useParentRequest'] = false;
$arguments72['enctype'] = NULL;
$arguments72['method'] = NULL;
$arguments72['name'] = NULL;
$arguments72['onreset'] = NULL;
$arguments72['onsubmit'] = NULL;
$arguments72['class'] = NULL;
$arguments72['dir'] = NULL;
$arguments72['id'] = NULL;
$arguments72['lang'] = NULL;
$arguments72['style'] = NULL;
$arguments72['title'] = NULL;
$arguments72['accesskey'] = NULL;
$arguments72['tabindex'] = NULL;
$arguments72['onclick'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
							';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments76 = array();
$arguments76['value'] = 'Delete';
$arguments76['additionalAttributes'] = NULL;
$arguments76['name'] = NULL;
$arguments76['property'] = NULL;
$arguments76['disabled'] = NULL;
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper78->setArguments($arguments76);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output75 .= $viewHelper78->initializeArgumentsAndRender();

$output75 .= '
						';
return $output75;
};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper79->setArguments($arguments72);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output48 .= $viewHelper79->initializeArgumentsAndRender();

$output48 .= '
					</li>
				';
return $output48;
};

$output45 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
			</ul>
		';
return $output45;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
return '
			<p>No events created yet.</p>
		';
};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper80->setArguments($arguments1);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper80->initializeArgumentsAndRender();

$output0 .= '
	<p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments81 = array();
$arguments81['action'] = 'new';
$arguments81['additionalAttributes'] = NULL;
$arguments81['arguments'] = array (
);
$arguments81['controller'] = NULL;
$arguments81['package'] = NULL;
$arguments81['subpackage'] = NULL;
$arguments81['section'] = '';
$arguments81['format'] = '';
$arguments81['additionalParams'] = array (
);
$arguments81['addQueryString'] = false;
$arguments81['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments81['useParentRequest'] = false;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$arguments81['name'] = NULL;
$arguments81['rel'] = NULL;
$arguments81['rev'] = NULL;
$arguments81['target'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return 'Create a new event';
};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper83->setArguments($arguments81);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper83->initializeArgumentsAndRender();

$output0 .= '</p>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output84 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments85 = array();
$arguments85['name'] = 'Default';
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper87->setArguments($arguments85);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output84 .= $viewHelper87->initializeArgumentsAndRender();

$output84 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments88 = array();
$arguments88['name'] = 'Title';
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return 'A list of events';
};

$output84 .= '';

$output84 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments90 = array();
$arguments90['name'] = 'Content';
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments93 = array();
// Rendering Boolean node
$arguments93['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'events', $renderingContext));
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments96 = array();
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
			<ul>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments99 = array();
$arguments99['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'events', $renderingContext);
$arguments99['as'] = 'event';
$arguments99['key'] = '';
$arguments99['reverse'] = false;
$arguments99['iteration'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments102 = array();
$arguments102['action'] = 'show';
// Rendering Array
$array103 = array();
$array103['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments102['arguments'] = $array103;
$arguments102['additionalAttributes'] = NULL;
$arguments102['controller'] = NULL;
$arguments102['package'] = NULL;
$arguments102['subpackage'] = NULL;
$arguments102['section'] = '';
$arguments102['format'] = '';
$arguments102['additionalParams'] = array (
);
$arguments102['addQueryString'] = false;
$arguments102['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments102['useParentRequest'] = false;
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['name'] = NULL;
$arguments102['rel'] = NULL;
$arguments102['rev'] = NULL;
$arguments102['target'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.title', $renderingContext);
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = 'UTF-8';
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());
return (!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments105['encoding'], $arguments105['doubleEncode']));
};
$viewHelper108 = $self->getViewHelper('$viewHelper108', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper108->setArguments($arguments102);
$viewHelper108->setRenderingContext($renderingContext);
$viewHelper108->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output101 .= $viewHelper108->initializeArgumentsAndRender();

$output101 .= '

						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments109 = array();
$arguments109['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.description', $renderingContext);
$arguments109['keepQuotes'] = false;
$arguments109['encoding'] = 'UTF-8';
$arguments109['doubleEncode'] = true;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$value111 = ($arguments109['value'] !== NULL ? $arguments109['value'] : $renderChildrenClosure110());

$output101 .= (!is_string($value111) ? $value111 : htmlspecialchars($value111, ($arguments109['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments109['encoding'], $arguments109['doubleEncode']));

$output101 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments112 = array();
$arguments112['date'] = NULL;
$arguments112['format'] = 'Y-m-d';
$arguments112['forceLocale'] = NULL;
$arguments112['localeFormatType'] = NULL;
$arguments112['localeFormatLength'] = NULL;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.date', $renderingContext);
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper114->setArguments($arguments112);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure113);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output101 .= $viewHelper114->initializeArgumentsAndRender();

$output101 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments115 = array();
$arguments115['date'] = NULL;
$arguments115['format'] = 'Y-m-d';
$arguments115['forceLocale'] = NULL;
$arguments115['localeFormatType'] = NULL;
$arguments115['localeFormatLength'] = NULL;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.time', $renderingContext);
};
$viewHelper117 = $self->getViewHelper('$viewHelper117', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper117->setArguments($arguments115);
$viewHelper117->setRenderingContext($renderingContext);
$viewHelper117->setRenderChildrenClosure($renderChildrenClosure116);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output101 .= $viewHelper117->initializeArgumentsAndRender();

$output101 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments118 = array();
$arguments118['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.location', $renderingContext);
$arguments118['keepQuotes'] = false;
$arguments118['encoding'] = 'UTF-8';
$arguments118['doubleEncode'] = true;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$value120 = ($arguments118['value'] !== NULL ? $arguments118['value'] : $renderChildrenClosure119());

$output101 .= (!is_string($value120) ? $value120 : htmlspecialchars($value120, ($arguments118['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments118['encoding'], $arguments118['doubleEncode']));

$output101 .= '


						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments121 = array();
$arguments121['action'] = 'edit';
// Rendering Array
$array122 = array();
$array122['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments121['arguments'] = $array122;
$arguments121['additionalAttributes'] = NULL;
$arguments121['controller'] = NULL;
$arguments121['package'] = NULL;
$arguments121['subpackage'] = NULL;
$arguments121['section'] = '';
$arguments121['format'] = '';
$arguments121['additionalParams'] = array (
);
$arguments121['addQueryString'] = false;
$arguments121['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments121['useParentRequest'] = false;
$arguments121['class'] = NULL;
$arguments121['dir'] = NULL;
$arguments121['id'] = NULL;
$arguments121['lang'] = NULL;
$arguments121['style'] = NULL;
$arguments121['title'] = NULL;
$arguments121['accesskey'] = NULL;
$arguments121['tabindex'] = NULL;
$arguments121['onclick'] = NULL;
$arguments121['name'] = NULL;
$arguments121['rel'] = NULL;
$arguments121['rev'] = NULL;
$arguments121['target'] = NULL;
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper124->setArguments($arguments121);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure123);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output101 .= $viewHelper124->initializeArgumentsAndRender();

$output101 .= '

						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments125 = array();
$arguments125['action'] = 'delete';
// Rendering Array
$array126 = array();
$array126['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments125['arguments'] = $array126;
$arguments125['additionalAttributes'] = NULL;
$arguments125['controller'] = NULL;
$arguments125['package'] = NULL;
$arguments125['subpackage'] = NULL;
$arguments125['object'] = NULL;
$arguments125['section'] = '';
$arguments125['format'] = '';
$arguments125['additionalParams'] = array (
);
$arguments125['absolute'] = false;
$arguments125['addQueryString'] = false;
$arguments125['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments125['fieldNamePrefix'] = NULL;
$arguments125['actionUri'] = NULL;
$arguments125['objectName'] = NULL;
$arguments125['useParentRequest'] = false;
$arguments125['enctype'] = NULL;
$arguments125['method'] = NULL;
$arguments125['name'] = NULL;
$arguments125['onreset'] = NULL;
$arguments125['onsubmit'] = NULL;
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
							';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments129 = array();
$arguments129['value'] = 'Delete';
$arguments129['additionalAttributes'] = NULL;
$arguments129['name'] = NULL;
$arguments129['property'] = NULL;
$arguments129['disabled'] = NULL;
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper131->setArguments($arguments129);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output128 .= $viewHelper131->initializeArgumentsAndRender();

$output128 .= '
						';
return $output128;
};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper132->setArguments($arguments125);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output101 .= $viewHelper132->initializeArgumentsAndRender();

$output101 .= '
					</li>
				';
return $output101;
};

$output98 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
			</ul>
		';
return $output98;
};
$viewHelper133 = $self->getViewHelper('$viewHelper133', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper133->setArguments($arguments96);
$viewHelper133->setRenderingContext($renderingContext);
$viewHelper133->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output95 .= $viewHelper133->initializeArgumentsAndRender();

$output95 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments134 = array();
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return '
			<p>No events created yet.</p>
		';
};
$viewHelper136 = $self->getViewHelper('$viewHelper136', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper136->setArguments($arguments134);
$viewHelper136->setRenderingContext($renderingContext);
$viewHelper136->setRenderChildrenClosure($renderChildrenClosure135);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output95 .= $viewHelper136->initializeArgumentsAndRender();

$output95 .= '
	';
return $output95;
};
$arguments93['__thenClosure'] = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
			<ul>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments138 = array();
$arguments138['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'events', $renderingContext);
$arguments138['as'] = 'event';
$arguments138['key'] = '';
$arguments138['reverse'] = false;
$arguments138['iteration'] = NULL;
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments141 = array();
$arguments141['action'] = 'show';
// Rendering Array
$array142 = array();
$array142['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments141['arguments'] = $array142;
$arguments141['additionalAttributes'] = NULL;
$arguments141['controller'] = NULL;
$arguments141['package'] = NULL;
$arguments141['subpackage'] = NULL;
$arguments141['section'] = '';
$arguments141['format'] = '';
$arguments141['additionalParams'] = array (
);
$arguments141['addQueryString'] = false;
$arguments141['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments141['useParentRequest'] = false;
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['name'] = NULL;
$arguments141['rel'] = NULL;
$arguments141['rev'] = NULL;
$arguments141['target'] = NULL;
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments144 = array();
$arguments144['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.title', $renderingContext);
$arguments144['keepQuotes'] = false;
$arguments144['encoding'] = 'UTF-8';
$arguments144['doubleEncode'] = true;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$value146 = ($arguments144['value'] !== NULL ? $arguments144['value'] : $renderChildrenClosure145());
return (!is_string($value146) ? $value146 : htmlspecialchars($value146, ($arguments144['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments144['encoding'], $arguments144['doubleEncode']));
};
$viewHelper147 = $self->getViewHelper('$viewHelper147', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper147->setArguments($arguments141);
$viewHelper147->setRenderingContext($renderingContext);
$viewHelper147->setRenderChildrenClosure($renderChildrenClosure143);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output140 .= $viewHelper147->initializeArgumentsAndRender();

$output140 .= '

						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments148 = array();
$arguments148['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.description', $renderingContext);
$arguments148['keepQuotes'] = false;
$arguments148['encoding'] = 'UTF-8';
$arguments148['doubleEncode'] = true;
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$value150 = ($arguments148['value'] !== NULL ? $arguments148['value'] : $renderChildrenClosure149());

$output140 .= (!is_string($value150) ? $value150 : htmlspecialchars($value150, ($arguments148['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments148['encoding'], $arguments148['doubleEncode']));

$output140 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments151 = array();
$arguments151['date'] = NULL;
$arguments151['format'] = 'Y-m-d';
$arguments151['forceLocale'] = NULL;
$arguments151['localeFormatType'] = NULL;
$arguments151['localeFormatLength'] = NULL;
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.date', $renderingContext);
};
$viewHelper153 = $self->getViewHelper('$viewHelper153', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper153->setArguments($arguments151);
$viewHelper153->setRenderingContext($renderingContext);
$viewHelper153->setRenderChildrenClosure($renderChildrenClosure152);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output140 .= $viewHelper153->initializeArgumentsAndRender();

$output140 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments154 = array();
$arguments154['date'] = NULL;
$arguments154['format'] = 'Y-m-d';
$arguments154['forceLocale'] = NULL;
$arguments154['localeFormatType'] = NULL;
$arguments154['localeFormatLength'] = NULL;
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.time', $renderingContext);
};
$viewHelper156 = $self->getViewHelper('$viewHelper156', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper156->setArguments($arguments154);
$viewHelper156->setRenderingContext($renderingContext);
$viewHelper156->setRenderChildrenClosure($renderChildrenClosure155);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output140 .= $viewHelper156->initializeArgumentsAndRender();

$output140 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments157 = array();
$arguments157['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.location', $renderingContext);
$arguments157['keepQuotes'] = false;
$arguments157['encoding'] = 'UTF-8';
$arguments157['doubleEncode'] = true;
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$value159 = ($arguments157['value'] !== NULL ? $arguments157['value'] : $renderChildrenClosure158());

$output140 .= (!is_string($value159) ? $value159 : htmlspecialchars($value159, ($arguments157['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments157['encoding'], $arguments157['doubleEncode']));

$output140 .= '


						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments160 = array();
$arguments160['action'] = 'edit';
// Rendering Array
$array161 = array();
$array161['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments160['arguments'] = $array161;
$arguments160['additionalAttributes'] = NULL;
$arguments160['controller'] = NULL;
$arguments160['package'] = NULL;
$arguments160['subpackage'] = NULL;
$arguments160['section'] = '';
$arguments160['format'] = '';
$arguments160['additionalParams'] = array (
);
$arguments160['addQueryString'] = false;
$arguments160['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments160['useParentRequest'] = false;
$arguments160['class'] = NULL;
$arguments160['dir'] = NULL;
$arguments160['id'] = NULL;
$arguments160['lang'] = NULL;
$arguments160['style'] = NULL;
$arguments160['title'] = NULL;
$arguments160['accesskey'] = NULL;
$arguments160['tabindex'] = NULL;
$arguments160['onclick'] = NULL;
$arguments160['name'] = NULL;
$arguments160['rel'] = NULL;
$arguments160['rev'] = NULL;
$arguments160['target'] = NULL;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper163->setArguments($arguments160);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output140 .= $viewHelper163->initializeArgumentsAndRender();

$output140 .= '

						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments164 = array();
$arguments164['action'] = 'delete';
// Rendering Array
$array165 = array();
$array165['event'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event', $renderingContext);
$arguments164['arguments'] = $array165;
$arguments164['additionalAttributes'] = NULL;
$arguments164['controller'] = NULL;
$arguments164['package'] = NULL;
$arguments164['subpackage'] = NULL;
$arguments164['object'] = NULL;
$arguments164['section'] = '';
$arguments164['format'] = '';
$arguments164['additionalParams'] = array (
);
$arguments164['absolute'] = false;
$arguments164['addQueryString'] = false;
$arguments164['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments164['fieldNamePrefix'] = NULL;
$arguments164['actionUri'] = NULL;
$arguments164['objectName'] = NULL;
$arguments164['useParentRequest'] = false;
$arguments164['enctype'] = NULL;
$arguments164['method'] = NULL;
$arguments164['name'] = NULL;
$arguments164['onreset'] = NULL;
$arguments164['onsubmit'] = NULL;
$arguments164['class'] = NULL;
$arguments164['dir'] = NULL;
$arguments164['id'] = NULL;
$arguments164['lang'] = NULL;
$arguments164['style'] = NULL;
$arguments164['title'] = NULL;
$arguments164['accesskey'] = NULL;
$arguments164['tabindex'] = NULL;
$arguments164['onclick'] = NULL;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
							';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments168 = array();
$arguments168['value'] = 'Delete';
$arguments168['additionalAttributes'] = NULL;
$arguments168['name'] = NULL;
$arguments168['property'] = NULL;
$arguments168['disabled'] = NULL;
$arguments168['class'] = NULL;
$arguments168['dir'] = NULL;
$arguments168['id'] = NULL;
$arguments168['lang'] = NULL;
$arguments168['style'] = NULL;
$arguments168['title'] = NULL;
$arguments168['accesskey'] = NULL;
$arguments168['tabindex'] = NULL;
$arguments168['onclick'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper170 = $self->getViewHelper('$viewHelper170', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper170->setArguments($arguments168);
$viewHelper170->setRenderingContext($renderingContext);
$viewHelper170->setRenderChildrenClosure($renderChildrenClosure169);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output167 .= $viewHelper170->initializeArgumentsAndRender();

$output167 .= '
						';
return $output167;
};
$viewHelper171 = $self->getViewHelper('$viewHelper171', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper171->setArguments($arguments164);
$viewHelper171->setRenderingContext($renderingContext);
$viewHelper171->setRenderChildrenClosure($renderChildrenClosure166);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output140 .= $viewHelper171->initializeArgumentsAndRender();

$output140 .= '
					</li>
				';
return $output140;
};

$output137 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
			</ul>
		';
return $output137;
};
$arguments93['__elseClosure'] = function() use ($renderingContext, $self) {
return '
			<p>No events created yet.</p>
		';
};
$viewHelper172 = $self->getViewHelper('$viewHelper172', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper172->setArguments($arguments93);
$viewHelper172->setRenderingContext($renderingContext);
$viewHelper172->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output92 .= $viewHelper172->initializeArgumentsAndRender();

$output92 .= '
	<p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments173 = array();
$arguments173['action'] = 'new';
$arguments173['additionalAttributes'] = NULL;
$arguments173['arguments'] = array (
);
$arguments173['controller'] = NULL;
$arguments173['package'] = NULL;
$arguments173['subpackage'] = NULL;
$arguments173['section'] = '';
$arguments173['format'] = '';
$arguments173['additionalParams'] = array (
);
$arguments173['addQueryString'] = false;
$arguments173['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments173['useParentRequest'] = false;
$arguments173['class'] = NULL;
$arguments173['dir'] = NULL;
$arguments173['id'] = NULL;
$arguments173['lang'] = NULL;
$arguments173['style'] = NULL;
$arguments173['title'] = NULL;
$arguments173['accesskey'] = NULL;
$arguments173['tabindex'] = NULL;
$arguments173['onclick'] = NULL;
$arguments173['name'] = NULL;
$arguments173['rel'] = NULL;
$arguments173['rev'] = NULL;
$arguments173['target'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return 'Create a new event';
};
$viewHelper175 = $self->getViewHelper('$viewHelper175', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper175->setArguments($arguments173);
$viewHelper175->setRenderingContext($renderingContext);
$viewHelper175->setRenderChildrenClosure($renderChildrenClosure174);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output92 .= $viewHelper175->initializeArgumentsAndRender();

$output92 .= '</p>
';
return $output92;
};

$output84 .= '';

return $output84;
}


}
#0             56232     