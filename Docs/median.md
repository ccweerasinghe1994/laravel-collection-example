# **median()**
```php
<?php

namespace App;

class CollectionExample
{
    public function example()
    {
        $data = [
            ['foo' => 10, 'tax' => 300, 'status' => true],
            ['foo' => 20, 'tax' => 400, 'status' => false],
            ['foo' => 20, 'tax' => 200, 'status' => false],

        ];

        return collect($data)->median('tax');
    }
}

```

```php

300

```