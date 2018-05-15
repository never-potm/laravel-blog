<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->get('title') && $request->get('type')) {

            $crud = new Crud([
                'name' => $request->get('title'),
                'type' => $request->get('type')
            ]);

            $crud->save();
        }

        $cruds = Crud::all();

        return view('home', compact('cruds' ));
    }

    public function getEdit(Request $request)
    {
        $id = $request->get('id');
        $crud = Crud::find($id);

        return view('edit', compact('crud', 'id'));
    }


    public function update(Request $request)
    {

        $id = $request->get('id');

        $crud = Crud::find($id);
        $crud->name = $request->get('title');
        $crud->type = $request->get('type');
        $crud->save();
        return redirect('home');
    }
}
