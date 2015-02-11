<?php namespace Reflex\LockdownAdmin\Http\Controllers;

use Reflex\LockdownAdmin\Http\Requests\Role as RoleRequest;
use Reflex\Lockdown\Lockdown;

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

    public function store(RoleRequest $roleRequest)
    {
        $result =   $this->lockdown->createRole(
            $roleRequest->name,
            snake_case($roleRequest->name),
            $roleRequest->description
        );

        if ($result) {
            return redirect()->route('lockdown.roles.index');
        }

        return redirect()->back()->withInput();
    }
}
