<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Role\RoleServiceImplement;

class RoleController extends Controller
{
    private $mainService;

    public function __construct(RoleServiceImplement $mainService)
    {
        $this->mainService = $mainService;
    }


    public function createRole(Request $request)
    {
        $role = $this->mainService->createRole($request);
        return $role;
    }
}
