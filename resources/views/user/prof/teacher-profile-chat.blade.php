<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 overflow-x-hidden margin-auto">
    <!-- Header  -->
    <header class="bg-white ">
        <div class="flex justify-between items-center">
            <div class="flex items-end">
                <div id="logo" class="flex items-center border bg-customRed rounded-br-only">
                    <p class="w-72 h-20 pl-5 pb-2 pr-7 pt-1 text-5xl">Meu Perfil</p>
                </div>
                <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14 mx-10">
                    <a href="{{ url('/teacher-profile')}}#teacher-profile"
                        class="text-red-600  text-3xl font-itim hover:text-purple-900 underline underline-offset-4 hover:pb-3 ">Meus
                        Dados</a>
                    <a href="{{ url('/teacher-profile-mural')}}#teacher-profile-mural"
                        class="text-customBlue text-3xl font-itim hover:text-purple-900 hover:pb-3">Mural</a>
                    <a href="#sponsors"
                        class="text-customBlue text-3xl font-itim hover:text-purple-900 hover:pb-3">Chat</a>
                </nav>
            </div>
            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900 ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
                </a>
            </div>
        </div>
        <div id="mobile-nav" class="md:hidden mr-5 ">
            <button id="mobile-menu-toggle" class="focus:outline-none">
                <img class="h-10" src="{{ asset('images/icons/taskPurple.png') }}" alt="">
            </button>
        </div>
        </div>


        <div id="mobile-menu" class="hidden bg-white  py-2 px-4 ">
            <a href="#" class="text-purple-700 text-lg font-itim py-2  hover:text-purple-900">Meus Dados</a>
            <a href="#aboutus" class="block text-customBlue text-lg font-itim py-2  hover:text-purple-900">Mural</a>
            <a href="#sponsors" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Chat</a>
            <a href="{{ url('/signin') }}"
                class="block  text-customBlue text-lg font-itim py-2 hover:text-purple-900">Entrar</a>
            <a href="{{ url('/signup')}}"
                class="block  text-customBlue text-lg font-itim py-2 hover:text-purple-900">Registrar-se</a>
        </div>
    </header>
    <!-- End Header -->

    <!-- Search -->
    <div class="bg-red-400">
        <div class="flex items-center justify-between p-4">
            <div class="flex flex-row">
                <h1 class="text-black font-bold text-xl">CHAT </h1>
                <img src="{{ asset('images/icons/ChatIcon.png') }}" alt="Logo" class="w-8 h-8 ml-2">
            </div>
            <input type="text" placeholder="Pesquisar"
                class="border border-black rounded-full px-10 py-2  focus:outline-none focus:ring-2 focus:ring-blue-500 w-96">
            <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900 ">
                <img src="{{ asset('images/icons/EditIcon.png') }}" alt="Logo" class="w-8 h-8">
            </a>
        </div>
    </div>
    <!-- END Search -->
    <div class="container mx-auto ">
        <div class="flex h-screen">
            <div class="contact-list w-1/4 bg-purple-100 p-4">

                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                </div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                </div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                </div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                </div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                </div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                </div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                </div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                </div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                </div>
            </div>
            <div class="chat-history w-3/4 ">
                <div class="flex justify-start items-center mb-4 bg-white">
                    <button
                        class="block text-white bg-transparent hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <img src="{{ asset('images/icons/left-arrow.png') }}" alt="Logo" class="w-7 h-7">
                    </button>
                    <div class="flex items-center">
                        <div
                            class=" border-2 rounded-full border-black w-10 h-10 mx-2 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                        <h2 class="text-xl font-bold">Nome</h2>
                        <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="chat-history">
                    <div class="flex justify-start mb-4">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                        <div class="bg-white rounded-lg shadow p-3">
                            <p class="text-gray-700 text-sm">Nome XXXXXXXX</p>
                        </div>
                    </div>
                    <div class="flex justify-end mb-4">
                        <div class="bg-white rounded-lg shadow p-3 text-white">
                            <p class="text-gray-700 text-sm">Nome XXXXXXXX</p>
                        </div>
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <div class="flex justify-start mb-4">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                        <div class="bg-white rounded-lg shadow p-3">
                            <p class="text-gray-700 text-sm">Nome XXXXXXXX</p>
                        </div>
                    </div>
                    <div class="flex justify-end mb-4">
                        <div class="bg-white rounded-lg shadow p-3 text-white">
                            <p class="text-gray-700 text-sm">Nome XXXXXXXX</p>
                        </div>
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <div class="flex justify-start mb-4">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                        <div class="bg-white rounded-lg shadow p-3">
                            <p class="text-gray-700 text-sm">Nome XXXXXXXX</p>
                        </div>
                    </div>
                    <div class="flex justify-end mb-4">
                        <div class="bg-white rounded-lg shadow p-3 text-white">
                            <p class="text-gray-700 text-sm">Nome XXXXXXXX</p>
                        </div>
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <div class="flex justify-start mb-4">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                        <div class="bg-white rounded-lg shadow p-3">
                            <p class="text-gray-700 text-sm">Nome XXXXXXXX</p>
                        </div>
                    </div>
                    <div class="flex justify-end mb-4">
                        <div class="bg-white rounded-lg shadow p-3 text-white">
                            <p class="text-gray-700 text-sm">Nome XXXXXXXX</p>
                        </div>
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <div class="flex justify-start mb-4">
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                        <div class="bg-white rounded-lg shadow p-3">
                            <p class="text-gray-700 text-sm">Nome XXXXXXXX</p>
                        </div>
                    </div>
                    <div class="flex justify-end mb-4">
                        <div class="bg-white rounded-lg shadow p-3 text-white">
                            <p class="text-gray-700 text-sm">Nome XXXXXXXX</p>
                        </div>
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                    <div class="flex justify-end mb-4">
                        <div class="bg-white rounded-lg shadow p-3">
                            <p class="text-gray-700 text-sm">Nome XXXXXXXX</p>
                        </div>
                        <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 h-8 object-cover">
                        </div>
                    </div>
                </div>
                <div class="flex mt-4">
                    <button class="p-2 rounded-full bg-gray-200 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                    <div class="flex-1 relative mr-2">
                        <input type="text" placeholder="Uma mensagem..."
                            class="block w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <button class="p-2 rounded-full bg-transparent ml-2">
                                <img src="{{ asset('images/icons/emojiIcon.png') }}" alt="Logo" class="w-5 h-5">
                            </button>
                            <button class="p-2 rounded-full bg-transparent ml-2">
                                <img src="{{ asset('images/icons/letterAIcon.png') }}" alt="Logo" class="w-5 h-5">
                            </button>
                            <button class="p-2 rounded-full bg-transparent ml-2">
                                <img src="{{ asset('images/icons/uploadIcon.png') }}" alt="Logo" class="w-5 h-5">
                            </button>
                        </div>
                    </div>
                    <button
                        class="block text-white bg-blue-500 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center w-14 h-10 ">
                        <img src="{{ asset('images/icons/right-arrow.png') }}" alt="Logo" class="w-5 h-5">
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>