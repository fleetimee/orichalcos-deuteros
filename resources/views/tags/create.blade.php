@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
        {{ isset($tag) ? 'Edit tag' : 'Create tag' }} 
    </div>
    <div class="card-body">
       @include('partials.error')
        <form action="{{ isset($tag) ? route('tags.update', $tag->id) : route('tags.store') }}" method="POST">
            @csrf
            @if(isset($tag))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ isset($tag) ? $tag->name : '' }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($tag) ? 'Update' : 'Create' }} 
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
