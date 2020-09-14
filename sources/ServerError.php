<?php

/**
 * Copyright 2020 Amin NAIRI
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR
 * OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */

declare(strict_types=1);

namespace Folded\Http;

final class ServerError
{
    public const BAD_GATEWAY = 502;
    public const GATEWAY_TIMEOUT = 504;
    public const HTTP_VERSION_NOT_SUPPORTED = 505;
    public const INSUFFICIENT_STORAGE = 507;
    public const INTERNAL_SERVER_ERROR = 500;
    public const LOOP_DETECTED = 508;
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;
    public const NOT_EXTENDED = 510;
    public const NOT_IMPLEMENTED = 501;
    public const SERVICE_UNAVAILABLE = 503;
    public const VARIANT_ALSO_NEGOTIATES = 506;
}
