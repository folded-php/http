<?php

/*!
 * Copyright © 2020 Amin NAIRI
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Http\Error;

final class HttpErrorTest extends TestCase
{
    public final function testBadRequest(): void
    {
        $this->assertEquals(Error::BAD_REQUEST, 400);
    }

    public final function testUnauthorized(): void
    {
        $this->assertEquals(Error::UNAUTHORIZED, 401);
    }

    public final function testPaymentRequired(): void
    {
        $this->assertEquals(Error::PAYMENT_REQUIRED, 402);
    }

    public final function testForbidden(): void
    {
        $this->assertEquals(Error::FORBIDDEN, 403);
    }

    public final function testNotFound(): void
    {
        $this->assertEquals(Error::NOT_FOUND, 404);
    }

    public final function testMethodNotAllowed(): void
    {
        $this->assertEquals(Error::METHOD_NOT_ALLOWED, 405);
    }

    public final function testNotAcceptable(): void
    {
        $this->assertEquals(Error::NOT_ACCEPTABLE, 406);
    }

    public final function testProxyAuthenticationRequired(): void
    {
        $this->assertEquals(Error::PROXY_AUTHENTICATION_REQUIRED, 407);
    }

    public final function testRequestTimeout(): void
    {
        $this->assertEquals(Error::REQUEST_TIMEOUT, 408);
    }

    public final function testConflict(): void
    {
        $this->assertEquals(Error::CONFLICT, 409);
    }

    public final function testGone(): void
    {
        $this->assertEquals(Error::GONE, 410);
    }

    public final function testLengthRequired(): void
    {
        $this->assertEquals(Error::LENGTH_REQUIRED, 411);
    }

    public final function testPreconditionFailed(): void
    {
        $this->assertEquals(Error::PRECONDITION_FAILED, 412);
    }

    public final function testPayloadTooLarge(): void
    {
        $this->assertEquals(Error::PAYLOAD_TOO_LARGE, 413);
    }

    public final function testUriTooLong(): void
    {
        $this->assertEquals(Error::URI_TOO_LONG, 414);
    }

    public final function testUnsupportedMediaType(): void
    {
        $this->assertEquals(Error::UNSUPPORTED_MEDIA_TYPE, 415);
    }

    public final function testRangeNotSatisfiable(): void
    {
        $this->assertEquals(Error::RANGE_NOT_SATISFIABLE, 416);
    }

    public final function testExpectationFailed(): void
    {
        $this->assertEquals(Error::EXPECTATION_FAILED, 417);
    }

    public final function testImATeaport(): void
    {
        $this->assertEquals(Error::IM_A_TEAPOT, 418);
    }

    public final function testMisdirectedRequest(): void
    {
        $this->assertEquals(Error::MISDIRECTED_REQUEST, 421);
    }

    public final function testUnprocessableEntity(): void
    {
        $this->assertEquals(Error::UNPROCESSABLE_ENTITY, 422);
    }

    public final function testLocked(): void
    {
        $this->assertEquals(Error::LOCKED, 423);
    }

    public final function testFailedDependency(): void
    {
        $this->assertEquals(Error::FAILED_DEPENDENCY, 424);
    }

    public final function testTooEearly(): void
    {
        $this->assertEquals(Error::TOO_EARLY, 425);
    }

    public final function testUpgradeRequired(): void
    {
        $this->assertEquals(Error::UPGRADE_REQUIRED, 426);
    }

    public final function testPreconditionRequired(): void
    {
        $this->assertEquals(Error::PRECONDITION_REQUIRED, 428);
    }

    public final function testTooManyRequests(): void
    {
        $this->assertEquals(Error::TOO_MANY_REQUESTS, 429);
    }

    public final function testRequestHeaderFieldsTooLarge(): void
    {
        $this->assertEquals(Error::REQUEST_HEADER_FIELDS_TOO_LARGE, 431);
    }

    public final function testUnavailableForLegalReasons(): void
    {
        $this->assertEquals(Error::UNAVAILABLE_FOR_LEGAL_REASONS, 451);
    }
}
