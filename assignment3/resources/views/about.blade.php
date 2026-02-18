@extends('layouts.app')

@section('title', 'About Me - Hero Very')

@section('content')

    <div class="profile-card">

        <div class="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none">
                <circle cx="32" cy="22" r="14" fill="white" fill-opacity="0.9"/>
                <ellipse cx="32" cy="52" rx="22" ry="13" fill="white" fill-opacity="0.9"/>
            </svg>
        </div>

        <h2>Hero Very</h2>
        <p class="tagline">Computer Science Student · Laravel Enthusiast</p>

        <div class="info-grid">
            <div class="info-box">
                <div class="label">Year Level</div>
                <div class="value">4th Year</div>
            </div>
            <div class="info-box">
                <div class="label">Status</div>
                <div class="value">Open to Internship</div>
            </div>
        </div>

        @php
            $skills = ['PHP', 'Laravel', 'HTML', 'CSS', 'JavaScript', 'MySQL', 'Git'];
            $isAvailable = true;
        @endphp

        <h3 style="margin-bottom: 12px; color: #1e40af;">Skills</h3>

        <div class="skills">
            @foreach($skills as $skill)
                <span class="skill-tag">{{ $skill }}</span>
            @endforeach
        </div>

        <p class="bio">
            Hi! I'm Hero Very, a 4th-year Computer Science student passionate about
            building web applications. I enjoy solving problems and turning ideas
            into real, working software. I'm currently deepening my knowledge of
            Laravel and backend development.
        </p>

        @if($isAvailable)
            <p class="available-badge">
                Currently available for internship or part-time work!
            </p>
        @else
            <p class="unavailable-badge">
                Not currently available.
            </p>
        @endif

        @unless(empty($skills))
            <p style="color: #64748b; font-size: 0.9rem; margin-bottom: 24px;">
                {{ count($skills) }} skills listed above.
            </p>
        @endunless

        <a href="mailto:hero.very@example.com" class="btn">
            Contact Me
        </a>
    </div>

@endsection

@section('footer-extra')
    <p style="margin-top: 6px;">Thanks for visiting Hero's portfolio!</p>
@endsection