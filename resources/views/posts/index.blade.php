@extends('layout.app')
@section('title','post index')

@section('content')
{{--@each('posts.partials.post',$posts ,'post')--}}
@forelse($posts as $key => $post)
{{--    @continue($key == 1)--}}
@include('posts.partials.post',[])
    @empty
        no posts found
        @endforelse



@endsection
