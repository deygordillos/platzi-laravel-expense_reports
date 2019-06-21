@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Edit Report <label class="label label-warning">{{$report->id}}</label></h1>
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
            <form action="/expenseReports/{{$report->id}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Titulo reporte" value="{{$report->title}}">                
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>    
@endsection