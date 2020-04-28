@extends('Base/layout')
@section('content')
        
        @if(!empty(Auth::user()->getRoleNames()))
                @foreach(Auth::user()->getRoleNames() as $v)
                    Hey <label class="badge badge-success">{{ $v }}</label> {{Auth::user()->name}} !
                @endforeach
        @endif
@stop

