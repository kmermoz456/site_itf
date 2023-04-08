<header class="bg-gray-(00">
    <nav class=" ">
    <div class="p-1  hidden items-center md:flex  justify-between">
        <a href="#"><img width="50" src="{{asset('img/icon.png')}}" alt=""></a>
        <ul class="flex">
            <li class="mx-3 font-semibold text-gray-900 hover:text-green-700"><a href="#">Licence 1</a></li>
            <li class="mx-3 font-semibold text-gray-900 hover:text-green-700"><a href="#">Licence 2</a></li>
            <li class="mx-3 font-semibold text-gray-900 hover:text-green-700"><a href="#">A propos de nous </a></li>

        </ul>

        <ul class="flex">
            <li class="mx-3 p-2 rounded-md shadow-md font-bold  border-2 hover:bg-gray-100 transition border-green-700 bg-white"><a href="#">Créer un compte</a></li>
            <li class="mx-3 p-2 rounded-md shadow-md  font-bold text-white bg-green-700 border-1"><a href="#">Connexion </a></li>

        </ul>
        </div>
   <!--MENU MOBILE-->
        <div class="md:hidden" x-data="{ open: false }"
        >
            <div class="flex justify-between p-2">
            <a href="#" x-on:click="open = ! open"><img width="50" src="{{asset('img/menu-outline.svg')}}" alt=""></a>
            <a href="#"><img width="50" src="{{asset('img/icon.png')}}" alt=""></a>

            </div>
        <div  x-show="open" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="p-1 absolute w-[100%] flex bg-white  flex-col ">
        <ul class="flex flex-col gap-y-2 ">
            <li class="mx-3 font-semibold text-gray-900 hover:text-green-700"><a href="#">Licence 1</a></li>
            <li class="mx-3 font-semibold text-gray-900 hover:text-green-700"><a href="#">Licence 2</a></li>
            <li class="mx-3 font-semibold text-gray-900 hover:text-green-700"><a href="#">A propos de nous </a></li>

        </ul>

        <ul class="flex  gap-y-2 ">
            <li class="mx-3 p-2 rounded-md shadow-md font-bold  border-2 hover:bg-gray-100 transition border-green-700 bg-white"><a class="inline" href="#">Créer un compte</a></li>
            <li class="mx-3 p-2 rounded-md shadow-md  font-bold text-white bg-green-700 border-1"><a class="inline" href="#">Connexion </a></li>

        </ul>
        </div>
        </div>
    </nav>

    <div class="bg-green-500 ">
    <div class="flex md:flex-row flex-col items-center">
        <div class="p-2 text-center">
            <h1 class="text-6xl font-bold">Intellect Tronc SN Formation</h1>

            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum enim porro harum error nostrum magnam temporibus illum? Nam facere, illum officia fugit eum voluptates inventore tempore excepturi labore architecto libero.
            </p>
            <p class="my-5">
                <a href="#" class="p-2 shadow-md font-bold rounded-md text-green-700 bg-white">rejoignez-nous des maintenant"</a>
            </p>
        </div>
        <div class="bg-white">
            <img class="" src="{{asset('img/banner.png')}}" alt="" srcset="">
        </div>
    </div>
    </div>
</header>