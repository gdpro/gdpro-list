<?php
namespace Gdpro\Listing;

/**
 * Class PaymentStatusListing
 *
 * This statuses are based on the paypal definition
 *
 * @package GdproListing
 */
class PaymentStatusListing extends AbstractListing
{
    /**
     * A German ELV payment is made using Express Checkout.
     */
    const CREATED = 1;

    /**
     * The payment has been completed, and the funds have been added
     * successfully to your account balance.
     */
    const COMPLETED = 2;

    /**
     * A reversal has been canceled. For example, you won a dispute with the
     * customer, and the funds for the transaction that was reversed have been
     * returned to you.
     */
    const CANCELED_REVERSAL = 3;

    /**
     * You denied the payment. This happens only if the payment was previously
     * pending because of possible reasons described for the pending_reason
     * variable or the Fraud_Management_Filters_x variable.
     */
    const DENIED = 4;

    /**
     * This authorization has expired and cannot be captured.
     */
    const EXPIRED = 5;

    /**
     * The payment has failed. This happens only if the payment was made from
     * your customer’s bank account.
     */
    const FAILED = 6;

    /**
     * The payment is pending. See pending_reason for more information.
     */
    const PENDING = 7;

    /**
     * You refunded the payment.
     */
    const REFUNDED = 8;

    /**
     * A payment was reversed due to a chargeback or other type of reversal.
     * The funds have been removed from your account balance and returned to
     * the buyer. The reason for the reversal is specified in the ReasonCode
     * element.
     */
    const REVERSED = 9;

    /**
     * This authorization has been voided.
     */
    const VOIDED = 10;

    protected $list = [
        self::CREATED => 'Created',
        self::COMPLETED => 'Completed',
        self::CANCELED_REVERSAL => 'Canceled reversal',
        self::DENIED => 'Denied',
        self::EXPIRED => 'Expired',
        self::FAILED => 'Failed',
        self::PENDING => 'Pending',
        self::REFUNDED => 'Refunded',
        self::REVERSED => 'Reversed',
        self::VOIDED => 'Voided',
    ];
}



