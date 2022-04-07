<?php

namespace App\Http\Controllers;

use App\Models\TodoListModel;
use Illuminate\Http\Request;

class TodoListController extends Controller
{

  public function create(Request $request)
  {
    $data = $request->all();
    $task = TodoListModel::create($data);
    return response()->json($task);
  }

  public function get($id = 0)
  {
    if($id > 0){
      return TodoListModel::findOrFail($id);
    }
    $data = TodoListModel::all();
    return response()->json($data);
  }
  public function edit(Request $request, $id)
  {
    $task = TodoListModel::findOrFail($id);
    $data = $request->all();
    $task->fill($data);
    $task->save();
    return response()->json($task);
  }
  public function delete($id)
  {
    $data = TodoListModel::findOrFail($id);
    $data->delete();
    return response()->json(['Message'  => 'Data deleted successfully'], 200);

  }
   
}
