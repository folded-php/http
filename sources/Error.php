<?php

/*!
 * Copyright © 2020 Amin NAIRI
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

declare(strict_types=1);

namespace Http;

final class Error
{
    public const BAD_REQUEST = 400;
    public const CONFLICT = 409;
    public const EXPECTATION_FAILED = 417;
    public const FAILED_DEPENDENCY = 424;
    public const FORBIDDEN = 403;
    public const GONE = 410;
    public const IM_A_TEAPOT = 418;
    public const LENGTH_REQUIRED = 411;
    public const LOCKED = 423;
    public const METHOD_NOT_ALLOWED = 405;
    public const MISDIRECTED_REQUEST = 421;
    public const NOT_ACCEPTABLE = 406;
    public const NOT_FOUND = 404;
    public const PAYLOAD_TOO_LARGE = 413;
    public const PAYMENT_REQUIRED = 402;
    public const PRECONDITION_FAILED = 412;
    public const PRECONDITION_REQUIRED = 428;
    public const PROXY_AUTHENTICATION_REQUIRED = 407;
    public const RANGE_NOT_SATISFIABLE = 416;
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    public const REQUEST_TIMEOUT = 408;
    public const TOO_EARLY = 425;
    public const TOO_MANY_REQUESTS = 429;
    public const UNAUTHORIZED = 401;
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    public const UNPROCESSABLE_ENTITY = 422;
    public const UNSUPPORTED_MEDIA_TYPE = 415;
    public const UPGRADE_REQUIRED = 426;
    public const URI_TOO_LONG = 414;
}
