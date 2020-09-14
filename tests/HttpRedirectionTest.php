<?php

/*!
 * Copyright © 2020 Amin NAIRI
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Folded\Http\Redirection;

final class HttpRedirectionTest extends TestCase
{
    public final function testMultipleChoices(): void
    {
        $this->assertEquals(Redirection::MULTIPLE_CHOICES, 300);
    }

    public final function testMovedPermanently(): void
    {
        $this->assertEquals(Redirection::MOVED_PERMANENTLY, 301);
    }

    public final function testFound(): void
    {
        $this->assertEquals(Redirection::FOUND, 302);
        $this->assertEquals(Redirection::MOVED_TEMPORARILY, 302);
    }

    public final function testSeeOther(): void
    {
        $this->assertEquals(Redirection::SEE_OTHER, 303);
    }

    public final function testNotModified(): void
    {
        $this->assertEquals(Redirection::NOT_MODIFIED, 304);
    }

    public final function testUseProxy(): void
    {
        $this->assertEquals(Redirection::USE_PROXY, 305);
    }

    public final function testSwitchProxy(): void
    {
        $this->assertEquals(Redirection::SWITCH_PROXY, 306);
    }

    public final function testTemporaryRedirect(): void
    {
        $this->assertEquals(Redirection::TEMPORARY_REDIRECT, 307);
    }

    public final function testPermanentRedirect(): void
    {
        $this->assertEquals(Redirection::PERMANENT_REDIRECT, 308);
    }
}
