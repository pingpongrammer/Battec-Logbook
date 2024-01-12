<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/b3f15bab34.js" crossorigin="anonymous"></script>
    <title>BATTEC LOGBOOK</title>
    <link rel="icon" href="img/logo2.png">
    <link rel="stylesheet" href="/assets/css/user-dashboard.css">
    <link rel="stylesheet" href="/assets/css/order.css">
    
</head>

<body class="bg-[#C7FFC9] relative font-roboto font-medium ">

    <div class="grid">

        <header  id="header"class="header w-full fixed pl-60 h-14 shadow-sm bg-[#21351B] shadow-black z-200">
            <div class="flex items-center h-14">
                <div class="ml-3 mr-4 cursor-pointer text-white" onclick="toggleSideBar()" id="sidebarButton">
                    <i class="fa fa-bars text-lg "></i>
                </div>
                <div class="ml-2 text-xs text-white">
                    <h3>BATTEC - LOGBOOK SYSTEM</h3>
                </div>
                <div class="flex-1 flex justify-end mr-6 items-center">
                    <div class="mr-3 hidden sm:block">
                        {{-- <!-- {{auth()->user()->username}} --> --}}
                    </div>
                    <div class="cursor-pointer relative w-11" onclick="avatarDropdown() ">
                        <img class="w-9 h-9" src="img/logo2.png" alt="">
                        {{-- <div class="hidden absolute p-2 bg-[#21351B] -ml-28 rounded-md -mb-32 w-36 z-100" id="avatar">
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="text-center text-white hover:bg-orange-50 hover:text-black p-1 rounded-lg ml-2 w-28"  >
                                    <i class="fa fa-sign-out pr-2"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        </header>

        <div class="sidebar hidden fixed h-screen w-56 shadow-md bg-[#21351B] shadow-[#21351B] z-1"  id="sidebar">
            <div class="flex justify-center items-center p-3 ">
                <div class="">
                    <img class="w-48" src="img/logo6.png" alt="">
                </div>
            </div> 

            <hr class="m-4 mt-2"> 

            <div class="flex mt-2 m-3 hover:bg-orange-50 p-2 rounded-lg duration-300 text-orange-50 hover:text-gray-950" >
                <div class="w-7">
                    <i class="fa fa-home pr-2"></i>
                </div>
                <div class="w-48">
                    <a href="/" class="text-sm">Dashboard</a>
                </div>
            </div>
            <div class="flex mt-2 m-3 hover:bg-orange-50 p-2 rounded-lg duration-300 items-center text-orange-50 hover:text-gray-950">
                    <i class="fa fa-address-card pr-2"></i>
                    <div class="w-48">
                        <a href="/members" class="text-sm">Members</a>
                    </div>
            </div>


            <div class="flex mt-2 m-3 hover:bg-orange-50 p-2 rounded-lg duration-300 text-orange-50 hover:text-gray-950">
                <div class="justify-start w-7">
                    <i class="fa fa-address-book-o pr-2"></i>
                </div>
                <div>
                    <a href="/visitors" class="text-sm">Visitors</a>
                </div>
            </div>

            <div class="flex mt-2 m-3 hover:bg-orange-50 p-2 rounded-lg duration-300 text-orange-50 hover:text-gray-950">
                <div class="justify-start w-7">
                    <i class="fa fa-exclamation-triangle pr-2"></i>
                </div>
                <div>
                    <a href="/resetData" class="text-sm">Reset Data</a>
                </div>
            </div>
        </div>

        <main class="main pl-56 pr-4 mt-20 mb-12 ml-4">
            @yield('content')
         
        </main>

        <!-- Footer -->
        <footer class="fixed bottom-4 w-full text-xs text-gray-800 text-center mt-8">
            @BATTEC | Created by Pingpongrammer
        </footer>
    </div>

    <script src="js/admin-dashboard.js"></script>

</body>

</html>

