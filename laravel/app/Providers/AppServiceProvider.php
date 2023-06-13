<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use ConsoleTVs\Charts\Registrar as Charts;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        $charts->register([
            \App\Charts\UserQuiz::class,
            \App\Charts\GlobalQuizzes::class,
//            \App\Charts\MonthlyUsers::class,
        ]);

//        $this->app->bind('path.public', function() {
//            return base_path().'/../public_html';
//        });
    }
}
