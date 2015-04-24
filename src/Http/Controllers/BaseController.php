<?php namespace Reflex\LockdownAdmin\Http\Controllers;

use Reflex\Lockdown\Lockdown;

class BaseController extends Controller
{   
    /**
     * Lockdown instance
     * @var Lockdown
     */
    protected $lockdown;

    /**
     * Constructor
     * @param Lockdown $lockdown Lockdown instance
     */
    public function __construct(Lockdown $lockdown)
    {
        $this->lockdown =   $lockdown;
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (! is_null($this->layout)) {
            $this->layout = view($this->layout);
        }
    }
}