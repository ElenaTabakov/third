<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function showPage()
    {
        $tasks = DB::table('tasks')->get();
        $logs = DB::table('logs')->get();

        return view('tasks', [
            'tasks' => $tasks,
            'logs' => $logs,
        ]);
    }

    public function passID($id)
    {
        $count = DB::table('tasks')->where('id', '=', $id)->value('counter');
        DB::table('tasks')->where('id', $id)->update(['counter' => ++$count]);

        DB::table('logs')->insert([
            'task_id' => $id,
            'status' => 0,
        ]);

        return redirect('/');
    }
}
