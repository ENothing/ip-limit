<?php
/**
 * Created by Eric-Nothing.
 * Date: 2020/9/18
 * Time: 17:05
 */

namespace ENothing\IpLimit;


use Illuminate\Support\ServiceProvider;

class IpLimitProvider extends ServiceProvider
{

    public function boot()
    {
        // 发布配置文件
        $this->publishes([
            __DIR__.'/config/whiteList.php' => config_path('whiteList.php'),
        ]);
    }


    public function register()
    {
        $this->app->singleton('ip-limit', function ($app) {
            return new IpLimit($app['config']);
        });
    }

}