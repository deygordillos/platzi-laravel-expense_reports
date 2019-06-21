@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expenseReports/create">Create a new report</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach($expenseReports as $report)
                <tr>

                    <td>
                        <a href="/expenseReports/{{ $report->id }}">{{$report->title}}</a>
                    </td>
                    <td>
                        <a href="/expenseReports/{{ $report->id }}/edit" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="/expenseReports/{{ $report->id }}/confirmDelete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach   
            </table>

        </div>                    
</div>
</div>
@endsection