# http

HTTP utilities for your web app.

## Summary

- [Installation](#installation)
- [API](#api)
    - [Information response](#information-response)
        - [Continue](#continue)
        - [Switching protocols](#switching-protocols)
        - [Processing](#processing)
        - [Early hints](#early-hints)
    - [Success](#success)
        - [Created](#created)
        - [Accepted](#accepted)
        - [Non-authoritative information](#non-authoritative-information)
        - [No content](#no-content)
        - [Reset content](#reset-content)
        - [Partial content](#partial-content)
        - [Multi-status](#multi-status)
        - [Already reported](#already-reported)
        - [Instance-manipulations used](#instance-manipulations-used)
    - [Redirection](#redirection)
        - [Multiple choices](#multiple-choices)
        - [Moved permanently](#moved-permanently)
        - [Found (moved temporarily)](#found-moved-temporarily)
        - [See other](#see-other)
        - [Not modified](#not-modified)
        - [Use proxy](#use-proxy)
        - [Switch proxy](#switch-proxy)
        - [Temporary redirect](#temporary-redirect)
        - [Permanent redirect](#permanent-redirect)
    - [Error](#error)
        - [Bad request](#bad-request)
        - [Unauthorized](#unauthorized)
        - [Payment required](#payment-required)
        - [Forbidden](#forbidden)
        - [Not found](#not-found)
        - [Method not allowed](#method-not-allowed)
        - [Not acceptable](#not-acceptable)
        - [Proxy authentication required](#proxy-authentication-required)
        - [Request timeout](#request-timeout)
        - [Conflict](#conflict)
        - [Gone](#gone)
        - [Length required](#length-required)
        - [Precondition failed](#precondition-failed)
        - [Payload too large](#payload-too-large)
        - [URI too long](#uri-too-long)
        - [Unsupported media type](#unsupported-media-type)
        - [Range not satisfiable](#range-not-satisfiable)
        - [Expectation failed](#expectation-failed)
        - [I'm a teapot](#im-a-teapot)
        - [Misdirected request](#misdirected-request)
        - [Unprocessable entity](#unprocessable-entity)
        - [Locked](#locked)
        - [Failed dependency](#failed-dependency)
        - [Too early](#too-early)
        - [Upgrade required](#upgrade-required)
        - [Precondition required](#precondition-failed)
        - [Too many requests](#too-many-requests)
        - [Request header fields too large](#request-header-fields-too-large)
        - [Unavailable for legal reasons](#unavailable-for-legal-reasons)
    - [Server error](#server-error)
        - [Internal server error](#internal-server-error)
        - [Not implemented](#not-implemented)
        - [Bad gateway](#bad-gateway)
        - [Service unavailable](#service-unavailable)
        - [Gateway timeout](#gateway-timeout)
        - [Http version not supported](#http-version-not-supported)
        - [Variant also negotiates](#variant-also-negotiates)
        - [Insufficient storage](#insufficient-storage)
        - [Loop detected](#loop-detected)
        - [Not extended](#not-extended)
        - [Network authentication required](#network-authentication-required)
- [Contributing](#contributing)
- [License](#license)


## Installation

```console
$ composer require folded/http
```

[:arrow_up: Back to summary](#summary).

## API

[:arrow_up: Back to summary](#summary).

### Information response

[:arrow_up: Back to summary](#summary).

#### Continue

```php
<?php

use Http\Information;

echo Information::CONTINUE; // 100
```

[:arrow_up: Back to summary](#summary).

#### Switching protocols

```php
<?php

use Http\Information;

echo Information::SWITCHING_PROTOCOLS; // 101
```

[:arrow_up: Back to summary](#summary).

#### Processing

```php
<?php

use Http\Information;

echo Information::PROCESSING; // 102
```

[:arrow_up: Back to summary](#summary).

#### Early hints

```php
<?php

use Http\Information;

echo Information::EARLY_HINTS; // 103
```

[:arrow_up: Back to summary](#summary).

### Success

```php
<?php

use Http\Success;

echo Success::OK; // 200
```

[:arrow_up: Back to summary](#summary).

#### Created

```php
<?php

use Http\Success;

echo Success::CREATED; // 201
```

[:arrow_up: Back to summary](#summary).

#### Accepted

```php
<?php

use Http\Success;

echo Success::ACCEPTED; // 202
```

[:arrow_up: Back to summary](#summary).

#### Non-authoritative information

```php
<?php

use Http\Success;

echo Success::NON_AUTHORITATIVE_INFORMATION; // 203
```

[:arrow_up: Back to summary](#summary).

#### No content

```php
<?php

use Http\Success;

echo Success::NO_CONTENT; // 204
```

[:arrow_up: Back to summary](#summary).

#### Reset content

```php
<?php

use Http\Success;

echo Success::RESET_CONTENT; // 205
```

[:arrow_up: Back to summary](#summary).

#### Partial content

```php
<?php

use Http\Success;

echo Success::PARTIAL_CONTENT; // 206
```

[:arrow_up: Back to summary](#summary).

#### Multi-status

```php
<?php

use Http\Success;

echo Success::MULTI_STATUS; // 207
```

[:arrow_up: Back to summary](#summary).

#### Already reported

```php
<?php

use Http\Success;

echo Success::ALREADY_REPORTED; // 208
```

[:arrow_up: Back to summary](#summary).

#### Instance-manipulations used

```php
<?php

use Http\Success;

echo Success::IM_USED; // 226
```

[:arrow_up: Back to summary](#summary).

### Redirection

[:arrow_up: Back to summary](#summary).

#### Multiple choices

```php
<?php

use Http\Redirection;

echo Redirection::MULTIPLE_CHOICES; // 300
```

[:arrow_up: Back to summary](#summary).

#### Moved permanently

```php
<?php

use Http\Redirection;

echo Redirection::MOVED_PERMANENTLY; // 301
```

[:arrow_up: Back to summary](#summary).

#### Found (moved temporarily)

```php
<?php

use Http\Redirection;

echo Redirection::FOUND;                // 302
echo Redirection::MOVED_TEMPORARILY;    // 302
```

[:arrow_up: Back to summary](#summary).

#### See other

```php
<?php

use Http\Redirection;

echo Redirection::SEE_OTHER; // 303
```

[:arrow_up: Back to summary](#summary).

#### Not modified

```php
<?php

use Http\Redirection;

echo Redirection::NOT_MODIFIED; // 304
```

[:arrow_up: Back to summary](#summary).

#### Use proxy

```php
<?php

use Http\Redirection;

echo Redirection::USE_PROXY; // 305
```

[:arrow_up: Back to summary](#summary).

#### Switch proxy

```php
<?php

use Http\Redirection;

echo Redirection::SWITCH_PROXY; // 306
```

[:arrow_up: Back to summary](#summary).

#### Temporary redirect

```php
<?php

use Http\Redirection;

echo Redirection::TEMPORARY_REDIRECT; // 307
```

[:arrow_up: Back to summary](#summary).

#### Permanent redirect

```php
<?php

use Http\Redirection;

echo Redirection::PERMANENT_REDIRECT; // 308
```

[:arrow_up: Back to summary](#summary).

### Error

[:arrow_up: Back to summary](#summary).

#### Bad request

```php
<?php

use Http\Error;

echo Error::BAD_REQUEST; // 400
```

[:arrow_up: Back to summary](#summary).

#### Unauthorized

```php
<?php

use Http\Error;

echo Error::UNAUTHORIZED; // 401
```

[:arrow_up: Back to summary](#summary).

#### Payment required

```php
<?php

use Http\Error;

echo Error::PAYMENT_REQUIRED; // 402
```

[:arrow_up: Back to summary](#summary).

#### Forbidden

```php
<?php

use Http\Error;

echo Error::FORBIDDEN; // 403
```

[:arrow_up: Back to summary](#summary).

#### Not found

```php
<?php

use Http\Error;

echo Error::NOT_FOUND; // 404
```

[:arrow_up: Back to summary](#summary).

#### Method not allowed

```php
<?php

use Http\Error;

echo Error::METHOD_NOT_ALLOWED; // 405
```

[:arrow_up: Back to summary](#summary).

#### Not acceptable

```php
<?php

use Http\Error;

echo Error::NOT_ACCEPTABLE; // 406
```

[:arrow_up: Back to summary](#summary).

#### Proxy authentication required

```php
<?php

use Http\Error;

echo Error::PROXY_AUTHENTICATION_REQUIRED; // 407
```

[:arrow_up: Back to summary](#summary).

#### Request timeout

```php
<?php

use Http\Error;

echo Error::REQUEST_TIMEOUT; // 408
```

[:arrow_up: Back to summary](#summary).

#### Conflict

```php
<?php

use Http\Error;

echo Error::CONFLICT; // 409
```

[:arrow_up: Back to summary](#summary).

#### Gone

```php
<?php

use Http\Error;

echo Error::GONE; // 410
```

[:arrow_up: Back to summary](#summary).

#### Length required

```php
<?php

use Http\Error;

echo Error::LENGTH_REQUIRED; // 411
```

[:arrow_up: Back to summary](#summary).

#### Precondition failed

```php
<?php

use Http\Error;

echo Error::PRECONDITION_FAILED; // 412
```

[:arrow_up: Back to summary](#summary).

#### Payload too large

```php
<?php

use Http\Error;

echo Error::PAYLOAD_TOO_LARGE; // 413
```

[:arrow_up: Back to summary](#summary).

#### URI too long

```php
<?php

use Http\Error;

echo Error::URI_TOO_LONG; // 414
```

[:arrow_up: Back to summary](#summary).

#### Unsupported media type

```php
<?php

use Http\Error;

echo Error::UNSUPPORTED_MEDIA_TYPE; // 415
```

[:arrow_up: Back to summary](#summary).

#### Range not satisfiable

```php
<?php

use Http\Error;

echo Error::RANGE_NOT_SATISFIABLE; // 416
```

[:arrow_up: Back to summary](#summary).

#### Expectation failed

```php
<?php

use Http\Error;

echo Error::EXPECTATION_FAILED; // 417
```

[:arrow_up: Back to summary](#summary).

#### I'm a teapot

```php
<?php

use Http\Error;

echo Error::IM_A_TEAPOT; // 418
```

[:arrow_up: Back to summary](#summary).

#### Misdirected request

```php
<?php

use Http\Error;

echo Error::MISDIRECTED_REQUEST; // 419
```

[:arrow_up: Back to summary](#summary).

#### Unprocessable entity

```php
<?php

use Http\Error;

echo Error::UNPROCESSABLE_ENTITY; // 422
```

[:arrow_up: Back to summary](#summary).

#### Locked

```php
<?php

use Http\Error;

echo Error::LOCKED; // 423
```

[:arrow_up: Back to summary](#summary).

#### Failed dependency

```php
<?php

use Http\Error;

echo Error::FAILED_DEPENDENCY; // 424
```

[:arrow_up: Back to summary](#summary).

#### Too early

```php
<?php

use Http\Error;

echo Error::TOO_EARLY; // 425
```

[:arrow_up: Back to summary](#summary).

#### Upgrade required

```php
<?php

use Http\Error;

echo Error::UPGRADE_REQUIRED; // 426
```

[:arrow_up: Back to summary](#summary).

#### Precondition required

```php
<?php

use Http\Error;

echo Error::PRECONDITION_REQUIRED; // 428
```

[:arrow_up: Back to summary](#summary).

#### Too many requests

```php
<?php

use Http\Error;

echo Error::TOO_MANY_REQUESTS; // 429
```

[:arrow_up: Back to summary](#summary).

#### Request header fields too large

```php
<?php

use Http\Error;

echo Error::REQUEST_HEADER_FIELDS_TOO_LARGE; // 431
```

[:arrow_up: Back to summary](#summary).

#### Unavailable for legal reasons

```php
<?php

use Http\Error;

echo Error::UNAVAILABLE_FOR_LEGAL_REASONS; // 451
```

[:arrow_up: Back to summary](#summary).

### Server error

[:arrow_up: Back to summary](#summary).

#### Internal server error

```php
<?php

use Http\ServerError;

echo ServerError::INTERNAL_SERVER_ERROR; // 500
```

[:arrow_up: Back to summary](#summary).

#### Not implemented

```php
<?php

use Http\ServerError;

echo ServerError::NOT_IMPLEMENTED; // 501
```

[:arrow_up: Back to summary](#summary).

#### Bad gateway

```php
<?php

use Http\ServerError;

echo ServerError::BAD_GATEWAY; // 502
```

[:arrow_up: Back to summary](#summary).

#### Service unavailable

```php
<?php

use Http\ServerError;

echo ServerError::SERVICE_UNAVAILABLE; // 503
```

[:arrow_up: Back to summary](#summary).

#### Gateway timeout

```php
<?php

use Http\ServerError;

echo ServerError::GATEWAY_TIMEOUT; // 504
```

[:arrow_up: Back to summary](#summary).

#### Http version not supported

```php
<?php

use Http\ServerError;

echo ServerError::HTTP_VERSION_NOT_SUPPORTED; // 505
```

[:arrow_up: Back to summary](#summary).

#### Variant also negotiates

```php
<?php

use Http\ServerError;

echo ServerError::VARIANT_ALSO_NEGOTIATES; // 506
```

[:arrow_up: Back to summary](#summary).

#### Insufficient storage

```php
<?php

use Http\ServerError;

echo ServerError::INSUFFICIENT_STORAGE; // 507
```

[:arrow_up: Back to summary](#summary).

#### Loop detected

```php
<?php

use Http\ServerError;

echo ServerError::LOOP_DETECTED; // 508
```

[:arrow_up: Back to summary](#summary).

#### Not extended

```php
<?php

use Http\ServerError;

echo ServerError::NOT_EXTENDED; // 510
```

[:arrow_up: Back to summary](#summary).

#### Network authentication required

```php
<?php

use Http\ServerError;

echo ServerError::NETWORK_AUTHENTICATION_REQUIRED; // 511
```

[:arrow_up: Back to summary](#summary).

## Contributing

See [`CONTRIBUTING.md`](./CONTRIBUTING.md).

[:arrow_up: Back to summary](#summary).

## License

See [`LICENSE`](./LICENSE).

[:arrow_up: Back to summary](#summary).
