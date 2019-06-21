@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Delete Report <label class="label label-warning">{{$report->id}}</label></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expenseReports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <br>
            <form action="/expenseReports/{{$report->id}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-success" type="submit">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection