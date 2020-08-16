@extends('common.layouts')

@section('content')
    @include('common.message')
{{-- self-define-block --}}
    <div class="panel ppanel-default">
        <div class="panel-heading">Student List</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Adding Time</th>
                    <th width="300px"">Operation</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student )
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->Gender }}</td>
                    <td>2016-01-01</td>
                    <td>
                        <a href="#">Details</a>
                        <a href="#">Modification</a>
                            <a href="#">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>

    {{-- pagination --}}
    <div>
        <div class="pull-right">{{ $students->render() }}</div>
    </div>
@stop