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
        'factories' => [
            AccountTypeListing::class           => AccountTypeListingFactory::class,
            AdStatusListing::class              => AdStatusListingFactory::class,
            GenderListing::class                => GenderListingFactory::class,
            HonorificListing::class             => HonorificListingFactory::class,
            QuotationStatusListing::class       => QuotationStatusListing::class,
            TaxableHorsePowerListing::class     => TaxableHorsePowerListingFactory::class,
            VehicleStateListing::class          => VehicleStateListingFactory::class,
            EventPrivacyStatusListing::class    => EventPrivacyStatusListingFactory::class,
            UserRoleListing::class              => UserRoleListingFactory::class,
            PaymentStatusListing::class         => PaymentStatusListingFactory::class,
            MonthListing::class                 => MonthListingFactory::class,
            WorkStatusListing::class            => WorkStatusListingFactory::class,
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
