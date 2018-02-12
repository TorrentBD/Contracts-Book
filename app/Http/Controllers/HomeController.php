<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Contract;

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
    public function index()
    {
        
        $tasks = Contract::all();

            return view('home')->with('tasks',$tasks);
    }


    public function create()
    {
                
        return view('actions.person');
    }


    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'f_name' => 'required|string|max:30',
        'c_email' => 'required|string|email|max:30',
        'f_name' => 'required|max:30',
        'cont_1' => 'required|max:11',
        'address' => 'required|max:30',
        ]);

        if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

            

    $task = new Contract;
            $task->f_name = $request->f_name;
            $task->n_name = $request->n_name;
            $task->c_email = $request->c_email;
            $task->cont_1 = $request->cont_1;
            $task->cont_2 = $request->cont_2;
            $task->pro_pic = $request->pro_pic;
            $task->address = $request->address;
            $task->website = $request->website;
            $task->b_date = $request->website;


            $task->save();

            return redirect('/');
        //return view('home');
    }


    public function view($id)
    {
        
        $tasks = Contract::findOrFail($id);;

            return view('actions.view_person')->with('tasks',$tasks);
    }


    public function delete($id)
    {
        $task = Contract::findOrFail($id);

        $task->delete();

        ///Session::flash('flash_message', 'Task successfully deleted!');

        return redirect('/');
    }



    public function update($id, Request $request)
    {
        $task = Contract::findOrFail($id);

        $this->validate($request, [
        'f_name' => 'required|string|max:30',
        'c_email' => 'required|string|email|max:30',
        'f_name' => 'required|max:30',
        'cont_1' => 'required|max:11',
        'address' => 'required|max:30',
        ]);

        $input = $request->all();

        $task->fill($input)->save();

         

        return redirect('/');
    }


}
