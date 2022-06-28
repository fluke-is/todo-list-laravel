<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{

    public function index()
    {
        $toDoLists = ToDoList::all();
        return view('index', compact('toDoLists'));
    }

    public function store(Request $request)
    {
        $data = $request -> validate(['Lists' => 'required']);
        ToDoList::create($data);
        return back();
    }

    public function destroy(ToDoList $toDoList, $id)
    {
        $toDoList = ToDoList::find($id);
        $toDoList -> delete();
        return back();
    }
}
