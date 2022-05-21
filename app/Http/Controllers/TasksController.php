<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;


class TasksController extends Controller
{
    //

    public function index()
    {
        //$tasks = Task::all();
        //DB::enableQueryLog();
        $tasks = DB::table('tasks')->get();
        //dd(DB::getQueryLog());
        //dd($tasks);
        return view('index',['tasks'=>$tasks]);

    }

    public function createTaskForm(){
        return view('createTaskForm');
    }

    public function createNewTask(Request $request){
        //$task = new Task();
        $title = $request->input('title');
        $description = $request->input('description');
        $status = $request->input('status');
        $progress = $request->input('progress');

        DB::table('tasks')->insert(['title'=>$title,'description'=>$description, 'progress'=>$progress,'status'=>$status]);

        return \redirect('/');
    }

    public function editTaskForm(Request $request,$id){
        $task = DB::table('tasks')->where('id',$id)->get();
        return view('editTaskForm',['task'=>$task]);
    }

    public function editTask(Request $request){
        $title = $request->input('title');
        $description = $request->input('description');
        $status = $request->input('status');
        $progress = $request->input('progress');

        DB::table('tasks')->where('id',$request->input('id'))->update(['title'=>$title,'description'=>$description, 'progress'=>$progress,'status'=>$status]);

        return \redirect('/');
    }
}
