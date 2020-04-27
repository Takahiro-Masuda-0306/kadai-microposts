<ul class="list-unstyled">
  @foreach($microposts as $micropost)
  
  <li class="media mb-3">
    <img src="{{ Gravatar::src($micropost->user->email, 50) }}"></img>
    <div class="media-body ml-2">
      {!! link_to_route('users.show', $micropost->user->name, ['id'=>$micropost->user->id]) !!}<span class="text-muted ml-2">posted at {{ $micropost->created_at }}</span>
      <p class="mb-0">{!! nl2br(e( $micropost->content )) !!}</p>
        
      @if (Auth::id() == $micropost->user_id)
      <div class="mt-2" style="display: flex; align-items: stretch; justify-content: flex-start;">
        <div class="favorite-button">
          @include('favorites.favorites_button', ['microposts'=>$microposts])
        </div>
        
        <div class="micropost-delete">
          {!! Form::open(['route'=> ['microposts.destroy', $micropost->id], 'method'=>'delete']) !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm mt-2 ml-2']) !!}
          {!! Form::close() !!}
        </div>
        
      @else
        @include('favorites.favorites_button', ['microposts'=>$microposts])
        
      @endif
      </div>
    </div>
      
  </li>
  
  @endforeach
</ul>

{{ $microposts->links('pagination::bootstrap-4') }}