<?php
namespace GdproList;

class WorkStatusList extends AbstractList
{
    const NOT_STARTED = 1;
    const STARTED = 2;
    const IN_PROGRESS = 3;
    const DONE = 4;
    const OVER_DUE = 5;
    const CANCELLED = 6;
    const DEFERRED = 7;

    protected $list = [
        self::NOT_STARTED => 'Not started',
        self::STARTED => 'Started',
        self::IN_PROGRESS => 'In progress',
        self::DONE => 'Done',
        self::OVER_DUE => 'Over due',
        self::CANCELLED => 'Cancelled',
        self::DEFERRED => 'Deferred',
    ];
}
