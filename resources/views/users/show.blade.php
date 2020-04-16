@extends('layouts/app')

@section('content')

<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $user->name }}</h3>
            </div>
            <div class="card-body">
                <img class="rouded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt=""></img>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <ul class="nav nav-tabs nav-justified mb-3">
            <li class="nav-item"><a href="{{ route('users.show', ['id'=>$user->id]) }}"  class="nav-link {{ Request::is('users/' . $user->id ? 'active' : '') }} ">タイムライン<span class="badge badge-secondary">{{ $count_microposts }}</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">フォロー</a></li>
            <li class="nav-item"><a class="nav-link" href="#">フォロワー</a></li>
        </ul>
        @if(Auth::id() == $user->id)
            {!! Form::open(['route'=>'microposts.store']) !!}
            <div class="form-group">
                {!! Form::textarea('content', old('content'), ['class'=>'form-control', 'rows'=>'2']) !!}
                {!! Form::submit('投稿する', ['class'=>'btn btn-success btn-block mt-4']) !!}
            </div>
            {!! Form::close() !!}
        @endif
        
        @if(count($microposts) > 0)
            @include('microposts.microposts', ['microposts'=>$microposts])
        @endif
    </div>
</div>

@endsection