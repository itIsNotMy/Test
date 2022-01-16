<h3 class="pb-4 mb-4 fst-italic border-bottom">{{$titleForm}}</h3>
@if($errors->count())
<div class="alert alert-danger mt-4">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="{{$action}}">
@csrf
@method($method)
  <div class="mb-3">
    <label class="form-label">Текст</label>
    <textarea type="text" class="form-control" name="text" rows="6">{{  old('text', $record->text ?? '') }}</textarea>
  </div>
  <div class="mb-3 form-check">
  <button type="submit" class="btn btn-primary">{{$button}}</button>
</form>
