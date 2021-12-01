   {{-- navbar --}}
   <div class="flex flex-wrap place-items-center">
    <section class="relative mx-auto">
        <!-- navbar -->
        <nav class="flex justify-between bg-blue-500 text-white w-screen shadow-lg">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                <a class="text-3xl font-bold font-heading flex-shrink-0" href="/">
                    <img class="h-24 w-full" src="/img/logo2.png" alt="logo">

                </a>
                <!-- Nav Links -->
                <ul class="flex px-4 mx-auto font-semibold font-heading lg:space-x-6">
                    <li class="hover:text-yellow-400  sm:mr-2 md:mr-2"><i
                            class="fas fa-home fa-2x mr-1"></i><a class="hover:text-yellow-400 lg:text-xl"
                            href="/">HOME</a></li>
                    <li class="hover:text-yellow-400 sm:mr-2 md:mr-2"><i
                            class="fas fa-file-search fa-2x mr-1"></i><a
                            class="hover:text-yellow-400 lg:text-xl" href="/review">REVIEW</a></li>
                    <li class="hover:text-yellow-400 sm:mr-2 md:mr-2"><i
                            class="fas fa-video fa-2x mr-1"></i><a class="hover:text-yellow-400 lg:text-xl"
                            href="/video">VIDEO</a></li>
                    <li class="hover:text-yellow-400 sm:mr-2 md:mr-2"><i
                            class="fas fa-tint fa-2x mr-1"></i><a class="hover:text-yellow-400 lg:text-xl"
                            href="/jerkoff">FAPPERS</a></li>
                    <li class="hover:text-yellow-400 sm:mr-2 md:mr-2"><i
                            class="fas fa-camera-retro fa-2x mr-1"></i><a
                            class="hover:text-yellow-400 lg:text-xl" href="http://bollykittens.net/photo/index.php">GALLERY</a></li>
                    <li class="hover:text-yellow-400 sm:mr-2 md:mr-2"><i
                            class="fas fa-poll fa-2x mr-1"></i><a class="hover:text-yellow-400 lg:text-xl"
                            href="">POLL</a></li>
                </ul>
                <!-- Header Icons -->
                <div class=" xl:flex md:flex-col sm:flex-col lg:flex-row  items-center">

                    <!-- Sign In / Register      -->


                    @if(!Auth::user())
                    <a class="flex items-center hover:text-yellow-400 text-xl font-semibold justify-end mr-2"
                        href="/login">
                        <i class="fas fa-sign-in-alt fa-2x mr-1 lg:fa-2x"></i>
                        <span class="sm:hidden md:hidden lg:block">LOGIN</span>
                    </a>
                    <a class="flex items-center hover:text-yellow-400 text-xl font-semibold justify-end sm:mt-2 mr-2 md:mt-2 lg:mt-0"
                        href="/register">
                        <i class="fas fa-registered fa-2x mr-1 lg:fa-2x"></i>
                        <span class="sm:hidden md:hidden lg:block">REGISTER</span>
                    </a>

                    @else

                    <a class="flex items-center hover:text-yellow-400 text-xl font-semibold justify-end mr-4 mt-4"
                        href="/user/profile">
                        <i class="fas fa-user-circle fa-2x mr-1 lg:fa-2x"></i>
                        <span class="sm:hidden md:hidden lg:block text-base ">PROFILE</span>
                        {{-- <div class="flex-col text-sm">Moreshwar</div> --}}
                        {{-- <button class="bg-yellow-500 rounded-full p-2 hover:bg-yellow-400 text-center">PROFILE</button> --}}
                    </a>

                    <a class="flex items-center hover:text-yellow-400 text-xl font-semibold justify-start sm:mt-4"
                        href="/dashboard">
                        <i class="fas fa-chart-pie  fa-2x mr-1 lg:fa-2x "></i>
                        <span class="sm:hidden md:hidden lg:block text-base ">DASHBOARD</span>
                        {{-- <div class="flex-col text-sm">Moreshwar</div> --}}
                        {{-- <button class="bg-yellow-500 rounded-full p-2 hover:bg-yellow-400 text-center">PROFILE</button> --}}
                    </a>



                    @endif
                </div>
            </div>

        </nav>

    </section>
</div>
