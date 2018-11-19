@extends('layouts.app')



@section('content')


<form action="/" method="POST" id="verlanglijst" name="verlanglijst">
    {{ csrf_field() }}
<input type="text">
<button type="submit">Bevestig</button>
</form>
<script src="{{ asset('js/form.js') }}" defer></script>
@endsection