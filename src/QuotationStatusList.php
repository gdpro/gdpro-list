<?php
namespace GdproList;

class QuotationStatusList extends AbstractList
{
    /**
     * The professional created the quotation, but is still not visible for the
     * individual
     */
    const CREATED = 1;

    /**
     * The admin check the quotation and moderate it. The quotation can't be
     * visible to other user
     */
    const MODERATED = 2;

    /**
     * The admin check the quotation and validated it to be visible to others
     * user
     */
    const VALIDATED = 3;

    /**
     * The individual accept the quotation.
     */
    const ACCEPTED = 4;

    /**
     * The individual reject the quotation.
     */
    const REJECTED = 5;

    protected $list = [
        self::CREATED => 'Created',
        self::MODERATED => 'Moderated',
        self::VALIDATED => 'Validated',
        self::ACCEPTED => 'Accepted',
        self::REJECTED => 'Rejected',
    ];
}
