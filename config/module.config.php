<?php
namespace GdproList;
return [
    'service_manager' => [
        'factories' => [
            'gdpro.list.account_type' =>
                'GdproList\Factory\AccountTypeListFactory',
            'gdpro.list.advertisement_status' =>
                'GdproList\Factory\AdvertisementStatusListFactory',
            'gdpro.list.honoric' =>
                'GdproList\Factory\HonoricListFactory',
            'gdpro.list.quotation_status' =>
                'GdproList\Factory\QuotationStatusListFactory',
            'gdpro.list.taxable_horse_power' =>
                'GdproList\Factory\TaxableHorsePowerListFactory',
        ]
    ],

    'translator' => [
        'translation_file_patterns' => [
            [
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
                'text_domain' => __NAMESPACE__
             ]
         ]
     ]
];