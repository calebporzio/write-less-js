<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GitTub</title>

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Vue --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="bg-gray-dark p-3">
        <div class="d-flex flex-items-center text-white">
            <svg fill="currentColor" class="octicon octicon-mark-github v-align-middle" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>

            <span class="f2 ml-2" style="font-family: Titillium Web;font-weight: 700;letter-spacing: .05em;">GitTub</span>
        </div>
    </div>

    <div id="app">
        <div class="bg-gray-light pt-3">
            <div class="container">
                <div class="d-flex flex-items-center flex-justify-between mb-3 pagehead">
                    <div class="f3">
                        <a>calebporzio</a> / <a class="text-bold">write-less-js</a>
                    </div>

                    <div class="BtnGroup mr-2">
                        <button class="btn btn-sm BtnGroup-item" type="button">
                            <svg class="octicon octicon-star v-align-text-bottom" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74L14 6z"></path></svg> Star
                        </button>
                        <button class="btn btn-sm btn-outline BtnGroup-item" type="button">1</button>
                    </div>
                </div>
            </div>

            <div class="tabnav">
                @yield('nav')
            </div>
        </div>

        <div class="container">
            @yield('content')
        </div>
    </div>

    {{-- Spacer --}}
    <div style="height: 100px;"></div>
</body>
</html>
