@extends('layouts/app')

@section('content')

<div class="row">
    <div class="col-sm-4">
        @include('users.card', ['user'=>$user])
    </div>
    <div class="col-sm-8">
        @include('users.navtabs', ['user'=>$user])
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