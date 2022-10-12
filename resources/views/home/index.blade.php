@extends('layout.app')
@section('title','home index')

@section('content')
<div>
    @for($i = 0 ; $i < 10 ; $i++)
        <div>the current value is {{$i}}</div>
    @endfor
</div>

    @php $done = false @endphp
@while(!$done)
    <div>iam not done</div>

    @php
    if(random_int(0,1) === 1 )
        $done = true
    @endphp
@endwhile

@endsection
