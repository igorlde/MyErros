@extends('layout.app')
@section('content')
    <div class="info-user">
        @foreach ($user as $u)
            <td>{{$u->user->name}}</td>
        @endforeach      
    </div>    
@endsection
