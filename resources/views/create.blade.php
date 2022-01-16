@extends('layout.master')
@section('title', 'Создать записи')
@section('content')
@include('layout.form', ['titleForm'=>'Создать запись', 'action' => route('record.create'), 'button' => 'Создать', 'method' => 'POST'])
@endsection