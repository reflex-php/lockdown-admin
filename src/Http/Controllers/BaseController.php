<?php namespace Reflex\Lockdown\Http\Controllers;

use Reflex\Lockdown\Lockdown;

class BaseController extends Controller
{   
    protected $lockdown;

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
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }
}