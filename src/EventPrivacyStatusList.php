<?php
namespace GdproList;

class EventPrivacyStatusList extends AbstractList
{
    const IS_PUBLIC = 0;
    const IS_PROTECTED = 1;
    const HOST_INVITATION = 2;
    const OPEN_INVITATION = 3;

    /**
     * List of event privacy status list
     * @var array
     */
    private $eventPrivacyStatusList = [
        self::IS_PUBLIC => 'Public',
        self::IS_PROTECTED => 'Protected',
        self::HOST_INVITATION => 'Host invitation',
        self::OPEN_INVITATION => 'Open invitation',
    ];
}
