@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $article->title }}</div>
                    <div class="panel-body">
                        {{ $article->content }}

                        <br>
                        <br>

                        <strong>{{ $article->user->name }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection