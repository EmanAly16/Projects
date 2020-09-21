
@extends('items.layout')
 
@section('content')

    <div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                  <a class="btn btn-success ml-5" href="{{ route('items.index') }}">Back</a>
                </h4>
            </div>
         </div>
       
          <!--  <form action="{{ route('items.update',$item->id) }}" method="POST">-->
               <!-- @csrf-->
               <!--  @method('PUT')-->
               {!! Form::open(['route'=>['items.update',$item->id],'method'=>'put'])!!}
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                          <!--   <input type="text" name="title" value="{{ $item->title }}" class="form-control" placeholder="Title">-->
                          {!! Form::text('title',$item->title,['placeholder'=>'Title..','require'])!!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Body:</strong>
                          <!--   <textarea class="form-control" style="height:150px" name="body"  placeholder="body">{{ $item->body }}</textarea>-->
                          {!! Form::text('body',$item->body,['placeholder'=>'Body...','require'])!!}

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        @endsection


