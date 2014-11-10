<?php
namespace GdproList;

class QuotationStatusList extends AbstractList
{
    const CREATED = 1;
    const WAITING_FOR_MODERATION = 2;
    const MODERATE = 3;
    const WAITING_FOR_MODIFICATION = 4;
    const SENT = 5;
    const ACCEPTED = 6;
    const REJECTED = 7;

    protected $list = [
        self::CREATED => 'Created',
        self::WAITING_FOR_MODERATION => 'Waiting for moderation',
        self::MODERATE => 'Moderate',
        self::WAITING_FOR_MODIFICATION => 'Waiting for modification',
        self::SENT => 'Sent',
        self::ACCEPTED => 'Accepted',
        self::REJECTED => 'Rejected'
    ];
}
