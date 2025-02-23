<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style/css/style.css">
    <link rel="short icon" href="Assets/public/favicon.png">
    <title>NiseNime - Homepage</title>
</head>

<body>
    <!-- Warning Pembatas Layar -->
    <div id="ww" class="h-screen">
        <div class="h-screen flex justify-center items-center">
            <div>
                <p id="warning" class="text-red-500 font-bold text-4xl text-center"></p>
                <p id="msg" class="text-center text-xl font-bold"></p>
            </div>
        </div>
    </div>

    <div id="tw">
        <p id="text" class="absolute z-10 text-end w-screen text-white"></p>
    </div>

    <!-- MAIN -->
    <div id="wrap">
        <div class="bg-linear-to-tr from-[#030015] to-[#0A0040]">
            <!-- NAVBAR -->
            <div class="fixed bg-transparent h-screen w-[5rem]">
                <div>
                    <img src="Assets/public/favicon.png" class="px-1 py-3" alt="icon">
                </div>

                <div class="flex justify-center py-3">
                    <a href="#" class="text-center text-4xl font-bold px-1 py-3 text-[#1B00DC]" title="Homepage">
                        <i class="fa-solid fa-home"></i>
                        <p class="text-sm">Homepage</p>
                    </a>
                </div>

                <div class="flex justify-center py-3">
                    <a href="#" class="text-center text-4xl font-bold px-1 py-3 text-white hover:text-[#1B00DC]" title="Jadwal Rilis">
                        <i class="fa-solid fa-calendar"></i>
                        <p class="text-sm">Jadwal</p>
                    </a>
                </div>

                <div class="flex justify-center py-3">
                    <a href="#" class="text-center text-4xl font-bold px-1 py-3 text-white hover:text-[#1B00DC]" title="Movie">
                        <i class="fa-solid fa-film"></i>
                        <p class="text-sm">Movie</p>
                    </a>
                </div>

                <div class="flex justify-center py-3">
                    <a href="#" class="text-center text-4xl font-bold px-1 py-3 text-white hover:text-[#1B00DC]" title="Completed">
                        <i class="fa-solid fa-circle-play"></i>
                        <p class="text-sm">Completed</p>
                    </a>
                </div>

                <div class="flex justify-center py-3">
                    <a href="#" class="text-center text-4xl font-bold px-1 py-3 text-white hover:text-[#1B00DC]" title="On-Going">
                        <i class="fa-solid fa-clock"></i>
                        <p class="text-sm">On-Going</p>
                    </a>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="relative left-[5rem] w-[calc(100%-5rem)]">
                <!-- SEARCH BAR -->
                <div class="py-4 px-5 flex justify-center">
                    <form action="#" method="post">
                        <div class="flex">
                            <input type="text" class="bg-[rgba(43,43,43,0.56)] border-[rgba(43,43,43,0.76)] border-2 h-12 w-96 rounded-tl-xl rounded-bl-xl focus:outline-none focus:border-[#1B00DC] px-2 placeholder:text-[#9C9C9C]" placeholder="Search Anime...">
                            <button class="hover:cursor-pointer text-white w-20 h-12 bg-[rgba(43,43,43,0.76)] border-[rgba(43,43,43,0.76)] rounded-br-xl rounded-tr-xl hover:bg-[rgba(79,79,79,0.76)]">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- ON-GOING ANIME -->
                <div>
                    <div class="grid grid-cols-2 text-white px-5 py-3">
                        <div class="flex justify-start">
                            <h1 class="font-bold text-lg">On-Going Anime</h1>
                        </div>

                        <div class="flex justify-end">
                            <a href="#" class="hover:underline text-md">
                                See All &raquo;
                            </a>
                        </div>
                    </div>

                    <div class="px-5">
                        <div class="grid sm:grid-cols-4 gap-5">
                            <?php for ($i = 0; $i < 10; $i++): ?>
                                <div class="pb-5">
                                    <a href="#">
                                        <img src="Assets/public/image/poster.png" class="rounded-lg hover:border-2 hover:border-white" alt="poster">
                                    </a>
                                    <p class="text-center text-white">Judul Anime</p>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>

                <!-- COMPLETED ANIME -->
                <div>
                    <div class="grid grid-cols-2 text-white px-5 py-3">
                        <div class="flex justify-start">
                            <h1 class="font-bold text-lg">Completed Anime</h1>
                        </div>

                        <div class="flex justify-end">
                            <a href="#" class="hover:underline text-md">
                                See All &raquo;
                            </a>
                        </div>
                    </div>

                    <div class="px-5">
                        <div class="grid sm:grid-cols-4 gap-5">
                            <?php for ($i = 0; $i < 10; $i++): ?>
                                <div class="pb-5">
                                    <a href="#">
                                        <img src="Assets/public/image/poster.png" class="rounded-lg hover:border-2 hover:border-white" alt="poster">
                                    </a>
                                    <p class="text-center text-white">Judul Anime</p>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>

                <!-- MOVIE ANIME -->
                <div>
                    <div class="grid grid-cols-2 text-white px-5 py-3">
                        <div class="flex justify-start">
                            <h1 class="font-bold text-lg">Movie Anime</h1>
                        </div>

                        <div class="flex justify-end">
                            <a href="#" class="hover:underline text-md">
                                See All &raquo;
                            </a>
                        </div>
                    </div>

                    <div class="px-5">
                        <div class="grid sm:grid-cols-4 gap-5">
                            <?php for ($i = 0; $i < 10; $i++): ?>
                                <div class="pb-5">
                                    <a href="#">
                                        <img src="Assets/public/image/poster.png" class="rounded-lg hover:border-2 hover:border-white" alt="poster">
                                    </a>
                                    <p class="text-center text-white">Judul Anime</p>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/03aca73984.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>