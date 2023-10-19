<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $html=' <li>
        <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="app-calendar.html">Calendar</a></li>
                <li><a href="app-chat.html">Chat app</a></li>
                <li><a href="app-ticket.html">Support Ticket</a></li>
                <li><a href="app-contact.html">Contact / Employee</a></li>
                <li><a href="app-contact2.html">Contact Grid</a></li>
                <li><a href="app-contact-detail.html">Contact Detail</a></li>
            </ul>
        </li>';
        $this->app->instance('apps_html', $html);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
