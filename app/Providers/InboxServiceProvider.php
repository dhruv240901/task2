<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InboxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $html=' <li>
        <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Inbox</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="app-email.html">Mailbox</a></li>
                <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                <li><a href="app-compose.html">Compose Mail</a></li>
            </ul>
        </li>';
        $this->app->instance('inbox_html', $html);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
