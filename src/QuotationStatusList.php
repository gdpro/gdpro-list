<?php
namespace GdproList;

class QuotationStatusList extends AbstractList
{
    const CREATED = 1;
    const WAITING_FOR_MODERATION = 2;
    const WAITING_FOR_MODIFICATION = 3;
    const SENT = 4;
    const ACCEPTED = 5;
    const REJECTED = 6;
    const PUBLISHED = 7;

    protected $list = [
        self::CREATED => 'Created',
        self::WAITING_FOR_MODERATION => 'Waiting for moderation',
        self::WAITING_FOR_MODIFICATION => 'Waiting for modification',
        self::SENT => 'Sent',
        self::ACCEPTED => 'Accepted',
        self::REJECTED => 'Rejected',
        self::PUBLISHED => 'Published'
    ];
}
