@extends('layouts.app')

@section('title', 'Startseite')

@section('content')
<h2>{{ $headline }}</h2>
<p>Heutiges Datum: {{ $today }} </p>
<p>Dies isr die erste Seite deines Laravel-Projektes.</p>
@endsection