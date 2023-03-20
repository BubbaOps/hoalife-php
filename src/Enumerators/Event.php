<?php

namespace BubbaOps\HoalifePhp\Enumerators;

use BubbaOps\HoalifePhp\Traits\Enums\HasValues;
use BubbaOps\HoalifePhp\Traits\Enums\IsInvokable;

enum Event: string
{
    use HasValues;
    use IsInvokable;

    /**
     * Occurs when an account is created.
     */
    case ACCOUNT_CREATE = 'account.create';

    /**
     * Occurs when an account is updated.
     */
    case ACCOUNT_UPDATE = 'account.update';

    /**
     * Occurs when an account is destroyed.
     */
    case ACCOUNT_DESTROY = 'account.destroy';

    /**
     * Occurs when a
     */
    case CCR_ARTICLE_CREATE = 'ccr.article.create';

    /**
     * Occurs when a
     */
    case CCR_ARTICLE_UPDATE = 'ccr.article.update';

    /**
     * Occurs when a
     */
    case CCR_ARTICLE_DESTROY = 'ccr.article.destroy';

    /**
     * Occurs when a
     */
    case CCR_VIOLATION_TYPE_CREATE = 'ccr.violation_type.create';

    /**
     * Occurs when a
     */
    case CCR_VIOLATION_TYPE_UPDATE = 'ccr.violation_type.update';

    /**
     * Occurs when a
     */
    case CCR_VIOLATION_TYPE_DESTROY = 'ccr.violation_type.destroy';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_CREATE = 'inspections.violation.create';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_CURE_REMINDER = 'inspections.violation.cure_reminder';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_INDIVIDUAL_CREATE = 'inspections.violation.individual_create';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_DELIVERY_CREATE = 'inspections.violation_delivery.create';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_DELIVERY_SENT = 'inspections.violation_delivery.sent';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_DELIVERY_FAILED = 'inspections.violation_delivery.failed';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_RESPONSE_CREATE = 'inspections.violation_response.create';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_TAG_ADDED = 'inspections.violation.tag.added';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_TAG_REMOVED = 'inspections.violation.tag.removed';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_CLOSED = 'inspections.violation.closed';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_REGRESSION = 'inspections.violation.regression';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_UPDATE = 'inspections.violation.update';

    /**
     * Occurs when a
     */
    case INSPECTIONS_VIOLATION_DESTROY = 'inspections.violation.destroy';

    /**
     * Occurs when a
     */
    case INSPECTION_COMPLETE = 'inspection.complete';

    /**
     * Occurs when a
     */
    case INSPECTION_CREATE = 'inspection.create';

    /**
     * Occurs when a
     */
    case INSPECTION_INSPECTION_REMINDER = 'inspection.inspection_reminder';

    /**
     * Occurs when a
     */
    case INSPECTIONS_ESCALATION_CREATE = 'inspections.escalation.create';

    /**
     * Occurs when a
     */
    case INSPECTIONS_ESCALATION_SNOOZED = 'inspections.escalation.snoozed';

    /**
     * Occurs when a
     */
    case INSPECTIONS_ESCALATION_SNOOZE_EXPIRED = 'inspections.escalation.snooze_expired';

    /**
     * Occurs when a
     */
    case INSPECTIONS_ESCALATION_RESOLVE = 'inspections.escalation.resolve';

    /**
     * Occurs when a
     */
    case INSPECTIONS_ESCALATION_NOTE_CREATE = 'inspections.escalation.note.create';

    /**
     * Occurs when a
     */
    case INSPECTIONS_ESCALATIONS_LETTER_CREATE = 'inspections.escalations.letter.create';

    /**
     * Occurs when a
     */
    case INSPECTIONS_SUGGESTED_VIOLATION_CREATE = 'inspections.suggested_violation.create';

    /**
     * Occurs when a
     */
    case INSPECTIONS_SUGGESTED_DEFICIENCY_CREATE = 'inspections.suggested_deficiency.create';

    /**
     * Occurs when a
     */
    case PROPERTY_CREATE = 'property.create';

    /**
     * Occurs when a
     */
    case PROPERTY_UPDATE = 'property.update';

    /**
     * Occurs when a
     */
    case PROPERTY_DESTROY = 'property.destroy';

    /**
     * Occurs when a
     */
    case PROPERTY_NOTE_CREATE = 'property.note.create';

    /**
     * Occurs when a
     */
    case PROPERTY_TAG_ADDED = 'property.tag.added';

    /**
     * Occurs when a
     */
    case PROPERTY_TAG_REMOVED = 'property.tag.removed';

    /**
     * Occurs when a
     */
    case PROPERTIES_OWNERSHIP_CHANGE_SUGGESTED = 'properties.ownership_change_suggested';

    /**
     * Occurs when a
     */
    case PROPERTIES_OWNERSHIP_CHANGE = 'properties.ownership_change';

    /**
     * Occurs when a
     */
    case INSPECTIONS_DEFICIENCY_CREATE = 'inspections.deficiency.create';

    /**
     * Occurs when a
     */
    case INSPECTIONS_DEFICIENCY_RESOLVE = 'inspections.deficiency.resolve';

    /**
     * Occurs when a
     */
    case INSPECTIONS_DEFICIENCY_SNOOZED = 'inspections.deficiency.snoozed';

    /**
     * Occurs when a
     */
    case INSPECTIONS_DEFICIENCY_SNOOZE_EXPIRED = 'inspections.deficiency.snooze_expired';

    /**
     * Occurs when a
     */
    case INSPECTIONS_DEFICIENCY_NOTE_CREATE = 'inspections.deficiency.note.create';

    /**
     * Occurs when a
     */
    case INSPECTIONS_DEFICIENCY_TAG_ADDED = 'inspections.deficiency.tag.added';

    /**
     * Occurs when a
     */
    case INSPECTIONS_DEFICIENCY_TAG_REMOVED = 'inspections.deficiency.tag.removed';

    /**
     * Occurs when a
     */
    case ASSET_CREATE = 'asset.create';

    /**
     * Occurs when a
     */
    case ASSET_UPDATE = 'asset.update';

    /**
     * Occurs when a
     */
    case ASSET_DESTROY = 'asset.destroy';

    /**
     * Occurs when a
     */
    case ASSET_TAG_ADDED = 'asset.tag.added';

    /**
     * Occurs when a
     */
    case ASSET_TAG_REMOVED = 'asset.tag.removed';

    /**
     * Occurs when a
     */
    case LETTERS_LETTER_DELIVERY_CREATE = 'letters.letter_delivery.create';

    /**
     * Occurs when a
     */
    case LETTERS_LETTER_DELIVERY_SENT = 'letters.letter_delivery.sent';

    /**
     * Occurs when a
     */
    case LETTERS_LETTER_DELIVERY_FAILED = 'letters.letter_delivery.failed';

    /**
     * Occurs when a
     */
    case CONVERSATION_CREATE = 'conversation.create';

    /**
     * Occurs when a
     */
    case CONVERSATIONS_SENT_MESSAGE_CREATE = 'conversations.sent_message.create';

    /**
     * Occurs when a
     */
    case CONVERSATIONS_RECEIVED_MESSAGE_CREATE = 'conversations.received_message.create';
}
