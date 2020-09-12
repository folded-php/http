# http

HTTP utilities for your web app.

## Installation

```console
$ composer require folded/http
```

## API

### Information response

#### Continue

```php
<?php

use Http\Information;

echo Information::CONTINUE; // 100
```

#### Switching protocols

```php
<?php

use Http\Information;

echo Information::SWITCHING_PROTOCOLS; // 101
```

#### Processing

```php
<?php

use Http\Information;

echo Information::PROCESSING; // 102
```

#### Early hints

```php
<?php

use Http\Information;

echo Information::EARLY_HINTS; // 103
```

### Success

```php
<?php

use Http\Success;

echo Success::OK; // 200
```

#### Created

```php
<?php

use Http\Success;

echo Success::CREATED; // 201
```

#### Accepted

```php
<?php

use Http\Success;

echo Success::ACCEPTED; // 202
```

#### Non-authoritative information

```php
<?php

use Http\Success;

echo Success::NON_AUTHORITATIVE_INFORMATION; // 203
```

#### No content

```php
<?php

use Http\Success;

echo Success::NO_CONTENT; // 204
```

#### Reset content

```php
<?php

use Http\Success;

echo Success::RESET_CONTENT; // 205
```

#### Partial content

```php
<?php

use Http\Success;

echo Success::PARTIAL_CONTENT; // 206
```

#### Multi-status

```php
<?php

use Http\Success;

echo Success::MULTI_STATUS; // 207
```

#### Already reported

```php
<?php

use Http\Success;

echo Success::ALREADY_REPORTED; // 208
```

#### Instance-manipulations used

```php
<?php

use Http\Success;

echo Success::IM_USED; // 226
```

### Redirection

#### Multiple choices

```php
<?php

use Http\Redirection;

echo Redirection::MULTIPLE_CHOICES; // 300
```

#### Moved permanently

```php
<?php

use Http\Redirection;

echo Redirection::MOVED_PERMANENTLY; // 301
```

#### Found (moved temporarily)

```php
<?php

use Http\Redirection;

echo Redirection::FOUND;                // 302
echo Redirection::MOVED_TEMPORARILY;    // 302
```

#### See other

```php
<?php

use Http\Redirection;

echo Redirection::SEE_OTHER; // 303
```

#### Not modified

```php
<?php

use Http\Redirection;

echo Redirection::NOT_MODIFIED; // 304
```

#### Use proxy

```php
<?php

use Http\Redirection;

echo Redirection::USE_PROXY; // 305
```

#### Switch proxy

```php
<?php

use Http\Redirection;

echo Redirection::SWITCH_PROXY; // 306
```

#### Temporary redirect

```php
<?php

use Http\Redirection;

echo Redirection::TEMPORARY_REDIRECT; // 307
```

#### Permanent redirect

```php
<?php

use Http\Redirection;

echo Redirection::PERMANENT_REDIRECT; // 308
```

### Error

#### Bad request

```php
<?php

use Http\Error;

echo Error::BAD_REQUEST; // 400
```

#### Unauthorized

```php
<?php

use Http\Error;

echo Error::UNAUTHORIZED; // 401
```

#### Payment required

```php
<?php

use Http\Error;

echo Error::PAYMENT_REQUIRED; // 402
```

#### Forbidden

```php
<?php

use Http\Error;

echo Error::FORBIDDEN; // 403
```

#### Not found

```php
<?php

use Http\Error;

echo Error::NOT_FOUND; // 404
```

#### Method not allowed

```php
<?php

use Http\Error;

echo Error::METHOD_NOT_ALLOWED; // 405
```

#### Not acceptable

```php
<?php

use Http\Error;

echo Error::NOT_ACCEPTABLE; // 406
```

#### Proxy authentication required

```php
<?php

use Http\Error;

echo Error::PROXY_AUTHENTICATION_REQUIRED; // 407
```

#### Request timeout

```php
<?php

use Http\Error;

echo Error::REQUEST_TIMEOUT; // 408
```

