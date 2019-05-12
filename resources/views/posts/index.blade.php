@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('posts.create')}}" class="btn btn-success float-right">Add Post</a>
</div>

<div class="card card-default">
    <div class="card-header">Posts</div>

    <div class="card-body">
       @if($posts->count() > 0)
        <table class="table">

            <thead>
                <th>Image</th>
                <th>Title</th>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                           <img src="storage/{{ $post->image }}" alt="Image here" width="60px" height="60px" />
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>

                            @if(!$post->trashed())
                            <td>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">Edit</a>
                            </td>

                            @else
                            <td>
                                 <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">Restore</a>
                            </td>

                            @endif

                        <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf

                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">
                                {{ $post->trashed() ? 'Delete' : 'Trashed' }}
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                <tr></tr>
            </tbody>
        </table>
       @else
        <h3 class="text-center">There is no post yet!</h3>
       @endif


    </div>
</div>
@endsection
