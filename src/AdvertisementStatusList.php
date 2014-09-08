<?php
namespace GdproList;

class AdvertisementStatusList extends AbstractList
{
    const CREATED = 0;
    const WAITING_FOR_MODERATION = 1;
    const PUBLISHED = 2;
    const WAITING_FOR_MODIFICATION = 3;

    private $list = [
        self::CREATED => 'Created',
        self::WAITING_FOR_MODERATION => 'Waiting for moderation',
        self::PUBLISHED => 'Published',
        self::WAITING_FOR_MODIFICATION => 'Waiting for modification',
    ];
}
