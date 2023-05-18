@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | জেলা প্রশাসকের বার্তা | {{ $ZilaProsasok->name }}
@endsection

@section('contant')

<div id="printable_area">

    <h3>জেলা প্রশাসকের বার্তা </h3>
    <div>
        <p>{{ $ZilaProsasok->barta }}</p>
        <p>&nbsp;</p>

        <p>{{ $ZilaProsasok->name }}</p>
        <p>{{ $ZilaProsasok->padobi }}</p>
        <p style="text-align:justify">মেহেরপুর ।</p>
    </div>
    <style></style>
    <script></script>
</div>

@endsection