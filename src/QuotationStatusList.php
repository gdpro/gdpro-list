<?php
namespace GdproList;

class QuotationStatusList extends AbstractList
{
    const CREATED = 0;
    const WAITING_FOR_MODERATION = 1;
    const WAITING_FOR_MODIFICATION = 2;
    const SENT = 3;
    const ACCEPTED = 4;
    const REJECTED = 5;

    protected $list = [
        self::CREATED => 'Created',
        self::WAITING_FOR_MODERATION => 'Waiting for moderation',
        self::WAITING_FOR_MODIFICATION => 'Waiting for modification',
        self::SENT => 'Sent',
        self::ACCEPTED => 'Accepted',
        self::REJECTED => 'Rejected',
    ];
}
