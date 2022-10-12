@extends('layout.app')
@section('title','post index')

@section('content')
{{-- @if($post['is_new'])--}}
{{--     <div>a new blog</div>--}}
{{-- @elseif(!$post['is_new'])--}}
{{--     <div>a old post</div>--}}
{{-- @endif--}}

{{-- @unless($post['is_new'])--}}
{{--     <p>with un less</p>--}}
{{-- @endunless--}}

{{-- @isset($post['has_comments'])--}}
{{--     <p>comment with isset </p>--}}
{{-- @endisset--}}

{{-- @empty($post['has_comments'])--}}
{{--     <p>comment with emmpty </p>--}}
{{-- @endempty--}}


    <h1>{{ $post['title'] }}</h1>
    <p>{{$post['content']}}</p>

@endsection
