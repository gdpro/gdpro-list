<?php
namespace GdproList;

return [
    'service_manager' => [
        'aliases' => [
            'gdpro.list.account_type' => 'gdpro_list.account_type',
            'gdpro.list.advertisement_status' => 'gdpro_list.advertisement_status',
            'gdpro.list.gender' => 'gdpro_list.gender',
            'gdpro.list.honorific' => 'gdpro_list.honorific',
            'gdpro.list.quotation_status' => 'gdpro_list.quotation_status',
            'gdpro.list.taxable_horse_power' => 'gdpro_list.taxable_horse_power',
            'gdpro.list.vehicle_state' => 'gdpro_list.vehicle_state',
            'gdpro.list.user_role' => 'gdpro_list.user_role'
        ],

        'factories' => [
            'gdpro_list.account_type' => 'GdproList\Factory\AccountTypeListFactory',
            'gdpro_list.advertisement_status' => 'GdproList\Factory\AdvertisementStatusListFactory',
            'gdpro_list.gender' => 'GdproList\Factory\GenderListFactory',
            'gdpro_list.honorific' => 'GdproList\Factory\HonorificListFactory',
            'gdpro_list.quotation_status' => 'GdproList\Factory\QuotationStatusListFactory',
            'gdpro_list.taxable_horse_power' => 'GdproList\Factory\TaxableHorsePowerListFactory',
            'gdpro_list.vehicle_state' => 'GdproList\Factory\VehicleStateListFactory',
            'gdpro_list.event_privacy_status' => 'GdproList\Factory\EventPrivacyStatusListFactory',
            'gdpro_list.user_role' => 'GdproList\Factory\UserRoleListFactory',
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
