@extends('layouts.main')

@section('title', 'Create Task')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Create Task</h1>
        </div>
    </div>

    @component('component.taskForm')
    @endcomponent
@endsection