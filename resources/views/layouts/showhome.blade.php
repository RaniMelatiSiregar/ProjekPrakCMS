@extends('dashboard')

@section('curdcontent')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Home</h2>
            </div>
            
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{$home->title}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>About:</strong>
                {{$home->about}}
            </div>
        </div>
    </div>

    <div class="pull-right">
        <a class="btn btn-primary" href="/dashboard/homes/ {{$home->id}}"> Back</a>
    </div>

@endsection
