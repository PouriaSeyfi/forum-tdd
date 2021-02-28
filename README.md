
## About Forum TDD

````
php artisan make:factory ThreadFactory

php artisan make:factory ReplyFactory

````
tinker :

`
$threads->each(function($threads){Reply::factory()->count(10)->create(['thread_id' => $thread->id]);});
`
