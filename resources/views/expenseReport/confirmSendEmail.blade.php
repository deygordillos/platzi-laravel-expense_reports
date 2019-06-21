@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Send Report</h1>
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
        @if( $errors->any()  )
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <form action="/expenseReports/{{ $report->id }}/sendEmail" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{old('email')}}">                
            </div>
            <button class="btn btn-primary" type="submit">Send mail</button>
        </form>
    </div>
</div>
@endsection