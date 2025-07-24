@extends('layout.app')
@section('content')

        @foreach ($problems as $p)
            <div class="languge-btn">
                <p>{{$p}}</p>
            </div>
        @endforeach
        @component('components.sidebar')         
        @endcomponent
@endsection