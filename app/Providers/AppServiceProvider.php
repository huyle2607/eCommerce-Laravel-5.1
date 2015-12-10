<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Input;
use Validator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()//Tự tạo một rule để check Price phải lớn hơn Sale_price
    {
        Validator::extend('greater_than', function($attribute, $value, $parameter, $validator) {
            $sale_price = Input::get($parameter[0]);
            
            return $value > $sale_price;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
