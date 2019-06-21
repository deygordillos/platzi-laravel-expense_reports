@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Report: <label class="label label-warning">{{$report->title}}</label></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expenseReports">Back</a>
            <a class="btn btn-info"      href="/expenseReports/{{$report->id}}/confirmSendEmail">Send Email</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Details</h3>
            <table class="table">
                @foreach($report->expenses as $expense)
                <tr>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->created_at }}</td>
                    <td>{{ $expense->amount }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a  class="btn btn-primary" href="/expenseReports/{{ $report->id }}/expenses/create">New expense</a>
        </div>
    </div>
</div>    
@endsection