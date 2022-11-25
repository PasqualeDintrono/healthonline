<x-landing>
   {{--  <x-slot name="title">Try now</x-slot> --}}

     <!-- Specifications 1 section -->
     <section class="w-full py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full py-12 lg:px-28 px-8">
                <p class="md:text-3xl text-xl font-bold leading-7 text-center text-gray-700 dark:text-white">Want to try Krill for free?</p>
                <p class="mb-12 md:text-3xl text-xl font-bold leading-7 text-center text-gray-700 dark:text-white">Let’s chat and get a free trial!</p>
                <form method="POST" action="{{route('contactPost')}}">
                    @csrf
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                        <div class="flex flex-col mb-4 lg:mb-0">
                            <label class="text-base font-semibold leading-none text-gray-800 dark:text-white">Name</label>
                            <input tabindex="0" name="name" arial-label="Please input name" type="text" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-sky-800 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100" placeholder="Please input your name" />
                            <span class="text-red-500">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="flex flex-col mb-4 lg:mb-0">
                            <label class="text-base font-semibold leading-none text-gray-800 dark:text-white">Email Address</label>
                            <input tabindex="0" name="email" arial-label="Please input email address" type="email" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-sky-800 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100" placeholder="Please input email address" />
                            <span class="text-red-500">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="flex flex-col mb-4 lg:mb-0">
                            <label class="text-base font-semibold leading-none text-gray-800 dark:text-white">Company name</label>
                            <input tabindex="0" name="company" role="input" arial-label="Please input company name" type="text" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-sky-800 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100" placeholder="Please input company name" />
                        </div>
                        <div class="flex flex-col mb-4 lg:mb-0">
                            <label class="text-base font-semibold leading-none text-gray-800 dark:text-white">Country</label>
                            <input tabindex="0" name="country" arial-label="Please input country name" type="text" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-sky-800 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100" placeholder="Please input country name" />
                        </div>
                        <div class="lg:col-span-2 flex flex-col mb-4 lg:mb-0">
                            <label class="text-base font-semibold leading-none text-gray-800 dark:text-white">Message</label>
                            <textarea tabindex="0" name="message" aria-label="Leave a message" role="textbox" class="h-36 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-sky-800 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100 resize-none"></textarea>
                            <span class="text-red-500">{{ $errors->first('message') }}</span>
                        </div>
                        <div class="lg:col-span-2 mb-4 lg:mb-0">
                            <div class="flex flex-row items-start md:items-center">
                                <input type="checkbox" name="acceptance" id="acceptance" value="value" required>
                                <label class="lg:col-span-2 text-base leading-4 text-gray-600 dark:text-gray-200 ml-4" for="acceptance">You agree to our terms of service, privacy policy and how we use data as stated.</label>
                            </div>
                            <span class="text-red-500">{{ $errors->first('acceptance') }}</span>
                        </div>
                        <div class="lg:col-span-2 flex items-center justify-center w-full">
                            <button class="mt-9 text-base font-semibold leading-none text-white py-4 px-10 bg-sky-800 rounded hover:bg-sky-700 focus:ring-2 focus:ring-offset-2 focus:ring-sky-800 focus:outline-none">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
            @if(session('success'))
                <div class="bg-sky-800 text-white p-4 text-center">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </section>

</x-landing>