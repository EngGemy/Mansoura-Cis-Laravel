@extends('layout.app')
@section('title','post edit')

@section('content')




    <form action="{{ route('posts.update',['post'=> $post->id]) }}" method="post">
        @csrf
        @method('PUT')
        @include('posts.partials.form')
        <div><input type="submit" value="update"></div>
    </form>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
