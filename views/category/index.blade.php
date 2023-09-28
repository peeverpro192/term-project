@extends('master')
@section('content') 
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Category </h2>
                    <div class="h-1 bg-gray-800 w-32"></div><br>
                </div>
                <br>
                <br>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('category.create') }}"> Create item</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr bgcolor ="C8E4B2" >
                    <th>ID</th>
                    <th>Category Name</th>
                    <th width="150px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr  bgcolor ="9ED2BE">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category_name }}</td>
                        <td>
                            <form action="{{ route('category.destroy',$item->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('category.edit',$item->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $categories->links() !!}
    </div>
@endsection