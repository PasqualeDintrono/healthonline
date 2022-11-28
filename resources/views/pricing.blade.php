<x-landing>
        <x-slot name="title">Pricing</x-slot>
    
        <!-- Pricing section -->
        <section class="w-full py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:items-center justify-center w-full">
                    <h1 class="font-semibold text-sky-800 dark:text-white text-3xl md:text-4xl">The right plan for your business</h1>
                    <p class="mt-2.5 lg:w-1/2 lg:text-center text-2xl text-gray-500 dark:text-white">We have several plans to showcase your business.<br> Get everything you need</p>
                </div>
                <div class="w-full">
                    <div class="pt-14">
                        <div class="container mx-auto">
                            
                            <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                                <div class="py-5 px-4 bg-white dark:bg-gray-800 border dark:border-gray-700 border-gray-200 shadow rounded-lg text-left mb-8 lg:mb-0 flex flex-col">
                                    <h2 class="text-2xl text-sky-800 font-semibold mb-8">Free trial</h2>
                                        <ul class="flex-1 flex flex-col mb-6">
                                            <li class="flex items-center mb-2.5">
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMark.png" class="mr-4 dark:hidden" alt="check-mark" />
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4 hidden dark:block" alt="check-mark" />
                                                <p class="text-gray-800 dark:text-white text-base font-normal">All basic Krill features.</p>
                                            </li>
                                            <li class="flex items-center mb-2.5">
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMark.png" class="mr-4 dark:hidden" alt="check-mark" />
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4 hidden dark:block" alt="check-mark" />
                                                <p class="text-gray-800 dark:text-white text-base font-normal">Add max 3 users.</p>
                                            </li>
                                            <li class="flex items-center mb-2.5">
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMark.png" class="mr-4 dark:hidden" alt="check-mark" />
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4 hidden dark:block" alt="check-mark" />
                                                <p class="text-gray-800 dark:text-white text-base font-normal">Add max 30 taks per iteration.</p>
                                            </li>
                                        </ul>
                                        <p class="text-base text-sky-800 relative pl-3">
                                            <span class="font-light text-lg">$</span>
                                            <span class="text-2xl font-semibold">0</span>
                                            <span class="font-light text-lg">/month</span>
                                        </p>
{{--                                         <a href="{{ route('landing.try') }}" class="mt-4 flex items-center justify-center rounded-lg border border-transparent bg-sky-800 hover:opacity-90 text-white p-2 text-base font-bold">Get a free trial</a>
 --}}                                </div>
                                <div class="py-5 px-4 bg-sky-800 border dark:border-gray-700 border-gray-200 shadow rounded-lg text-left mb-8 lg:mb-0 flex flex-col">
                                    <h2 class="text-2xl text-white font-semibold mb-8">Enterprise</h2>
                                        <ul class="flex-1 flex flex-col mb-6">
                                            <li class="flex items-center mb-2.5">
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4" alt="check-mark" />
                                                <p class="text-white text-base font-normal">All basic Krill features.</p>
                                            </li>
                                            <li class="flex items-center mb-2.5">
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4" alt="check-mark" />
                                                <p class="text-white text-base font-normal">Unlimited number of users.</p>
                                            </li>
                                            <li class="flex items-center mb-2.5">
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4" alt="check-mark" />
                                                <p class="text-white text-base font-normal">Unlimited number of tasks per iteration.</p>
                                            </li>
                                            <li class="flex items-center mb-2.5">
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4" alt="check-mark" />
                                                <p class="text-white text-base font-normal">Choose your custom subdomain name.</p>
                                            </li>
                                        </ul>
                                        <p class="text-base text-white relative pl-3">
                                            <span class="font-light text-lg">$</span>
                                            <span class="text-2xl font-semibold">8</span>
                                            <span class="font-light text-lg">/month</span>
                                        </p>
                                        <form method="POST" action="{{ route('buy-licence') }}">
                                            @csrf
                                            <input type="hidden" name="plan" value="enterprise">
                                            <button type="submit" class="mt-4 flex items-center justify-center rounded-lg border border-transparent bg-gray-100 hover:bg-white text-sky-800 p-2 text-base font-bold w-full">Pay now</button>
                                            <span class="text-red-500">{{ $errors->first('plan') }}</span>
                                        </form>
                                </div>
                                <div class="py-5 px-4 bg-white dark:bg-gray-800 border dark:border-gray-700 border-gray-200 shadow rounded-lg text-left mb-8 lg:mb-0 flex flex-col">
                                    <h2 class="text-2xl text-sky-800 font-semibold mb-8">Full</h2>
                                        <ul class="flex-1 flex flex-col mb-6">
                                            <li class="flex items-center mb-2.5">
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMark.png" class="mr-4 dark:hidden" alt="check-mark" />
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4 hidden dark:block" alt="check-mark" />
                                                <p class="text-gray-800 dark:text-white text-base font-normal">All basic Krill features.</p>
                                            </li>
                                            <li class="flex items-center mb-2.5">
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMark.png" class="mr-4 dark:hidden" alt="check-mark" />
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4 hidden dark:block" alt="check-mark" />
                                                <p class="text-gray-800 dark:text-white text-base font-normal">Unlimited number of users.</p>
                                            </li>
                                            <li class="flex items-center mb-2.5">
                                                 <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMark.png" class="mr-4 dark:hidden" alt="check-mark" />
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4 hidden dark:block" alt="check-mark" />
                                                <p class="text-gray-800 dark:text-white text-base font-normal">Unlimited number of tasks per iteration.</p>
                                            </li>
                                            <li class="flex items-center mb-2.5">
                                                 <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMark.png" class="mr-4 dark:hidden" alt="check-mark" />
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4 hidden dark:block" alt="check-mark" />
                                                <p class="text-gray-800 dark:text-white text-base font-normal">Choose your custom subdomain name.</p>
                                            </li>
                                            <li class="flex items-center mb-2.5">
                                                 <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMark.png" class="mr-4 dark:hidden" alt="check-mark" />
                                                <img src="https://cdn.tuk.dev/assets/templates/weCare/checkMarkWhite.png" class="mr-4 hidden dark:block" alt="check-mark" />
                                                <p class="text-gray-800 dark:text-white text-base font-normal">Get direct support from our team.</p>
                                            </li>
                                        </ul>
                                        <p class="text-base text-sky-800 relative pl-3">
                                            <span class="font-light text-lg">$</span>
                                            <span class="text-2xl font-semibold">12</span>
                                            <span class="font-light text-lg">/month</span>
                                        </p>
                                        <form method="POST" action="{{ route('buy-licence') }}">
                                            @csrf
                                            <input type="hidden" name="plan" value="full">
                                            <button type="submit" class="mt-4 flex items-center justify-center rounded-lg border border-transparent bg-sky-800 hover:opacity-90 text-white p-2 text-base font-bold w-full">Pay now</button>
                                            <span class="text-red-500">{{ $errors->first('plan') }}</span>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End pricing section -->
</x-landing>