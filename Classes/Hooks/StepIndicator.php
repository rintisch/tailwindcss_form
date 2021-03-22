<?php

namespace Rintisch\TailwindcssForm\Hooks;

use TYPO3\CMS\Form\Domain\Model\FormDefinition;
use TYPO3\CMS\Form\Domain\Model\FormElements\Page;

class StepIndicator
{
    /**
     * @param \TYPO3\CMS\Form\Domain\Model\Renderable\RenderableInterface $renderable
     * @return void
     */
    public function afterBuildingFinished(\TYPO3\CMS\Form\Domain\Model\Renderable\RenderableInterface $renderable)
    {
        if ($renderable->getType() == 'Page') {
            /** @var FormDefinition $formDefinition */
            $formDefinition = $renderable->getParentRenderable();
            $formPages = $formDefinition->getPages();
            $pageArray = [];
            /** @var Page $formPage */
            foreach ($formPages as $formPage) {
                $pageStep['label'] = $formPage->getLabel();

                if($formPage->getIdentifier() === $renderable->getIdentifier()){
                    $pageStep['isActive'] = 1;
                } else {
                    $pageStep['isActive'] = 0;
                }

                $pageArray[] = $pageStep;
            }
            $renderable->setRenderingOption('stepIndicator', $pageArray);
        }
    }
}
