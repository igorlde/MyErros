@extends('layout.app')
@section('content')
@component('components.sidebar')
@endcomponent
<title>@yield('title', '')</title>
<h2>@yield('title', 'Send your problem')</h2>
    <form action="{{route('store.problem')}}" method="post">
        @method('POST')
        @csrf
        <div class="btn-code">
            <label for="code">Code</label>
            <input type="text" name="code" id="code" placeholder="code">
            <label for="language-pr">Language</label>
            <select name="language-programing" id="language-programing" class="option-select">
                  <option value="CPP" class="option-la">C++</option>
                  <option value="JAVA" class="option-la">Java</option>
                  <option value="ASSEMBLY" class="option-la">Assembly</option>
                  <option value="GO" class="option-la">GO</option>
                  <option value="C" class="option-la">C</option>
                  <option value="PHP" class="option-la">PHP</option>
                  <option value="LARAVEL" class="option-la">Laravel</option>
                  <option value="SPRING_BOOT" class="option-la">Springboot</option>
                  <option value="PASCAL" class="option-la">Pascal</option>
                  <option value="PYTHON" class="option-la">Python</option>
                  <option value="JAVA_SCRIPT" class="option-la">javascript</option>
                  <option value="TYPE_SCRIPT" class="option-la">TypeScript</option>
                  <option value="SQL" class="option-la">SQL</option>
                  <option value="OTHERS" class="option-la">others</option>
            </select>
        </div>
        <div class="erro">
            <label for="erro">Error</label>
            <input type="text" name="erro" id="erro" placeholder="erro">
            <label for="description">description</label>
            <input type="text" name="description" id="description" placeholder="description from erro">
        </div>
    </form>
@endsection