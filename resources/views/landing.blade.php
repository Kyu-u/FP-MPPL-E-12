@extends('layouts.navbar')

@section('content')
<div>
    <p class="text-4xl">hahahihi</p>
    @if(Auth::user())
    <p>halo {{Auth::user()->name}}</p>
    @endif


</div>
@endsection
