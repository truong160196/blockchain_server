<?php

namespace Spatie\QueryBuilder;

use Illuminate\Support\ServiceProvider;

class QueryBuilderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/query-builder.php' => config_path('query-builder.php'),
            ], 'config');
        }

        $this->mergeConfigFrom(__DIR__.'/../config/query-builder.php', 'query-builder');
    }

    public function register()
    {
        $this->app->bind(QueryBuilderRequest::class, function ($app) {
            return QueryBuilderRequest::fromRequest($app['request']);
        });
    }
}
