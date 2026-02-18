@extends('layouts.app')

@section('title', 'Home - Hero Very')

@section('content')

    <div class="profile-card">

        <div class="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none">
                <circle cx="32" cy="22" r="14" fill="white" fill-opacity="0.9"/>
                <ellipse cx="32" cy="52" rx="22" ry="13" fill="white" fill-opacity="0.9"/>
            </svg>
        </div>

        <h2>Welcome to Hero's Web</h2>
        <p class="tagline">Student · Developer in Training</p>

        <p class="bio">
            Hello! I'm Hero Very, a Computer Science student currently learning web development.
            Head over to my About page to learn more about me and what I'm working on.
        </p>

        <a href="{{ url('/about') }}" class="btn">
            View About Page
        </a>
    </div>

@endsection