#### Conflict

```php
<?php

use Http\Error;

echo Error::CONFLICT; // 409
```

#### Gone

```php
<?php

use Http\Error;

echo Error::GONE; // 410
```

#### Length required

```php
<?php

use Http\Error;

echo Error::LENGTH_REQUIRED; // 411
```

#### Precondition failed

```php
<?php

use Http\Error;

echo Error::PRECONDITION_FAILED; // 412
```

#### Payload too large

```php
<?php

use Http\Error;

echo Error::PAYLOAD_TOO_LARGE; // 413
```

#### URI too long

```php
<?php

use Http\Error;

echo Error::URI_TOO_LONG; // 414
```

#### Unsupported media type

```php
<?php

use Http\Error;

echo Error::UNSUPPORTED_MEDIA_TYPE; // 415
```

#### Range not satisfiable

```php
<?php

use Http\Error;

echo Error::RANGE_NOT_SATISFIABLE; // 416
```

#### Expectation failed

```php
<?php

use Http\Error;

echo Error::EXPECTATION_FAILED; // 417
```

#### I'm a teapot

```php
<?php

use Http\Error;

echo Error::IM_A_TEAPOT; // 418
```

#### Misdirected request

```php
<?php

use Http\Error;

echo Error::MISDIRECTED_REQUEST; // 419
```

#### Unprocessable entity

```php
<?php

use Http\Error;

echo Error::UNPROCESSABLE_ENTITY; // 422
```

#### Locked

```php
<?php

use Http\Error;

echo Error::LOCKED; // 423
```

#### Failed dependency

```php
<?php

use Http\Error;

echo Error::FAILED_DEPENDENCY; // 424
```

#### Too early

```php
<?php

use Http\Error;

echo Error::TOO_EARLY; // 425
```

#### Upgrade required

```php
<?php

use Http\Error;

echo Error::UPGRADE_REQUIRED; // 426
```

#### Precondition required

```php
<?php

use Http\Error;

echo Error::PRECONDITION_REQUIRED; // 428
```

#### Too many requests

```php
<?php

use Http\Error;

echo Error::TOO_MANY_REQUESTS; // 429
```

#### Request header fields too large

```php
<?php

use Http\Error;

echo Error::REQUEST_HEADER_FIELDS_TOO_LARGE; // 431
```

#### Unavailable for legal reasons

```php
<?php

use Http\Error;

echo Error::UNAVAILABLE_FOR_LEGAL_REASONS; // 451
```

### Server error

#### Internal server error

```php
<?php

use Http\ServerError;

echo ServerError::INTERNAL_SERVER_ERROR; // 500
```

#### Not implemented

```php
<?php

use Http\ServerError;

echo ServerError::NOT_IMPLEMENTED; // 501
```

#### Bad gateway

```php
<?php

use Http\ServerError;

echo ServerError::BAD_GATEWAY; // 502
```

#### Service unavailable

```php
<?php

use Http\ServerError;

echo ServerError::SERVICE_UNAVAILABLE; // 503
```

#### Gateway timeout

```php
<?php

use Http\ServerError;

echo ServerError::GATEWAY_TIMEOUT; // 504
```

#### Http version not supported

```php
<?php

use Http\ServerError;

echo ServerError::HTTP_VERSION_NOT_SUPPORTED; // 505
```

#### Variant also negotiates

```php
<?php

use Http\ServerError;

echo ServerError::VARIANT_ALSO_NEGOTIATES; // 506
```

#### Insufficient storage

```php
<?php

use Http\ServerError;

echo ServerError::INSUFFICIENT_STORAGE; // 507
```

#### Loop detected

```php
<?php

use Http\ServerError;

echo ServerError::LOOP_DETECTED; // 508
```

#### Not extended

```php
<?php

use Http\ServerError;

echo ServerError::NOT_EXTENDED; // 510
```

#### Network authentication required

```php
<?php

use Http\ServerError;

echo ServerError::NETWORK_AUTHENTICATION_REQUIRED; // 511
```
