<?php
defined('TYPO3_MODE') || die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterBuildingFinished'][]
    = \Rintisch\TailwindcssForm\Hooks\StepIndicator::class;

if (TYPO3_MODE === 'BE') {
    /**
     * Register custom EXT:form configuration
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        trim('
                module.tx_form {
                    settings {
                        yamlConfigurations {
                            90 = EXT:tailwindcss_form/Configuration/Form/CustomFormSetup.yaml
                        }
                    }
                }
            ')
    );
}
