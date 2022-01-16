@extends('layout.master')
@section('title', 'Главная')
@section('content')
<h3 class="pb-4 mb-4 fst-italic border-bottom">Записи</h3>
    @foreach ($records as $record)
        <p class="blog-post-meta">{{ $record->text }}</p>
        <p class="blog-post-meta">author:{{ $record->owner->name }}</p>
        @can('update', $record)
        <a href="{{ route('record.update', $record) }}"> Редактировать </a>
        @endcan
    @endforeach
    <p class="blog-post-meta">{{ $records->links() }}</p>
@endsection