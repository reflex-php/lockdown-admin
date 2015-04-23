<?php namespace Reflex\LockdownAdmin\Http\Controllers;

use Reflex\Lockdown\Lockdown;

class BaseController extends Controller
{   
    protected $lockdown;

    public function __construct(Lockdown $lockdown)
    {
        $this->lockdown =   $lockdown;
    }

    /**
     * Handle calls to missing methods on the controller.
     *
     * @param  array   $parameters
     * @return mixed
     */
    public function missingMethod($parameters = array())
    {
        dd('End here...');
        return view('lockdown::errors.404');
    }

    public function __call($method, $parameters)
    {
        return $this->missingMethod($parameters);
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
            $this->layout = view($this->layout);
        }
    }
}