<?php
use Gdpro\Listing\AccountTypeListing;
use Gdpro\Listing\AdStatusListing;
use Gdpro\Listing\GenderListing;
use Gdpro\Listing\HonorificListing;
use Gdpro\Listing\QuotationStatusListing;
use Gdpro\Listing\TaxableHorsePowerListing;
use Gdpro\Listing\VehicleStateListing;
use Gdpro\Listing\EventPrivacyStatusListing;
use Gdpro\Listing\UserRoleListing;
use Gdpro\Listing\PaymentStatusListing;
use Gdpro\Listing\MonthListing;
use Gdpro\Listing\WorkStatusListing;
use Gdpro\Factory\Listing\AccountTypeListingFactory;
use Gdpro\Factory\Listing\AdStatusListingFactory;
use Gdpro\Factory\Listing\GenderListingFactory;
use Gdpro\Factory\Listing\HonorificListingFactory;
use Gdpro\Factory\Listing\QuotationStatusListingFactory;
use Gdpro\Factory\Listing\TaxableHorsePowerListingFactory;
use Gdpro\Factory\Listing\VehicleStateListingFactory;
use Gdpro\Factory\Listing\EventPrivacyStatusListingFactory;
use Gdpro\Factory\Listing\UserRoleListingFactory;
use Gdpro\Factory\Listing\PaymentStatusListingFactory;
use Gdpro\Factory\Listing\MonthListingFactory;
use Gdpro\Factory\Listing\WorkStatusListingFactory;

return [
    'service_manager' => [
        'aliases' => [
            'gdpro.list.account_type'           => 'gdpro_list.account_type',
            'gdpro.list.gender'                 => 'gdpro_list.gender',
            'gdpro.list.honorific'              => 'gdpro_list.honorific',
            'gdpro.list.quotation_status'       => 'gdpro_list.quotation_status',
            'gdpro.list.taxable_horse_power'    => 'gdpro_list.taxable_horse_power',
            'gdpro.list.vehicle_state'          => 'gdpro_list.vehicle_state',
            'gdpro.list.user_role'              => 'gdpro_list.user_role'
        ],

        'factories' => [
            'gdpro_list.account_type'           => 'GdproList\Factory\AccountTypeListFactory',
            'gdpro_list.ad_status'              => 'GdproList\Factory\AdStatusListFactory',
            'gdpro_list.gender'                 => 'GdproList\Factory\GenderListFactory',
            'gdpro_list.honorific'              => 'GdproList\Factory\HonorificListFactory',
            'gdpro_list.quotation_status'       => 'GdproList\Factory\QuotationStatusListFactory',
            'gdpro_list.taxable_horse_power'    => 'GdproList\Factory\TaxableHorsePowerListFactory',
            'gdpro_list.vehicle_state'          => 'GdproList\Factory\VehicleStateListFactory',
            'gdpro_list.event_privacy_status'   => 'GdproList\Factory\EventPrivacyStatusListFactory',
            'gdpro_list.user_role'              => 'GdproList\Factory\UserRoleListFactory',
            'gdpro_list.payment_status'         => 'GdproList\Factory\PaymentStatusListFactory',
            'gdpro_list.month'                  => 'GdproList\Factory\MonthListFactory',
            'gdpro_list.work_status'            => 'GdproList\Factory\WorkStatusListFactory'
        ]
    ],

    'translator' => [
        'locale' => 'fr_FR',
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
