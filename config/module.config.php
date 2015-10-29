<?php
namespace Gdpro\Listing;

use Gdpro\Listing\Factory\AdStatusListingFactory;
use Gdpro\Listing\Factory\GenderListingFactory;
use Gdpro\Listing\Factory\HonorificListingFactory;
use Gdpro\Listing\Factory\QuotationStatusListingFactory;
use Gdpro\Listing\Factory\TaxableHorsePowerListingFactory;
use Gdpro\Listing\Factory\VehicleStateListingFactory;
use Gdpro\Listing\Factory\EventPrivacyStatusListingFactory;
use Gdpro\Listing\Factory\UserRoleListingFactory;
use Gdpro\Listing\Factory\PaymentStatusListingFactory;
use Gdpro\Listing\Factory\MonthListingFactory;
use Gdpro\Listing\Factory\WorkStatusListingFactory;

return [
    'service_manager' => [
        'factories' => [
            AdStatusListing::class              => AdStatusListingFactory::class,
            GenderListing::class                => GenderListingFactory::class,
            HonorificListing::class             => HonorificListingFactory::class,
            QuotationStatusListing::class       => QuotationStatusListingFactory::class,
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
