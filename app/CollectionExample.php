<?php

namespace App;
class CollectionExample{
    public function example()
    {
        return collect([1,2,3,4])->first();
    }
}