<?php

/*!
 * Copyright © 2020 Amin NAIRI
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Folded\Http\Information;

final class HttpInformationTest extends TestCase
{
    public final function testContinueRequest(): void
    {
        $this->assertEquals(Information::CONTINUE_REQUEST, 100);
    }

    public final function testSwitchingProtocols(): void
    {
        $this->assertEquals(Information::SWITCHING_PROTOCOLS, 101);
    }

    public final function testProcessing(): void
    {
        $this->assertEquals(Information::PROCESSING, 102);
    }

    public final function testEarlyHints(): void
    {
        $this->assertEquals(Information::EARLY_HINTS, 103);
    }
}
