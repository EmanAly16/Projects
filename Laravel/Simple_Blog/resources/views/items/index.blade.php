
@extends('items.layout')
<!--@extends('dashboard');-->
 
@section('content')

       
            <table border="2">
                <tr>
                    <th width="10%">Title</th>
                    <th>Body</th>
                    <th>Operation</th>
                </tr>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->body }}</td>
                    <td>
                        <form action="{{ route('items.destroy',$item->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('items.show',$item->id) }}">Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('items.edit',$item->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
           </br>
        </div>

        @endsection
