<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Akuntansiku' }}</title>

    @yield('head')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .active {
                @apply ml-3 mb-5 text-blue-700 font-semibold bg-blue-300 p-3 rounded-xl;
            }

            .non-active {
                @apply ml-6 mb-5 text-gray-400 font-semibold;
            }
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                screens: {
                    'sm': '640px',

                    'md': '768px',

                    'lg': '1024px',

                    'xl': '1280px',

                    '2xl': '1536px',
                },
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },
                    keyframes: {
                        slideInUp: {
                            '0%': {
                                transform: 'translateY(100%)',
                                opacity: 0
                            },
                            '100%': {
                                transform: 'translateY(0)',
                                opacity: 1
                            },
                        }
                    },
                    animation: {
                        slideInUp: 'slideInUp 1s ease-in-out'
                    }
                }
            }
        }
    </script>
</head>

<body>

    <div id="root">
        @yield('body')
    </div>

    @yield('scripts')

</body>

</html>
