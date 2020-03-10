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
