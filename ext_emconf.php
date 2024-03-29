<?php

/**
 * Extension Manager/Repository config file for ext "tailwindcss_form".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'tailwindcss Form',
    'description' => 'Adapt output of EXT:form for usage with tailwindcs',
    'category' => 'fe',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'form' => '10.4.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Rintisch\\TailwindcssForm\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Gerald Rintisch',
    'author_email' => 'gerald.rintisch@posteo.de',
    'author_company' => 'Rintisch',
    'version' => '1.3.0',
];
