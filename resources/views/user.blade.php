@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profil</div>

                    <div class="panel-body">
                        @if(Auth::check())
                            <ul>
                                <li>{{ Auth::user()->name }}</li>
                                <li>{{ Auth::user()->email }}</li>
                                <li>{{ Auth::user()->created_at }}</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
