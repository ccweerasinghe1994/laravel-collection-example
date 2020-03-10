# **Average(average() or avg())**
***The avg method returns the average value of a given key:***
## **simple average**
```php
<?php

namespace App;

class CollectionExample
{
    public function example()
    {
        $data = [10, 20, 30];

        return collect($data)->average(); 
    }
}

```

```php

20

```

## **Array of Arrays**

```php
namespace App;

class CollectionExample
{
    public function example()
    {
        
        $data = [
            ['price' => 1000],
            ['price' => 2000],
            ['price' => 3000],
            ['price' => 4000],
            ['price' => 5000],
            ['price' => 6000]
        ];

        return collect($data)->average('price');
    }
}


```

```php

3500

```
## **More Complex Example**

```php
namespace App;

class CollectionExample
{
    public function example()
    {

        $data = [
            ['price' => 1000, 'tax' => 500],
            ['price' => 2000, 'tax' => 700],
            ['price' => 3000, 'tax' => 900],
        ];

        return collect($data)->average(function ($value) {
            return $value['price'] + $value['tax'];
        });
    }
}


```

```php
    
2700

```
## **With Conditions**

```php
namespace App;

class CollectionExample
{
    public function example()
    {

        $data = [
            ['price' => 1000, 'tax' => 500, 'active' => true],
            ['price' => 2000, 'tax' => 700, 'active' => false],
            ['price' => 3000, 'tax' => 900, 'active' => true],
        ];

        return collect($data)->average(function ($value) {

            if (!$value['active']) {
                return null;
            }
            return $value['price'] + $value['tax'];
        });
    }
}

```

```php
2700
```
## ****

```php

```

```php

```
## ****

```php

```

```php

```
## ****

```php

```

```php

```