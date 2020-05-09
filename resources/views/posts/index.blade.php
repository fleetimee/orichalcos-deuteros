@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>
    </div>

    <div class="card card-default">
        <div class="card-header">Posts</div>
        <div class="card-body">
            @if ($posts->count() > 0)
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Categories</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>
                            <img src="/storage/{{ ($post->image) }}" width="120px" height="60px" alt="">
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            <a href="{{ route('categories.edit', $post->category->id) }}">
                                {{ $post->category->name }}
                            </a>
                        </td>
                        @if ($post->trashed())
                            <td class="float-right">
                                <form action="{{ route('restore-posts', $post->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-info btn-sm">Restore</button>
                                </form>
                            </td>
                        @else 
                            <td class="float-right">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                        @endif
                        <td class="ml-5">
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" href="" class="btn btn-danger btn-sm">
                                    {{ $post->trashed() ? 'Delete' : 'Trash' }}
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody> 
                @endforeach
            </table>

            @else 
                <h3 class="text-center">No posts yet</h3>
            @endif
            
        </div>
    </div>
@endsection