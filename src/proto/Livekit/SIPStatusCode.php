<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_sip.proto

namespace Livekit;

use UnexpectedValueException;

/**
 * Protobuf type <code>livekit.SIPStatusCode</code>
 */
class SIPStatusCode
{
    /**
     * Generated from protobuf enum <code>SIP_STATUS_UNKNOWN = 0;</code>
     */
    const SIP_STATUS_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_TRYING = 100;</code>
     */
    const SIP_STATUS_TRYING = 100;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_RINGING = 180;</code>
     */
    const SIP_STATUS_RINGING = 180;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_CALL_IS_FORWARDED = 181;</code>
     */
    const SIP_STATUS_CALL_IS_FORWARDED = 181;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_QUEUED = 182;</code>
     */
    const SIP_STATUS_QUEUED = 182;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_SESSION_PROGRESS = 183;</code>
     */
    const SIP_STATUS_SESSION_PROGRESS = 183;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_OK = 200;</code>
     */
    const SIP_STATUS_OK = 200;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_ACCEPTED = 202;</code>
     */
    const SIP_STATUS_ACCEPTED = 202;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_MOVED_PERMANENTLY = 301;</code>
     */
    const SIP_STATUS_MOVED_PERMANENTLY = 301;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_MOVED_TEMPORARILY = 302;</code>
     */
    const SIP_STATUS_MOVED_TEMPORARILY = 302;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_USE_PROXY = 305;</code>
     */
    const SIP_STATUS_USE_PROXY = 305;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_BAD_REQUEST = 400;</code>
     */
    const SIP_STATUS_BAD_REQUEST = 400;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_UNAUTHORIZED = 401;</code>
     */
    const SIP_STATUS_UNAUTHORIZED = 401;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_PAYMENT_REQUIRED = 402;</code>
     */
    const SIP_STATUS_PAYMENT_REQUIRED = 402;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_FORBIDDEN = 403;</code>
     */
    const SIP_STATUS_FORBIDDEN = 403;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_NOTFOUND = 404;</code>
     */
    const SIP_STATUS_NOTFOUND = 404;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_METHOD_NOT_ALLOWED = 405;</code>
     */
    const SIP_STATUS_METHOD_NOT_ALLOWED = 405;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_NOT_ACCEPTABLE = 406;</code>
     */
    const SIP_STATUS_NOT_ACCEPTABLE = 406;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_PROXY_AUTH_REQUIRED = 407;</code>
     */
    const SIP_STATUS_PROXY_AUTH_REQUIRED = 407;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_REQUEST_TIMEOUT = 408;</code>
     */
    const SIP_STATUS_REQUEST_TIMEOUT = 408;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_CONFLICT = 409;</code>
     */
    const SIP_STATUS_CONFLICT = 409;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_GONE = 410;</code>
     */
    const SIP_STATUS_GONE = 410;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_REQUEST_ENTITY_TOO_LARGE = 413;</code>
     */
    const SIP_STATUS_REQUEST_ENTITY_TOO_LARGE = 413;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_REQUEST_URI_TOO_LONG = 414;</code>
     */
    const SIP_STATUS_REQUEST_URI_TOO_LONG = 414;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_UNSUPPORTED_MEDIA_TYPE = 415;</code>
     */
    const SIP_STATUS_UNSUPPORTED_MEDIA_TYPE = 415;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_REQUESTED_RANGE_NOT_SATISFIABLE = 416;</code>
     */
    const SIP_STATUS_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_BAD_EXTENSION = 420;</code>
     */
    const SIP_STATUS_BAD_EXTENSION = 420;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_EXTENSION_REQUIRED = 421;</code>
     */
    const SIP_STATUS_EXTENSION_REQUIRED = 421;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_INTERVAL_TOO_BRIEF = 423;</code>
     */
    const SIP_STATUS_INTERVAL_TOO_BRIEF = 423;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_TEMPORARILY_UNAVAILABLE = 480;</code>
     */
    const SIP_STATUS_TEMPORARILY_UNAVAILABLE = 480;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_CALL_TRANSACTION_DOES_NOT_EXISTS = 481;</code>
     */
    const SIP_STATUS_CALL_TRANSACTION_DOES_NOT_EXISTS = 481;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_LOOP_DETECTED = 482;</code>
     */
    const SIP_STATUS_LOOP_DETECTED = 482;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_TOO_MANY_HOPS = 483;</code>
     */
    const SIP_STATUS_TOO_MANY_HOPS = 483;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_ADDRESS_INCOMPLETE = 484;</code>
     */
    const SIP_STATUS_ADDRESS_INCOMPLETE = 484;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_AMBIGUOUS = 485;</code>
     */
    const SIP_STATUS_AMBIGUOUS = 485;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_BUSY_HERE = 486;</code>
     */
    const SIP_STATUS_BUSY_HERE = 486;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_REQUEST_TERMINATED = 487;</code>
     */
    const SIP_STATUS_REQUEST_TERMINATED = 487;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_NOT_ACCEPTABLE_HERE = 488;</code>
     */
    const SIP_STATUS_NOT_ACCEPTABLE_HERE = 488;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_INTERNAL_SERVER_ERROR = 500;</code>
     */
    const SIP_STATUS_INTERNAL_SERVER_ERROR = 500;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_NOT_IMPLEMENTED = 501;</code>
     */
    const SIP_STATUS_NOT_IMPLEMENTED = 501;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_BAD_GATEWAY = 502;</code>
     */
    const SIP_STATUS_BAD_GATEWAY = 502;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_SERVICE_UNAVAILABLE = 503;</code>
     */
    const SIP_STATUS_SERVICE_UNAVAILABLE = 503;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_GATEWAY_TIMEOUT = 504;</code>
     */
    const SIP_STATUS_GATEWAY_TIMEOUT = 504;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_VERSION_NOT_SUPPORTED = 505;</code>
     */
    const SIP_STATUS_VERSION_NOT_SUPPORTED = 505;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_MESSAGE_TOO_LARGE = 513;</code>
     */
    const SIP_STATUS_MESSAGE_TOO_LARGE = 513;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_GLOBAL_BUSY_EVERYWHERE = 600;</code>
     */
    const SIP_STATUS_GLOBAL_BUSY_EVERYWHERE = 600;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_GLOBAL_DECLINE = 603;</code>
     */
    const SIP_STATUS_GLOBAL_DECLINE = 603;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_GLOBAL_DOES_NOT_EXIST_ANYWHERE = 604;</code>
     */
    const SIP_STATUS_GLOBAL_DOES_NOT_EXIST_ANYWHERE = 604;
    /**
     * Generated from protobuf enum <code>SIP_STATUS_GLOBAL_NOT_ACCEPTABLE = 606;</code>
     */
    const SIP_STATUS_GLOBAL_NOT_ACCEPTABLE = 606;

