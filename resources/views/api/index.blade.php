@extends('api.layouts.master')

@section('title', 'tasks')

@section('content')
    <div>
        <div>
            <table class="table-bordered">
                <tbody>
                <tr>
                    <th>#</th>
                    <th>Setting date</th>
                    <th>Deadline</th>
                    <th>Updated at</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Priority</th>
                </tr>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->setting_date }}</td>
                        <td>{{ $task->deadline }}</td>
                        <td>{{ $task->updated_at}}</td>
                        <td>{{ $task->author }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->priority }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



