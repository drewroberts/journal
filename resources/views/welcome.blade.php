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

        <!-- Navbar Section -->
        <nav class="fixed w-full bg-transparent z-50 top-0">
            <div class="container max-w-3xl justify-self-center flex justify-between items-start">
                <!-- Logo -->
                <div class="bg-myblue text-white p-6 rounded-br-3xl"">
                    <a href="/" class="font-bold text-3xl font-[Quintessential]">Dear Journal</a>
                </div>
                <!-- Menu Link -->
                <div class="bg-myblue text-white p-6 rounded-bl-3xl"">
                    <a href="#" class="font-bold text-lg">Entries</a>
                </div>
            </div>
        </nav>

        <section class="bg-white h-[2000px] w-full max-w-3xl mt-4 mr-4 ml-4 justify-self-center">

        </section>

        <footer>

        </footer>

        <!--Modal-->
        <div class="modal fixed w-full h-full top-0 left-0 pointer-events-none flex items-center justify-center bg-myblue delay-300 animate-fadeout opacity-0">
            <div class="relative w-full h-full">
                <!-- Image centered at the bottom, full width -->
                <img src="/img/welcome.webp" alt="Centered Image" class="absolute bottom-0 w-full object-cover">
            </div>
        </div>

    </body>
</html>