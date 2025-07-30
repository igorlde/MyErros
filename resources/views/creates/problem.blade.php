@extends('layout.app')

@component('components.sidebar')  
@endcomponent

@section('content')
@php
     use App\Enums\Programing_language;
@endphp
<form action="{{ route('store.problem') }}" method="post">
    @csrf

    <div class="btn-code">
        <label for="code">Code</label><br>
        <input type="text" name="code" id="code" placeholder="Code" value="{{ old('code') }}"><br>

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

    <div class="erro">
        <label for="erro">Error</label><br>
        <input type="text" name="erro" id="erro" placeholder="Error here" value="{{ old('erro') }}"><br>

        <label for="description">Description</label><br>
        <input type="text" name="description" id="description" placeholder="Description of the error" value="{{ old('description') }}"><br>
    </div>

    <button type="submit">Send your problem</button>
</form>
@endsection
