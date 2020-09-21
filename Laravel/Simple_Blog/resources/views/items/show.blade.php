@extends('items.layout')
 
@section('content')
<div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                  <a class="btn btn-success ml-5" href="{{ route('items.index') }}">Back</a>
                </h4>
            </div>
         </div>
         <div class="card-body">
           <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        {{ $item->title }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Body:</strong>
                        {{ $item->body }}
                    </div>
                </div>
            </div>
            

        </div>
        @endsection
