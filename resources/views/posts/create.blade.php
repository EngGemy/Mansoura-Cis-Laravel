@extends('layout.app')
@section('title','post create')

@section('content')




    <form action="{{ route('posts.store') }}" method="post">
        @csrf
@include('posts.partials.form')
        <div><input type="submit" value="create"></div>
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
