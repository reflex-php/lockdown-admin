<?php namespace Reflex\LockdownAdmin\Http\Controllers;

class RoleController extends BaseController
{
    public function index()
    {
        $lockdown   =   $this->lockdown;
        $roles      =   $lockdown->findAllRoles();

        return view('lockdown::pages.all-roles', compact('roles'));
    }   

    public function create()
    {
        return view('lockdown::pages.create-role');
    } 

    public function store()
    {
        return redirect()->back()->withInput();
    }
}
