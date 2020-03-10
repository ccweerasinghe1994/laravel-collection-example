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