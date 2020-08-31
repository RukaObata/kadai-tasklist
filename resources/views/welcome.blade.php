@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{-- タスク作成ページへのリンク --}}
        {!! link_to_route('tasks.create', '新規タスクのリマインド', [], ['class' => 'btn btn-primary']) !!}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the TaskList</h1>
        {{-- ユーザ登録ページへのリンク --}}
        {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
    @endif
    
@endsection
