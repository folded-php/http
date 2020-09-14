<?php

/*!
 * Copyright © 2020 Amin NAIRI
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Folded\Http\ServerError;

final class HttpServerErrorTest extends TestCase
{
    public final function testInternalServerError(): void
    {
        $this->assertEquals(ServerError::INTERNAL_SERVER_ERROR, 500);
    }

    public final function testNotImplemented(): void
    {
        $this->assertEquals(ServerError::NOT_IMPLEMENTED, 501);
    }

    public final function testBadGateway(): void
    {
        $this->assertEquals(ServerError::BAD_GATEWAY, 502);
    }

    public final function testServiceUnavailable(): void
    {
        $this->assertEquals(ServerError::SERVICE_UNAVAILABLE, 503);
    }

    public final function testGatewayTimeout(): void
    {
        $this->assertEquals(ServerError::GATEWAY_TIMEOUT, 504);
    }

    public final function testHttpVerisonNotSupported(): void
    {
        $this->assertEquals(ServerError::HTTP_VERSION_NOT_SUPPORTED, 505);
    }

    public final function testVariantAlsoNegotiates(): void
    {
        $this->assertEquals(ServerError::VARIANT_ALSO_NEGOTIATES, 506);
    }

    public final function testInsufficientStorage(): void
    {
        $this->assertEquals(ServerError::INSUFFICIENT_STORAGE, 507);
    }

    public final function testLoopDetected(): void
    {
        $this->assertEquals(ServerError::LOOP_DETECTED, 508);
    }

    public final function testNotExtended(): void
    {
        $this->assertEquals(ServerError::NOT_EXTENDED, 510);
    }

    public final function testNetworkAuthenticationRequired(): void
    {
        $this->assertEquals(ServerError::NETWORK_AUTHENTICATION_REQUIRED, 511);
    }
}
