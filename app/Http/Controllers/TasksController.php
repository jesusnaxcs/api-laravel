<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;

class TasksController extends Controller
{
    public function getAll(){
    	$tasks = Tasks::all();
    	return $tasks;
    }
    public function add(Request $request){
    	$tasks = Tasks::create($request->all());
    	return $tasks;
    }
    public function get($id){
    	$task = Tasks::find($id);
    	return $task;
    }
    public function edit($id, Request $request){
    	$task = $this->get($id);
    	$task->fill($request->all())->save();
    	return $task;
    }
    public function delete($id){
    	$task = $this->get($id);
    	$task->delete();
    	return $task;
    }
}