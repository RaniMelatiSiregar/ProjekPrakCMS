@extends('dashboard')

@section('curdcontent')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Portofolio</h2>
            </div>
            
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{$profiles->title}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Biografi:</strong>
                {{$profiles->biografi}}
            </div>
        </div>
    </div>

    <div class="pull-right">
        <a class="btn btn-primary" href="/dashboard/profiles/ {{$profiles->id}}"> Back</a>
    </div>

@endsection
