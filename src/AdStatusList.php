<?php
namespace GdproList;

class AdStatusList extends AbstractList
{
    const CREATED = 1;
    const WAITING_FOR_MODERATION = 2;
    const PUBLISHED = 3;
    const WAITING_FOR_MODIFICATION = 4;
    const CLOSED = 5;

    protected $list = [
        self::CREATED => 'Created',
        self::WAITING_FOR_MODERATION => 'Waiting for moderation',
        self::PUBLISHED => 'Published',
        self::WAITING_FOR_MODIFICATION => 'Waiting for modification',
        self::CLOSED => 'Closed'
    ];
}
