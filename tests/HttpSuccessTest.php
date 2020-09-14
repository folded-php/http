<?php

/*!
 * Copyright © 2020 Amin NAIRI
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Folded\Http\Success;

final class HttpSuccessTest extends TestCase
{
    public final function testOk(): void
    {
        $this->assertEquals(Success::OK, 200);
    }

    public final function testCreated(): void
    {
        $this->assertEquals(Success::CREATED, 201);
    }

    public final function testAccepted(): void
    {
        $this->assertEquals(Success::ACCEPTED, 202);
    }

    public final function testNonAuthoritativeInformation(): void
    {
        $this->assertEquals(Success::NON_AUTHORITATIVE_INFORMATION, 203);
    }

    public final function testNoContent(): void
    {
        $this->assertEquals(Success::NO_CONTENT, 204);
    }

    public final function testResetContent(): void
    {
        $this->assertEquals(Success::RESET_CONTENT, 205);
    }

    public final function testPartialContent(): void
    {
        $this->assertEquals(Success::PARTIAL_CONTENT, 206);
    }

    public final function testMultiStatus(): void
    {
        $this->assertEquals(Success::MULTI_STATUS, 207);
    }

    public final function testAlreadyReported(): void
    {
        $this->assertEquals(Success::ALREADY_REPORTED, 208);
    }

    public final function testInstanceManipulationsUsed(): void
    {
        $this->assertEquals(Success::IM_USED, 226);
    }
}
