<?php
namespace Reflex\LockdownAdmin;

use Illuminate\Html\HtmlServiceProvider;

class LockdownMacroProvider extends HtmlServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Macros must be loaded after the HTMLServiceProvider's
        // register method is called. Otherwise, csrf tokens
        // will not be generated
        parent::register();

        // Load macros
        require __DIR__ . '/macros.php';
    }
}