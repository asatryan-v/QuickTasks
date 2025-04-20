<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskList extends Component
{
    public $tasks, $title;

    public function mount()
    {
        $this->tasks = Task::all();
    }

    public function render()
    {
        return view('livewire.task-list');
    }

    public function addTask()
    {
        $this->validate(['title' => 'required']);
        Task::create(['title' => $this->title]);
        $this->title = '';
        $this->tasks = Task::all();
    }

    public function toggleTask($id)
    {
        $task = Task::find($id);
        $task->is_done = !$task->is_done;
        $task->save();
        $this->tasks = Task::all();
    }

    public function deleteTask($id)
    {
        Task::destroy($id);
        $this->tasks = Task::all();
    }
}
