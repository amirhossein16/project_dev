<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    {{--    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>
    <style>
        /*
 * View a PURE 100% Tailwind CSS version here:
 * https://play.tailwindcss.com/Vg6H4j8Fux
 */
        .custom {
            border-color: white !important;
        }

        .glow {
            top: -10%;
            left: -10%;
            width: 120%;
            height: 120%;
            border-radius: 100%;
        }

        .glow-1 {
            animation: glow1 4s linear infinite;
        }

        .glow-2 {
            animation: glow2 4s linear infinite;
            animation-delay: 100ms;
        }

        .glow-3 {
            animation: glow3 4s linear infinite;
            animation-delay: 200ms;
        }

        .glow-4 {
            animation: glow4 4s linear infinite;
            animation-delay: 300ms;
        }

        @keyframes glow1 {
            0% {
                transform: translate(10%, 10%) scale(1);
            }
            25% {
                transform: translate(-10%, 10%) scale(1);
            }
            50% {
                transform: translate(-10%, -10%) scale(1);
            }
            75% {
                transform: translate(10%, -10%) scale(1);
            }
            100% {
                transform: translate(10%, 10%) scale(1);
            }
        }

        @keyframes glow2 {
            0% {
                transform: translate(-10%, -10%) scale(1);
            }
            25% {
                transform: translate(10%, -10%) scale(1);
            }
            50% {
                transform: translate(10%, 10%) scale(1);
            }
            75% {
                transform: translate(-10%, 10%) scale(1);
            }
            100% {
                transform: translate(-10%, -10%) scale(1);
            }
        }

        @keyframes glow3 {
            0% {
                transform: translate(-10%, 10%) scale(1);
            }
            25% {
                transform: translate(-10%, -10%) scale(1);
            }
            50% {
                transform: translate(10%, -10%) scale(1);
            }
            75% {
                transform: translate(10%, 10%) scale(1);
            }
            100% {
                transform: translate(-10%, 10%) scale(1);
            }
        }

        @keyframes glow4 {
            0% {
                transform: translate(10%, -10%) scale(1);
            }
            25% {
                transform: translate(10%, 10%) scale(1);
            }
            50% {
                transform: translate(-10%, 10%) scale(1);
            }
            75% {
                transform: translate(-10%, -10%) scale(1);
            }
            100% {
                transform: translate(10%, -10%) scale(1);
            }
        }

    </style>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css'>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="antialiased h-screen overflow-hidden">
<div
    class="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if ($errors->any())
        <div
            class="bg-red-100 border rounded-lg border-red-400 text-red-700 px-4 py-3 relative m-2"
            role="alert">
            <strong class="font-bold">Input Error ! => </strong>
            @foreach ($errors->all() as $error)
                <br><span class="block sm:inline block">{{ $error }}</span>
            @endforeach
        </div>
    @endif
    @if(session('success') || session('edited') || session('Deleted') || session('warning'))
        <div
            class="m-10 bg-teal-100 border-t-4 border-teal-500 text-teal-900 px-4 py-3 shadow-md rounded-lg"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                    </svg>
                </div>
                <div class="my-auto">
                    @if(session('success'))
                        <p class="font-bold">{{session('success') }}</p>
                    @elseif(session('edited'))
                        <p class="font-bold">{{session('edited') }}</p>
                    @elseif(session('Deleted'))
                        <p class="font-bold">{{session('Deleted') }}</p>
                    @elseif(session('warning'))
                        <p class="font-bold">{{session('warning') }}</p>
                    @endif
                </div>
            </div>
        </div>
    @endif
    <div class="relative p-12 w-full sm:max-w-2xl sm:mx-auto">
        <div class="overflow-hidden z-0 rounded-full relative p-3">
            <form action="{{ route('fishing-test') }}" method="POST" role="form"
                  class="relative flex z-50 bg-white rounded-full">
                @csrf
                <input type="text" name="FishingTest" placeholder="enter your search here"
                       class="rounded-full custom flex-1 px-6 py-4 text-gray-700 focus:outline-none">
                <button
                    class="bg-indigo-500 text-white rounded-full font-semibold px-8 py-4 hover:bg-indigo-400 focus:bg-indigo-600 focus:outline-none">
                    Search
                </button>
            </form>
            <div class="glow glow-1 z-10 bg-pink-400 absolute"></div>
            <div class="glow glow-2 z-20 bg-purple-400 absolute"></div>
            <div class="glow glow-3 z-30 bg-yellow-400 absolute"></div>
            <div class="glow glow-4 z-40 bg-blue-400 absolute"></div>
        </div>
    </div>
</div>
</body>
</html>
