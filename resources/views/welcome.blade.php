@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                <div class="panel-body">
                   @foreach($posts as $post)
                        <ul>
                            <li>{{ $post->name_autor }}</li>
                            <li>{{ $post->titulo }}</li>
                            <li>{{ $post->texto }} </li>
                        </ul>
                    @endforeach
                       {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
