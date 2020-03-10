# **Setup**

## **Create a laravel Project**

***using a artisan***

```php

composer create-project --prefer-dist laravel/laravel blog

```

***cd into the project***
```php

cd blog

```

***Lets create a command***
```php
php artisan make:command CollectionCommand

```

*** now lets add that to the kernal ***

```php
<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\CollectionCommand;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //Collection command
        CollectionCommand::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
```

***Add collection data to the CollectionComman***

```php

<?php

namespace App\Console\Commands;

use App\CollectionExample;
use Illuminate\Console\Command;

class CollectionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */add command name here
    protected $signature = 'Collection:example';

    /**
     * The console command description.
     *
     * @var string
     */
    // add a description here
    protected $description = 'Laravel Collection Playground';


    public function handle()
    {
        //
        dd((new CollectionExample())->example());
    }
}
    

```

```php
    public function handle()
    {
        //call the CollectionExample class 
        // then Example method
        dd((new CollectionExample())->example());
    }

```
***Create a New Class***

```php
<?php

namespace App;
class CollectionExample{
    public function example()
    {
        return collect([1,2,3,4])->first();
    }
}

```


***output***
```php
1   
```