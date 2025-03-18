<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <style type="text/tailwindcss">
            @theme {
                --color-myblue: oklch(43.05% 0.2344 270.28);
                --animate-fadeout: fadeout 2s ease-out;
            }
            @keyframes fadeout {
                0% {
                    opacity: 1;
                }
                100% {
                    opacity: 0;
                }
            }
        </style>

    </head>
    <body class="bg-myblue">

        <!--Modal-->
        <div class="modal fixed w-full h-full top-0 left-0 pointer-events-none flex items-center justify-center bg-myblue delay-300 animate-fadeout opacity-0">
            <div class="relative w-full h-full">
                <!-- Image centered at the bottom, full width -->
                <img src="/img/welcome.webp" alt="Centered Image" class="absolute bottom-0 w-full object-cover">
            </div>
        </div>

        <!-- Header Section -->
        <header class="bg-myblue">
            <div class="container mx-auto py-6 px-4 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white font-[Quintessential]">Dear Journal</h1>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="#home" class="text-white hover:text-gray-800">Entries</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="bg-white">

        </section>

        <footer>

        </footer>

    </body>
</html>