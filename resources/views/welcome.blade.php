@extends('layouts.app')

@section('content')

    @if (Auth::check())
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="card-body">
                        <img class="img-fluid rounded" src="{{ Gravatar::src(Auth::user()->email, 500) }}"></img>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
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
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif

@endsection