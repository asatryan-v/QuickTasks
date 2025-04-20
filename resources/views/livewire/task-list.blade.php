<div class="max-w-md mx-auto mt-10 p-4 bg-white shadow-md rounded">
    <h1 class="text-xl font-bold mb-4">📝 QuickTasks</h1>

    <form wire:submit.prevent="addTask" class="flex mb-4">
        <input wire:model="title" type="text" class="flex-1 border rounded-l px-2 py-1" placeholder="New task...">
        <button type="submit" class="bg-blue-600 text-white px-4 rounded-r">Add</button>
    </form>

    @foreach($tasks as $task)
        <div class="flex justify-between items-center border-b py-2">
            <div class="{{ $task->is_done ? 'line-through text-gray-500' : '' }}">
                {{ $task->title }}
            </div>

            @if ($task->is_done)
                <span class="ml-2 text-green-500">Done</span>
            @endif

            <div class="space-x-2">
                <button wire:click="toggleTask({{ $task->id }})" class="text-green-600">
                    ✔️
                </button>
                <button wire:click="deleteTask({{ $task->id }})" class="text-red-600">
                    ❌
                </button>
            </div>
        </div>
    @endforeach
</div>
