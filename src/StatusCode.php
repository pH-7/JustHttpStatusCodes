<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021-2022, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

namespace PH7\JustHttp;

/**
 * @link All status codes - https://en.wikipedia.org/wiki/List_of_HTTP_status_codes
 */
final class StatusCode
{
    /**
     * Informational 1xx
     */
    public const CONTINUING = 100; // `CONTINUE` is a reserved keyword
    public const SWITCHING_PROTOCOLS = 101;
    public const PROCESSING = 102;
    public const EARLY_HINTS = 103;

    /**
     * Successful 2xx
     */
    public const OK = 200;
    public const CREATED = 201;
    public const ACCEPTED = 202;
    public const NON_AUTHORITATIVE_INFORMATION = 203;
    public const NO_CONTENT = 204;
    public const RESET_CONTENT = 205;
    public const PARTIAL_CONTENT = 206;
    public const MULTI_STATUS = 207;
    public const ALREADY_REPORTED = 208;
    public const IM_USED = 226;

    /**
     * Redirection 3xx
     */
    public const MULTIPLE_CHOICES = 300;
    public const MOVED_PERMANENTLY = 301;
    public const FOUND = 302;
    public const SEE_OTHER = 303;
    public const NOT_MODIFIED = 304;
    public const USE_PROXY = 305;
    public const TEMPORARY_REDIRECT = 307;
    public const PERMANENT_REDIRECT = 308;

    /**
     * Client Error 4xx
     */
    public const BAD_REQUEST = 400;
    public const UNAUTHORIZED = 401;
    public const PAYMENT_REQUIRED = 402;
    public const FORBIDDEN = 403;
    public const NOT_FOUND = 404;
    public const METHOD_NOT_ALLOWED = 405;
    public const NOT_ACCEPTABLE = 406;
    public const PROXY_AUTHENTICATION_REQUIRED = 407;
    public const REQUEST_TIMEOUT = 408;
    public const CONFLICT = 409;
    public const GONE = 410;
    public const LENGTH_REQUIRED = 411;
    public const PRECONDITION_FAILED = 412;
    public const PAYLOAD_TOO_LARGE = 413;
    public const URI_TOO_LONG = 414;
    public const UNSUPPORTED_MEDIA_TYPE = 415;
    public const REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    public const EXPECTATION_FAILED = 417;
    public const UNPROCESSABLE_ENTITY = 422;
    public const LOCKED = 423;
    public const FAILED_DEPENDENCY = 424;
    public const TOO_EARLY = 425;
    public const UPGRADE_REQUIRED = 426;
    public const PRECONDITION_REQUIRED = 428;
    public const TOO_MANY_REQUESTS = 429;
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * Server Error 5xx
     */
    public const INTERNAL_SERVER_ERROR = 500;
    public const NOT_IMPLEMENTED = 501;
    public const BAD_GATEWAY = 502;
    public const SERVICE_UNAVAILABLE = 503;
    public const GATEWAY_TIMEOUT = 504;
    public const VERSION_NOT_SUPPORTED = 505;
    public const VARIANT_ALSO_NEGOTIATES = 506;
    public const INSUFFICIENT_STORAGE = 507;
    public const LOOP_DETECTED = 508;
    public const BANDWIDTH_LIMIT_EXCEEDED = 509;
    public const NOT_EXTENDED = 510;
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;
}
