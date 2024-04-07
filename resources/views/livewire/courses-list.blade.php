@extends('index')
@section('content')
<div>
    <div class="flex bg-gray-50 dark:bg-gray-700 p-4 mt-5 mb-5 max-w-7xl rounded-xl mx-auto">
        <livewire:filters></livewire:filters>
    </div>
    <div class="grid grid-flow-row-dense grid-cols-3 bg-gray-50 dark:bg-gray-700 p-4 mt-5 mb-5 max-w-7xl rounded-xl mx-auto">
        @foreach($courses as $course)
            <livewire:course-card :course="$course"></livewire:course-card>
        @endforeach
    </div>
</div>
@endsection()
