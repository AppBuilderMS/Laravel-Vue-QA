@csrf
<div class="form-group">
    <label for="question-title">Question title</label>
    <input type="text" id="question-title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{isset($question) ? $question->title : old('title')}}">
    @error('title')
    <div class="invalid-feedback">
        <strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="form-group mt-2">
    <label for="question-body">Explain your question </label>
    <textarea id="question-body" class="form-control @error('body') is-invalid @enderror" name="body" rows="10">{{isset($question) ? $question->body : old('body')}}</textarea>
    @error('body')
    <div class="invalid-feedback">
        <strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="form-group mt-3">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{$buttonText}}</button>
</div>
