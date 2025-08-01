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
            <textarea name="code" id="code" placeholder="Code" rows="10">{{old('code')}}</textarea><br>
            <label for="solution">Explanation</label><br>
            <div id="editor" style="height: 200px;">{!! old('solution') !!}</div>
            <input type="hidden" name="solution" id="solution">
        </div>
        <button type="submit">Send solution</button>
    </form>
    @endsection
    @section('scripts')
    <script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    var form = document.querySelector('form');
    form.onsubmit = function () {
        const content = quill.root.innerHTML.trim();
        if (content === '<p><br></p>') {
            alert('A explicação não pode estar vazia!');
           return false;
        }
        document.querySelector('input[name=solution]').value = quill.root.innerHTML;
    };
    </script>

@endsection