<?php

namespace App\Http\Controllers\Admin\Workers;

use Illuminate\Routing\Controller as BaseController;

class WorkersController extends BaseController
{
    public function index()
    {
        $someValue = '<h1>Hello world</h1>';
        return view('admin.workers.tree', compact('someValue'));
    }
}