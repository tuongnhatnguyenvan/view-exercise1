@extends('layouts.app')

@section('content')
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        {{-- @include('common.errors') --}}

        <!-- New Task Form -->
        <form action="/task" method="POST" class="form-horizontal mb-2 mt-2">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group card">
                <h5 class="card-header">New task</h5>
                <div class="card-body shadow">
                    <label for="task" class="card-title control-label fs-4">Task</label>
                    <input type="text" name="name" id="task-name" class="form-control">
                    <button type="submit" class="btn btn-light w-25 mt-3">
                        <i class="fa-solid fa-list"></i>
                        Add Task
                    </button>
                </div>

            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
    <div class="form-group card">
        <h5 class="card-header">Current Tasks</h5>
        <div class="card-body shadow">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Task</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Otto</td>
                        <td class="text-center">
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td class="text-center">
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Larry</td>
                        <td class="text-center">
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
