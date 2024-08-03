<nav class="sticky top-0 nav-bar relative px-6 py-6 flex justify-between items-center bg-gray-50">
    <a class="text-3xl font-bold leading-none" href="/">
        <img class="h-16  w-20 rounded-full" src="{{asset('atis-assets/logo/Plogo.jpeg')}}" alt="" width="auto">
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-gray-400 p-3">
            <svg class="block h-4 w-4 fill-current" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
        <li><a class="text-sm text-green-400 hover:text-green-500 font-bold" href="{{url('/')}}">Home</a></li>
        <li class="text-gray-800">
            <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
            </svg>
        </li>
        <li><a class="text-sm text-green-400 hover:text-green-500 font-bold" href="{{url('/About')}}">About Me</a></li>
        <li class="text-gray-800">
            <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
            </svg>
        </li>
        <li><a class="text-sm text-green-400 hover:text-green-500 font-bold" href="{{url('/MyShowcase')}}">My Showcase</a></li>
        <li class="text-gray-800">
            <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
            </svg>
        </li>
        <li><a class="text-sm text-green-400 hover:text-green-500 font-bold" href="{{url('/Resume')}}">Resume</a></li>
        <li class="text-gray-800">
            <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
            </svg>
        </li>
        <li><a class="text-sm text-green-400 hover:text-green-500 button-green font-bold inline-block font-semibold" href={{url("/MyCompany")}}>My Company</a></li>


    </ul>
    <a class="hidden lg:inline-block py-2 px-6 bg-white hover:bg-gray-50 text-sm text-green-600 font-bold rounded-l-xl rounded-t-xl transition duration-200" href="{{url('/Contact')}}">Contact Me</a>

</nav>
<!-- {{--<div class="relative max-w-sm mx-auto ">--}}
{{--    <input class="w-full py-2 px-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" type="search" placeholder="Search">--}}
{{--    <button class="absolute inset-y-0 right-0 flex items-center px-4 text-gray-700 bg-gray-100 border border-gray-300 rounded-r-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">--}}
{{--        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.795 13.408l5.204 5.204a1 1 0 01-1.414 1.414l-5.204-5.204a7.5 7.5 0 111.414-1.414zM8.5 14A5.5 5.5 0 103 8.5 5.506 5.506 0 008.5 14z" />--}}
{{--        </svg>--}}
{{--    </button>--}}
{{--</div>--}} -->