    private static $valueToName = [
        self::SIP_STATUS_UNKNOWN => 'SIP_STATUS_UNKNOWN',
        self::SIP_STATUS_TRYING => 'SIP_STATUS_TRYING',
        self::SIP_STATUS_RINGING => 'SIP_STATUS_RINGING',
        self::SIP_STATUS_CALL_IS_FORWARDED => 'SIP_STATUS_CALL_IS_FORWARDED',
        self::SIP_STATUS_QUEUED => 'SIP_STATUS_QUEUED',
        self::SIP_STATUS_SESSION_PROGRESS => 'SIP_STATUS_SESSION_PROGRESS',
        self::SIP_STATUS_OK => 'SIP_STATUS_OK',
        self::SIP_STATUS_ACCEPTED => 'SIP_STATUS_ACCEPTED',
        self::SIP_STATUS_MOVED_PERMANENTLY => 'SIP_STATUS_MOVED_PERMANENTLY',
        self::SIP_STATUS_MOVED_TEMPORARILY => 'SIP_STATUS_MOVED_TEMPORARILY',
        self::SIP_STATUS_USE_PROXY => 'SIP_STATUS_USE_PROXY',
        self::SIP_STATUS_BAD_REQUEST => 'SIP_STATUS_BAD_REQUEST',
        self::SIP_STATUS_UNAUTHORIZED => 'SIP_STATUS_UNAUTHORIZED',
        self::SIP_STATUS_PAYMENT_REQUIRED => 'SIP_STATUS_PAYMENT_REQUIRED',
        self::SIP_STATUS_FORBIDDEN => 'SIP_STATUS_FORBIDDEN',
        self::SIP_STATUS_NOTFOUND => 'SIP_STATUS_NOTFOUND',
        self::SIP_STATUS_METHOD_NOT_ALLOWED => 'SIP_STATUS_METHOD_NOT_ALLOWED',
        self::SIP_STATUS_NOT_ACCEPTABLE => 'SIP_STATUS_NOT_ACCEPTABLE',
        self::SIP_STATUS_PROXY_AUTH_REQUIRED => 'SIP_STATUS_PROXY_AUTH_REQUIRED',
        self::SIP_STATUS_REQUEST_TIMEOUT => 'SIP_STATUS_REQUEST_TIMEOUT',
        self::SIP_STATUS_CONFLICT => 'SIP_STATUS_CONFLICT',
        self::SIP_STATUS_GONE => 'SIP_STATUS_GONE',
        self::SIP_STATUS_REQUEST_ENTITY_TOO_LARGE => 'SIP_STATUS_REQUEST_ENTITY_TOO_LARGE',
        self::SIP_STATUS_REQUEST_URI_TOO_LONG => 'SIP_STATUS_REQUEST_URI_TOO_LONG',
        self::SIP_STATUS_UNSUPPORTED_MEDIA_TYPE => 'SIP_STATUS_UNSUPPORTED_MEDIA_TYPE',
        self::SIP_STATUS_REQUESTED_RANGE_NOT_SATISFIABLE => 'SIP_STATUS_REQUESTED_RANGE_NOT_SATISFIABLE',
        self::SIP_STATUS_BAD_EXTENSION => 'SIP_STATUS_BAD_EXTENSION',
        self::SIP_STATUS_EXTENSION_REQUIRED => 'SIP_STATUS_EXTENSION_REQUIRED',
        self::SIP_STATUS_INTERVAL_TOO_BRIEF => 'SIP_STATUS_INTERVAL_TOO_BRIEF',
        self::SIP_STATUS_TEMPORARILY_UNAVAILABLE => 'SIP_STATUS_TEMPORARILY_UNAVAILABLE',
        self::SIP_STATUS_CALL_TRANSACTION_DOES_NOT_EXISTS => 'SIP_STATUS_CALL_TRANSACTION_DOES_NOT_EXISTS',
        self::SIP_STATUS_LOOP_DETECTED => 'SIP_STATUS_LOOP_DETECTED',
        self::SIP_STATUS_TOO_MANY_HOPS => 'SIP_STATUS_TOO_MANY_HOPS',
        self::SIP_STATUS_ADDRESS_INCOMPLETE => 'SIP_STATUS_ADDRESS_INCOMPLETE',
        self::SIP_STATUS_AMBIGUOUS => 'SIP_STATUS_AMBIGUOUS',
        self::SIP_STATUS_BUSY_HERE => 'SIP_STATUS_BUSY_HERE',
        self::SIP_STATUS_REQUEST_TERMINATED => 'SIP_STATUS_REQUEST_TERMINATED',
        self::SIP_STATUS_NOT_ACCEPTABLE_HERE => 'SIP_STATUS_NOT_ACCEPTABLE_HERE',
        self::SIP_STATUS_INTERNAL_SERVER_ERROR => 'SIP_STATUS_INTERNAL_SERVER_ERROR',
        self::SIP_STATUS_NOT_IMPLEMENTED => 'SIP_STATUS_NOT_IMPLEMENTED',
        self::SIP_STATUS_BAD_GATEWAY => 'SIP_STATUS_BAD_GATEWAY',
        self::SIP_STATUS_SERVICE_UNAVAILABLE => 'SIP_STATUS_SERVICE_UNAVAILABLE',
        self::SIP_STATUS_GATEWAY_TIMEOUT => 'SIP_STATUS_GATEWAY_TIMEOUT',
        self::SIP_STATUS_VERSION_NOT_SUPPORTED => 'SIP_STATUS_VERSION_NOT_SUPPORTED',
        self::SIP_STATUS_MESSAGE_TOO_LARGE => 'SIP_STATUS_MESSAGE_TOO_LARGE',
        self::SIP_STATUS_GLOBAL_BUSY_EVERYWHERE => 'SIP_STATUS_GLOBAL_BUSY_EVERYWHERE',
        self::SIP_STATUS_GLOBAL_DECLINE => 'SIP_STATUS_GLOBAL_DECLINE',
        self::SIP_STATUS_GLOBAL_DOES_NOT_EXIST_ANYWHERE => 'SIP_STATUS_GLOBAL_DOES_NOT_EXIST_ANYWHERE',
        self::SIP_STATUS_GLOBAL_NOT_ACCEPTABLE => 'SIP_STATUS_GLOBAL_NOT_ACCEPTABLE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

