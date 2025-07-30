@extends('layout.app')
@section('content')
@php
    use App\Enums\Programing_language;
@endphp
    <div>
        <form action="{{route('utility.store')}}" method="post">
            @csrf
            
        </form>
    </div>    
@endsection

