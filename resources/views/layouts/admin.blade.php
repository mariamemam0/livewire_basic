<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title ?? 'My App'}}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

    <style>
        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2rem;
            background-color: #fff;
            border-bottom: 1px solid #e5e7eb;
        }

        .nav-left {
            font-size: 1.25rem;
            font-weight: 700;
            text-decoration: none;
            color: #111;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #6b7280;
            font-weight: 500;
        }

        .nav-links a.current {
            color: #111;
            border-bottom: 2px solid #111;
        }

        .nav-right {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body x-data x-on:click="$dispatch('search:clear-results')">

<nav>
    {{-- Left: Home --}}
    <a class="nav-left" wire:navigate href="/dashboard">Admin Dashboard</a>
    <a class="nav-left" wire:navigate href="/dashboard/articles">Articles</a>


    {{-- Middle: Nav Links --}}
    <div class="nav-links">
        <a wire:navigate href="/posts"
            @class(['current' => request()->is('posts')])>
            Posts
        </a>
        <a wire:navigate href="/posts/create"
            @class(['current' => request()->is('posts/create')])>
            Create Posts
        </a>
    </div>


</nav>

{{ $slot }}

@livewireScripts

<script data-navigate-once>
    console.log('page loaded');
</script>

</body>
</html>
