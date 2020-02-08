@extends('templates.main')

@section('contracker.text')
    <h2>{{ config('app.name') }}</h2>
    @auth
        <p>Welcome {{ auth()->user()->username }}, you are logged in. Check back later for your first assignment&hellip;</p>
        <p>Here are some things you can do:</p>
        <p><a href="{{ route('contracts') }}">View contracts</a></p>
    @endauth
    @guest
        <p>This page is under construction&hellip;</p>
        <p>For updates, join the <a href="https://discordapp.com/invite/yVgVdQv">Discord server</a>.</p>
    @endguest
@endsection
