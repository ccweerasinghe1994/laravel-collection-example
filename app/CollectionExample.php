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
