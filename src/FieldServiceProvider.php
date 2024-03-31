<?php

namespace Devloops\PhoneNumber;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

/**
 * Class FieldServiceProvider.
 *
 * @package Devloops\PhoneNumber
 * @date    31/03/2024
 * @author  Abdullah Al-Faqeir <abdullah@devloops.net>
 */
class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Nova::serving(static function (ServingNova $event) {
            Nova::script('phone-number', __DIR__.'/../dist/js/field.js');
            Nova::style('phone-number', __DIR__.'/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }
}
