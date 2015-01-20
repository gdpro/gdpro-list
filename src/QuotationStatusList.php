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
     * The admin check the quotation and validated it to be visible to others
     * user
     */
    const VALIDATED = 8;

    /**
     * The admin check the quotation and moderate it. The quotation can't be
     * visible to other user
     */
    const MODERATED = 3;

    /**
     * The individual accept the quotation.
     */
    const ACCEPTED = 6;

    /**
     * The individual reject the quotation.
     */
    const REJECTED = 7;

    /**
     * @deprecated
     */
    const WAITING_FOR_MODERATION = 2;

    /**
     * @deprecated
     */
    const WAITING_FOR_MODIFICATION = 4;

    /**
     * @deprecated
     */
    const SENT = 5;

    protected $list = [
        self::CREATED => 'Created',
        self::WAITING_FOR_MODERATION => 'Waiting for moderation',
        self::MODERATED => 'Moderated',
        self::WAITING_FOR_MODIFICATION => 'Waiting for modification',
        self::SENT => 'Sent',
        self::ACCEPTED => 'Accepted',
        self::REJECTED => 'Rejected',
        self::VALIDATED => 'Validated'
    ];
}
