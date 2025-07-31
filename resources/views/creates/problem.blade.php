@extends('layout.app')

@component('components.sidebar')  
@endcomponent

@section('content')
@php
     use App\Enums\Programing_language;
@endphp
<form action="{{ route('store.problem') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="btn-code">
        <label for="code">Code</label><br>
        <textarea name="code" id="code" placeholder="Code" rows="10">{{ old('code') }}</textarea><br>

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
    <div class="print-code">
        <label for="print_code">Print code</label><br>
        <input type="file" name="print_code" id="print_code" accept="image/*"><br>
    </div>

    <button type="submit">Send your problem</button>
</form>
@endsection
