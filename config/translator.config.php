<?php
namespace GdproList;

return [
    'locale' => 'fr_FR',
    'translation_file_patterns' => [
        [
            'type'     => 'gettext',
            'base_dir' => __DIR__ . '/../language',
            'pattern'  => '%s.mo',
            'text_domain' => __NAMESPACE__
        ]
    ]
];