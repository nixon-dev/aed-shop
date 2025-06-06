<?php

namespace App\Providers;

use Blade;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        DB::prohibitDestructiveCommands(
            app()->isProduction()
        );

        Blade::directive('truncate', function ($expression) {
            return "<?php echo \Illuminate\Support\Str::limit($expression, 20, '...'); ?>";
});


Paginator::useBootstrapFive();


}
}