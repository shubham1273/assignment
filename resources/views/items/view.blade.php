@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Item Details</h2>
    <div class="form-group">
        <strong>Title:</strong>
        {{ $item->title }}
    </div>
    <div class="form-group">
        <strong>Description:</strong>
        {{ $item->description }}
    </div>
    <div class="form-group">
        <strong>Date:</strong>
        {{ $item->date }}
    </div>
    <a class="btn btn-warning" href="{{ route('items.index') }}">Back</a>
    
    <a class="btn btn-info" href="{{ route('items.edit', $item->id) }}">Edit</a>
    
    <form method="POST" action="{{ route('items.destroy', $item->id) }}" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
    </form>
</div>
@endsection
