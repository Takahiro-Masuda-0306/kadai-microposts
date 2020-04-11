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
            <li class="nav-item"><a class="nav-link" href="#">タイムライン</a></li>
            <li class="nav-item"><a class="nav-link" href="#">フォロー</a></li>
            <li class="nav-item"><a class="nav-link" href="#">フォロワー</a></li>
        </ul>
    </div>
</div>

@endsection