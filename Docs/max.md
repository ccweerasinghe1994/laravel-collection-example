# **Max**
***The `max` method returns the maximum value of a given key:***

```php

<?php

namespace App;

class CollectionExample
{
    public function example()
    {
        $data = [
            1000, 2000, 30000
        ];

        return collect($data)->max();
    }
}


```

```php

30000

```
## **With keys**
```php

<?php

namespace App;

class CollectionExample
{
    public function example()
    {
        $data = [['foo' => 10], ['foo' => 20]];

        return collect($data)->max('foo');
    }
}


```

```php

20

```

## **With Condition**

```php
<?php

namespace App;

class CollectionExample
{
    public function example()
    {
        $data = [
            ['foo' => 10, 'tax' => 300],
            ['foo' => 20, 'tax' => 400]

        ];

        return collect($data)->max(function ($value) {

            return $value['foo'] + $value['tax'];
        
        });
    }
}

```
```php

420

```
# **With Condition**
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
            ['foo' => 20, 'tax' => 400, 'status' => false],

        ];

        return collect($data)->max(function ($value) {
            if (!$value['status']) {
                return null;
            }
            return $value['foo'] + $value['tax'];
        });
    }
}

```
```php

310

```