<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $html=' <li>
        <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="index.html">Modern Dashboard</a></li>
                <li><a href="index2.html">Awesome Dashboard</a></li>
                <li><a href="index3.html">Classy Dashboard</a></li>
                <li><a href="index4.html">Analytical Dashboard</a></li>
                <li><a href="index5.html">Minimal Dashboard</a></li>
            </ul>
        </li>';
        $this->app->instance('dashboard_html', $html);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
