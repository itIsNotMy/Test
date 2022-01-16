@extends('layout.master')
@section('title', 'Запрос на вытягивание')
@section('content')
  <form method="POST" action="{{ route('export') }}">
   <p>Время создания записей</p>
   @csrf
   <p><input type="datetime-local" name="from" pattern="yyyy-mm-dd hh:mm"> от </p>
   <p><input type="datetime-local" name="to"> до </p>
   <p><button type="submit" class="btn btn-primary">Получить Отчет</button>
  </form>
@endsection