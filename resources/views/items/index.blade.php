@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Item List</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="col-md-6 ">
            <a class="btn btn-success" style="float: right;" href="{{ route('items.create') }}">Create Item</a>
        </div>
    </div>

    <form method="GET" action="{{ route('items.index') }}">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search Items" value="{{ $search }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->date }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('items.show', $item->id) }}">View</a>
                    <!-- <a class="btn btn-primary" href="{{ route('items.edit', $item->id) }}">Edit</a>
                    <form method="POST" action="{{ route('items.destroy', $item->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                    </form> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
