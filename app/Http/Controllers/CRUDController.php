<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class CRUDController extends Controller
{

    public function store(Request $request) {
        $crud = new Crud([
            'name' => $request->get('name'),
            'type' => $request->get('type')
        ]);

        $crud->save();

        return back();
    }

}
