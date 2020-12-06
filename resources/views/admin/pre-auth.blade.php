<x-guest-layout>
    <style>body{background-color: rgba(17,24,39);}</style>
    <script>function addRole(e){var d=document.getElementById("roleForm"),n=document.createElement("input");n.type="hidden",n.name="role_id",n.value=e,d.appendChild(n),d.submit()}</script>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 lg:text-center content-center">

        <div class="px-6 md:max-w-3xl md:mx-auto lg:mx-0 lg:max-w-none">
            <h1 class="mt-3 text-3xl font-semibold font-display text-white sm:mt-6 sm:text-4xl xl:text-5xl">
                Još samo malo..
                <br class="hidden sm:inline">
                <span class="text-teal-400">registruj se kao :</span>
            </h1>
         
            <div class="mt-6 sm:flex sm:mt-8 xl:mt-12 justify-center">
                <form id='roleForm' action="{{url('/pre-auth')}}" method="post">
                     @csrf
                </form>

                <a href="#" onclick="addRole('0'); return false;" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-md text-gray-900 bg-white shadow-sm hover:text-gray-600 focus:outline-none focus:text-gray-600 transition ease-in-out duration-150 xl:text-lg xl:py-4">
                    ← Kandidat 
                </a>
                <a href="#" onclick="addRole('1'); return false;" class="mt-4 sm:ml-4 sm:mt-0 w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150 xl:text-lg xl:py-4">
                    Poslodavac →
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>

