<?php
namespace Gdpro\Listing;

/**
 * Class PhoneTypeListing
 * @package Gdpro\Listing
 */
class PhoneTypeListing extends AbstractListing
{
    const HOME = 1;

    const MOBILE = 2;

    const WORK = 3;

    const FAX_HOME = 4;

    const FAX_WORK = 5;

    const MAIN = 6;

    const OTHER = 7;

    const CUSTOM = 8;

    /**
     * wireless telecommunications device that receives and displays numeric or
     * text messages, or receives and announces voice messages.
     */
    const PAGER = 9;

    const ASSISTANT = 10;

    /**
     * Callback is often automated through the use of web callback or mobile
     * phone applications.
     */
    const CALLBACK = 11;

    const CAR = 12;

    const COMPANY_MAIN = 13;

    /**
     * ISDN lines are used for voice and data communications and start from 2
     * channels (lines).
     */
    const ISDN = 14;

    const MMS = 15;

    const OTHER_FAX = 16;

    const RADIO = 17;

    /**
     * TTY/TTD - A text-telephone device (TTY) used by individuals who may have
     * deafness, other hearing difficulties, or speech disabilities.
     */
    const TTY_TTD = 18;

    const WORK_MOBILE = 19;

    const WORK_PAGER = 20;


    /**
     * List of phone type
     * @var array
     */
    protected $list = [
        self::HOME => 'Home',
        self::MOBILE => 'Mobile',
        self::WORK => 'Work',
        self::FAX_HOME => 'Fax Home',
        self::FAX_WORK => 'Fax Work',
        self::MAIN => 'Main',
        self::OTHER => 'Other',
        self::CUSTOM => 'Custom',
        self::PAGER => 'Pager',
        self::ASSISTANT => 'Assistant',
        self::CALLBACK => 'Callback',
        self::CAR => 'Car',
        self::COMPANY_MAIN => 'Company Main',
        self::ISDN => 'Isdn',
        self::MMS => 'Mms',
        self::OTHER_FAX => 'Other Fax',
        self::RADIO => 'Radio',
        self::TTY_TTD => 'Tty Ttd',
        self::WORK_MOBILE => 'Work Mobile',
        self::WORK_PAGER => 'Work Pager',
    ];
}
