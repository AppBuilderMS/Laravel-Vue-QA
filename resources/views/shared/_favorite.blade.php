<a title="Click to mark as favorite question (Click again to undo)"
   class="favorite mt-2 {{\Illuminate\Support\Facades\Auth::guest() ? 'off':  ($model->is_favorited ? 'favorited': '')}} text-decoration-none"
   onclick="event.preventDefault(); document.getElementById('favorite-question-{{$model->id}}').submit();">
    <i class="fa fa-star fa-2x"></i>
    <span class="favorites-count">{{$model->favorites_count}}</span>
</a>
<form id="favorite-question-{{$model->id}}" action="/{{$firstURISegment}}/{{$model->id}}/favorites" method="POST" style="display:none;">
    @csrf
    @if($model->is_favorited)
        @method('DELETE')
    @endif
</form>
