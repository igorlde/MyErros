@extends('layout.app')
@component('components.sidebar')  
@endcomponent
@section('content')
<title>@yield('title', '')</title>
<h2>@yield('title', 'Problems')</h2>
    @if (!empty($problems))
        @foreach ($problems as $p)
        <div class="user_id">
            <label for="user-id">User id</label>
            <td class="user-id">{{$p->user_id}}</td>
        </div>
            <div class="languge-btn">
                <label for="code">Code</label><br>
               <td class="data-codes">{{$p->code}}</td><br>
               <label for="language-code">Language of programing</label><br>
               <td class="data-codes">{{$p->language}}</td><br>
            </div>
             <div class="language-btn">
                <label for="erro">Erro of the code</label><br>
                <td class="data-codes">{{$p->erro}}</td><br>
                <label for="description">description of error</label><br>
                <td class="data-code">{{$p->description}}</td><br>
                <a href="{{route('create.solution')}}">Send solution</a>
            </div>
        @endforeach
    @endif
@endsection