<div>
{{--    Navbar--}}
    <nav class="py-5 bg-white px-[10%] flex justify-between items-center">
{{--        Forum Logo--}}
        <h1 class="text-3xl">{{env("APP_NAME")}}</h1>
{{--        Desktop Nav--}}
{{--        Search Bar--}}
        <form action="" class="md:block hidden">
            <div class="relative flex items-center">
                <input type="text" class="outline-none pr-9 py-2 border-2 rounded-lg hover:ring-2 hover:ring-offset-2 hover:ring-blue-600 hover:ring-offset-white transition-all focus:ring-0 focus:border-blue-600 peer" placeholder="جست و جو در گفت و گو ها ...">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute right-2 pointer-events-none peer-focus:text-blue-600 text-gray-400 transition">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </form>

{{--        Guest Navigation--}}
        @guest
        <div class="gap-10 md:flex hidden">
            <a href="{{route('login')}}" wire:navigate class="flex items-center gap-1 text-blue-600 hover:text-blue-500 transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
                ورود
            </a>
            <a href="" wire:navigate class="flex items-center gap-1 bg-blue-600 hover:bg-blue-700 px-5 py-1.5 rounded-lg text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>

                ثبت نام
            </a>
        </div>
        @endguest
{{--        Auth Navigation--}}
        @auth
            <div x-data="{open:false}" class="md:block hidden">
                <button class="flex gap-2 items-center" @click="open = !open" x-ref="button">
                    {{auth()->user()->name}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transition-all" :class="{'rotate-180':open}">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div x-anchor="$refs.button" class="bg-white rounded-lg border-2 p-5 flex flex-col gap-2" x-show="open" x-transition>
                    <a href="{{route('logout')}}" wire:navigate class="flex gap-1 items-center text-red-600 hover:text-red-700 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                          خروج از حساب کاربری
                    </a>
                </div>
            </div>
        @endauth

{{--        Mobile Nav--}}
    </nav>
</div>
