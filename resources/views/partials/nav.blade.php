<nav class="flex item-center justify-center w-96 h-80 mx-auto">
    <div class="my-10">
        <div class="flex justify-center  ">
            <img src={{ asset('img/Doumou.jpeg') }} alt="chat" class="bg-gray-300 rounded-full scale-75 h-48">
        </div>
        <div class="mb-2 flex justify-center">
            <a href="/"><h1 class="font-medium text-4xl antialiased font-Roboto_Mono">Amine Doumou</h1></a>
        </div>
        <div class="mb-2 flex justify-center">
            <h5 class="antialiased font-Roboto_Mono">Hacker, maker of things</h5>
        </div>
        <div class="flex justify-center">
            <ul class="flex flex-row underline decoration-dotted font-Roboto_Mono">
                <li class="mx-2"><a href={{ route('homepage') }}>Main</a></li>
                <li class="mx-2"><a href={{ route('work') }}>Work</a></li>
                <li class="mx-2"><a href={{ route('contact') }}>Contact</a></li>
            </ul>  
        </div>
    </div>
</nav>