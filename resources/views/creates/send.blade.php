@extends('layout.app')

@component('components.sidebar')
@endcomponent
@section('content')
@php
    use App\Enums\Programing_language;
@endphp
    <form action="{{route('store.solution')}}" method="post">
        @csrf
        <div class="erro-problem">
            <h4><label for="Erro-by-solve">Erro By solve</label></h4>
            <td>{{$problem->erro}}</td><br>
        </div>
        <div class="solution">
            <label for="language">Language</label><br>
              <select name="language" id="language" class="option-select">
                <option value="">-- Select --</option>
                @foreach (Programing_language::cases() as $lang)
                <option value="{{ $lang->value }}" {{ old('language') === $lang->value ? 'selected' : '' }}>
                    {{ ucfirst($lang->label()) }}
                </option>
                @endforeach
</select>
        </div>
        <div class="solution">
            <label for="code">Code solution</label><br>
            <input type="text" name="code" id="code" placeholder="code-solution" value="{{old('code')}}"><br>
            <label for="solution">Explanation</label><br>
            <input type="text" name="solution" id="solution" value="{{old('solution')}}">
        </div>
        <button type="submit">Send solution</button>
    </form>
@endsection