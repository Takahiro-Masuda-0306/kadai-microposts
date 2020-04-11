@if(count($users) > 0 )

<ul class="list-unstyled">
    @foreach($users as $user) 
    <li class="media">
        <img class="mr-2 rouded" src="{{ Gravatar::src($user->email, 50) }}" alt=""></img>
        <div class="media-body">
            {{ $user->name }}
        </div>
        <div>
            <p>{!! link_to_route('users.show', 'View Profile', ['id'=>$user->id] !!}</p>
        </div>
    </li>
    @endforeach
</ul>

{{ $users->links('pagination::bootstrap-4') }}

@endif