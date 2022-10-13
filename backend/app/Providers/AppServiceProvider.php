<?php

namespace App\Providers;

use App\Infra\Repositories\Queries\SearchQuery;
use Illuminate\Support\ServiceProvider;
use Rss\Application\Queries\SearchQueryInterface;

/**
 * AppServiceProvider
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * 登録するコンテナ
     *
     * @var array
     */
    public $bindings = [
        SearchQueryInterface::class => SearchQuery::class
    ];

    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
