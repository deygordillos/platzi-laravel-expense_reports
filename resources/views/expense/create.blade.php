@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>New Expense</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expenseReports/{{$report->id}}">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <br>
        @if( $errors->any()  )
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <form action="/expenseReports/{{$report->id}}/expenses" method="POST">
            @csrf
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Titulo de expense" value="{{old('description')}}">                
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" name="amount" id="amount" placeholder="0,00" value="{{old('amount')}}">                
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection