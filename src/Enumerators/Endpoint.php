<?php

namespace BubbaOps\HoalifePhp\Enumerators;

use BubbaOps\HoalifePhp\Exceptions\AccountException;
use BubbaOps\HoalifePhp\Exceptions\AssetException;
use BubbaOps\HoalifePhp\Exceptions\AuthorizationException;
use BubbaOps\HoalifePhp\Exceptions\CcrArticleException;
use BubbaOps\HoalifePhp\Exceptions\DeficiencyException;
use BubbaOps\HoalifePhp\Exceptions\EscalationException;
use BubbaOps\HoalifePhp\Exceptions\InspectionException;
use BubbaOps\HoalifePhp\Exceptions\NoteException;
use BubbaOps\HoalifePhp\Exceptions\PropertiesException;
use BubbaOps\HoalifePhp\Exceptions\SupplementalMailingAddressException;
use BubbaOps\HoalifePhp\Exceptions\UserException;
use BubbaOps\HoalifePhp\Exceptions\ViolationException;
use BubbaOps\HoalifePhp\Exceptions\ViolationTypeException;
use BubbaOps\HoalifePhp\Traits\Enums\HasValues;
use BubbaOps\HoalifePhp\Traits\Enums\IsInvokable;

/**
 * Enumeration of the various API Endpoints
 */
enum Endpoint: string
{
    use HasValues;
    use IsInvokable;

    /**
     * Accounts represent both Associations which are managed, and Management companies.
     *
     * This endpoint retrieves all Accounts accessible by the API key.
     */
    case ACCOUNTS = 'accounts';

    /**
     * Users with access to the given Account and any child accounts.
     *
     * This endpoint retrieves all Users accessible by the API key. If the API
     * key has access to multiple Accounts, all Users for all those accounts
     * will be returned. Scope Users to a specific Account by adding an
     * account_id query parameter. Users may have many authorizations to many
     * different accounts.
     */
    case USERS = 'users';

    /**
     * User Authorizations to the given Account and any child accounts.
     *
     * This endpoint retrieves all User Authorizations accessible by the API key.
     * If the API key has access to multiple Accounts, all User Authorizations
     * for all those accounts will be returned. Scope User Authorizations to a
     * specific Account by adding an account_id query parameter.
     */
    case AUTHORIZATIONS = 'users/authorizations';

    /**
     * Properties represent a property or unit in an Association.
     *
     * This endpoint retrieves all Properties accessible by the API key. If the
     * API key has access to multiple Accounts, all Properties for all those
     * accounts will be returned. Scope Properties to a specific Account by
     * adding an account_id query parameter.
     */
    case PROPERTIES = 'properties';

    /**
     * Supplemental mailing addresses for properties. The primary property
     * mailing address should be provided as Property data.
     *
     * This endpoint retrieves all Property Supplemental Mailing Addresses for
     * the given Property ID.
     *
     * This endpoint retrieves all Property Supplemental Mailing Addresses
     * accessible by the API key. If the API key has access to multiple Accounts,
     * all Properties for all those accounts will be returned. Scope Property
     * Supplemental Mailing Addresses to a specific Property by adding a
     * property_id query parameter.
     */
    case SUPPLEMENTAL_MAILING_ADDRESSES = 'properties/supplemental_mailing_addressses';

    /**
     * Assets represent a asset or common area in an association.
     *
     * This endpoint retrieves all Assets accessible by the API key. If the API
     * key has access to multiple Accounts, all Assets for all those accounts
     * will be returned. Scope Assets to a specific Account by adding an
     * account_id query parameter.
     */
    case ASSETS = 'assets';

    /**
     * CCR Articles represent a group of similar Violation Types an Association enforces.
     *
     * This endpoint retrieves all CCR Articles accessible by the API key. If
     * the API key has access to multiple Accounts, all CCR Articles for all
     * those accounts will be returned. Scope CCR Articles to a specific Account
     * by adding an account_id query parameter.
     */
    case CCR_ARTICLES = 'ccr_articles';

    /**
     * CCR Violation Types represent a rule that the Association enforces
     * and records violations for.
     *
     * This endpoint retrieves all CCR Violation Types accessible by the API key.
     * If the API key has access to multiple Accounts or CCR Violation Types,
     * all Violation Types for all those accounts will be returned. Scope
     * CCR Violation Types to a specific Account by adding an
     * account_id query parameter.
     */
    case CCR_VIOLATION_TYPES = 'ccr_violation_types';

    /**
     * Inspections represent an inspection of the
     * entire Association for Violations.
     *
     * NOTE: Not all violations belong to an inspection, as a violation
     * can be recorded in a one-off manner.
     *
     * This endpoint retrieves all Inspections accessible by the API key. If the
     * API key has access to multiple Accounts, all Inspections for all those
     * accounts will be returned. Scope Inspections to a specific Account by
     * adding an account_id query parameter.
     */
    case INSPECTIONS = 'inspections';

    /**
     * Violations represent a recorded infraction of a Violation Type
     * for given Property.
     *
     * This endpoint retrieves all Violations accessible by the API key. If the
     * API key has access to multiple Accounts, all Violations for all those
     * accounts will be returned. Scope Violations to a specific Account by
     * adding an account_id query parameter.
     */
    case VIOLATIONS = 'violations';

    /**
     * Escalations represent a group of Violations which have contributed to
     * exceeding the Account's escalation_threshold.
     *
     * This endpoint retrieves all Escalations accessible by the API key. If the
     * API key has access to multiple Accounts, all Escalations for all those
     * accounts will be returned. Scope Escalations to a specific Account by
     * adding an account_id query parameter.
     */
    case ESCALATIONS = 'escalations';

    /**
     * Deficiencies represent a recorded flaw for a given Asset.
     *
     * This endpoint retrieves all Deficiencies accessible by the API key. If
     * the API key has access to multiple Accounts, all Deficiencies for all
     * those accounts will be returned. Scope Deficiencies to a specific Account
     * by adding an account_id query parameter.
     */
    case DEFICIENCIES = 'deficiencies';

    /**
     * Notes are attached to other data objects, including
     * property, escalation, and deficiency.
     */
    case NOTES = 'notes';

    /**
     * Get the exception associated with this Endpoint.
     */
    public function exception(string $message): \Exception
    {
        return match ($this) {
            self::ACCOUNTS => new AccountException($message),
            self::USERS => new UserException($message),
            self::AUTHORIZATIONS => new AuthorizationException($message),
            self::PROPERTIES => new PropertiesException($message),
            self::SUPPLEMENTAL_MAILING_ADDRESSES => new SupplementalMailingAddressException($message),
            self::ASSETS => new AssetException(),
            self::CCR_ARTICLES => new CcrArticleException($message),
            self::CCR_VIOLATION_TYPES => new ViolationTypeException($message),
            self::INSPECTIONS => new InspectionException($message),
            self::VIOLATIONS => new ViolationException($message),
            self::ESCALATIONS => new EscalationException($message),
            self::DEFICIENCIES => new DeficiencyException($message),
            self::NOTES => new NoteException($message),
        };
    }

    public function apiPath(): string
    {
        return "api/{$this->value}";
    }
}
