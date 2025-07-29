@extends('layout.app')
@section('content')
    <div>
        <form action="{{route('utility.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="info">
               @foreach ($user as $u)
                   <td>{{$u->user->name}}</td>
               @endforeach
            </div>
        </form>
    </div>    
@endsection

