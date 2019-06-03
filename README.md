# numericToken
Simple class to generate numeric tokens


## Install

Via Composer
``` bash
$ composer require hamidjavadi/numeric-token
```


## Usage
``` php

<?php

use Hamidjavadi\numericToken;

$token = new numericToken();
echo $token->generate();
// 222195


$token->length = 10;
echo $token->generate();
// 8880301728

```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.