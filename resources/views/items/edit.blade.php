@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Item</h2>
    <form method="post" action="{{ route('items.update', $item->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $item->title) }}" >
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4" >{{ old('description', $item->description) }}</textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date', $item->date) }}" >
            @error('date')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-warning" href="{{ route('items.index') }}">Back</a>
        </div>

    </form>
</div>
@endsection
