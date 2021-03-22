<?php
defined('TYPO3_MODE') || die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterBuildingFinished'][]
    = \Rintisch\TailwindcssForm\Hooks\StepIndicator::class;
