@extends('layout.app')

@component('components.sidebar')  
@endcomponent

@section('content')
    <h2>@yield('title', 'Problems')</h2>

    @if (!empty($problems))
        @foreach ($problems as $p)
            <div class="problem-entry">
                <div class="user">
                    <label for="user">User:</label>
                    <span class="user-id">{{ $p->user->name ?? 'Unknown' }}</span>
                </div>
                <div class="language-info">
                    <label for="language-code">Programming Language:</label><br>
                    <span class="data-codes">{{ $p->language }}</span><br>
                </div>
                <div class="error-info">
                    <label for="erro">Error in the code:</label><br>
                    <span class="data-codes">{{ $p->erro }}</span><br>
                </div>
                <div class="language-info">
                    <label for="code">Code:</label><br>
                    <pre class="data-codes"><code>{{!! nl2br(e($p->code)) !!}}</code></pre><br>
                </div>
                <div class="print-code">
                <label for="code">Code:</label><br>
                    <img src="{{ asset('storage/' . $p->print_code) }}" alt="Print code" style="max-width: 100%; height: auto;">
                </div>
                <div class="error-info">
                    <label for="description">Description of the error:</label><br>
                    <span class="data-code">{{ $p->description }}</span><br>
                </div>

                <a href="{{ route('create.solution', $p->id) }}">Send solution</a>
                <hr>
            </div>
        @endforeach
    @endif
@endsection
