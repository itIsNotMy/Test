@extends('layout.master')
@section('title', 'Редактировать')
@section('content')
@include('layout.form', ['titleForm'=>'Изменить Запись', 'action'=>route('record.update', $record), 'button'=>'Изменить', 'method'=>'PATCH'])
<form method="post" action="{{ route('record.destroy', $record) }}">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Удалить</button>
</form>
@endsection