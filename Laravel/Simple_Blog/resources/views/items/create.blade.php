@extends('items.layout')
 
@section('content')
<div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                  <a class="btn btn-success ml-5" href="{{ route('items.index') }}">Back</a>
                </h4>
            </div>
         </div>
        
               
          <!--  <form action="{{ route('items.store') }}" method="POST">-->
       {!! Form::open(['url'=>'items','method'=>'post']) !!}       
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h4>Title:</h4>
                            {!! Form::text('title','',['placeholder'=>'Title..','require'])!!}
                            @error('title')
                            <div class="alter alter-danger">{{$message}}</div>
                            @enderror
                            <!--<input type="text" name="title" class="form-control" placeholder="Name">-->
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h4>Body:</h4>
                            {!! Form::text('body','',['placeholder'=>'Body...','require'])!!}
                            @error('body')
                            <div class="alter alter-danger">{{$message}}</div>
                            @enderror
                           <!-- <textarea class="form-control" style="height:150px" name="body" placeholder="Description"></textarea>-->
                        </div>
                    </div>
                  

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        @endsection
