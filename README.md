
## About Forum TDD

````
php artisan make:factory ThreadFactory

php artisan make:factory ReplyFactory

````
tinker :

```

$threads = Thread::factory()->count(50)->create();

$threads->each(function($thread){Reply::factory()->count(10)->create(['thread_id' => $thread->id]);});

```
