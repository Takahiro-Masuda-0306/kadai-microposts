<ul class="nav nav-tabs nav-justified mb-3">
    <li class="nav-item"><a href="{{ route('users.show', ['id'=>$user->id]) }}"  class="nav-link {{ Request::is('users/' . $user->id ? 'active' : '') }} ">タイムライン<span class="badge badge-secondary">{{ $count_microposts }}</span></a></li>
    <li class="nav-item"><a class="nav-link {{ Request::is('users/*/followings') ? 'active' : '' }}" href="{{ route('users.followings', ['id' => $user->id]) }}">フォロー<span class="badge badge-secondary">{{ $count_followings }}</span></a></li>
    <li class="nav-item"><a class="nav-link {{ Request::is('users/*/followers') ? 'active' : '' }}" href="{{ route('users.followers', ['id' => $user->id]) }}">フォロワー<span class="badge badge-secondary">{{ $count_followers }}</span></a></li>
</ul>