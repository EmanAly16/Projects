<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
      
    </x-slot>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container bg-dark">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card mt-5">
                    <div class="card-header">
                        <div class="col-md-12">
                            <a class="btn btn-success ml-5" href="{{ route('items.create') }}" id="createNewItem"> Create New Post</a>
                            </h4>
                        </div>

                    </div>
                 
                    

                        
                    </div>
                </div>
                 <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
