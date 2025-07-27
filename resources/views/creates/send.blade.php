@extends('layout.app')
@section('content')
@component('components.sidebar')
@endcomponent
    <form action="{{route('store.solution')}}" method="post">
        @csrf
        @method('POST')
        <div class="erro-problem">
            <h4><label for="Erro-by-solve">Erro By solve</label></h4>
            <td>{{$problem->erro}}</td><br>
        </div>
        <div class="solution">
            <label for="erro_code_solution">Erro</label><br>
            <input type="text" name="erro" id="erro" placeholder="Erro who's will solve">
        </div>
        <div class="solution">
            <label for="language">Language</label><br>
            <select name="language" id="languge" class="option-languages">
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
        <div class="solution">
            <label for="code-solution">Code solution</label><br>
            <input type="text" name="code" id="code" placeholder="code-solution"><br>
            <label for="explanation">Explanation</label><br>
            <input type="text" name="solution" id="solution">
        </div>
        <button type="submit">Send solution</button>
    </form>
@endsection