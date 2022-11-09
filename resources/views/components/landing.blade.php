<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}
</title>
<script src="//cdn.tailwindcss.com"></script>
<script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    
    <!-- Navbar -->
    <div class="bg-purple-900 w-full sticky top-0" style="z-index: 99999;" x-data="{ showBar: false }" :class="{ 'shadow-xl transition duration-500' : showBar }"
    @scroll.window="showBar = (window.pageYOffset > 20) ? true : false">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:py-6 lg:px-8 flex justify-between flex-wrap items-center"
            x-data="{ isOpen: false }"
            @keydown.escape="isOpen = false"
            @click.outside="isOpen = false"
        >
            <!-- Logo -->
            <a class="text-white no-underline hover:text-white hover:no-underline py-4 lg:py-0 inline-block" href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 0 140.27 45.146"><defs><style>.a{fill:#ffffff;}.b{fill:#ffffff;}.c{fill:#fff;}</style></defs><g transform="translate(-472.645 -394.502)"><g transform="translate(472.645 394.502)"><path class="a" d="M450.564,417.836a21.746,21.746,0,0,1-.808-20.182l.191-.4-.8-.382-.191.4a22.607,22.607,0,0,0,18.611,32.234l.444.038.069-.881-.44-.034A21.767,21.767,0,0,1,450.564,417.836Z" transform="translate(-446.772 -384.402)"></path><path class="b" d="M486.181,376.631l-.479-.038v20.266l17.554-10.133-.274-.4A22.554,22.554,0,0,0,486.181,376.631Z" transform="translate(-461.762 -376.593)"></path><path class="a" d="M463.423,378.127l-.2-.243A3.455,3.455,0,0,0,457.1,380.1a3.4,3.4,0,0,0,.236,1.221l.114.3-.243.2a22.774,22.774,0,0,0-4.111,4.51l-.274.4,17.553,10.133V376.593l-.479.038a22.706,22.706,0,0,0-6.181,1.384Zm-2.848,4.558a2.569,2.569,0,0,1-2.56-2.328,1.825,1.825,0,0,1-.025-.257,2.589,2.589,0,0,1,2.585-2.588,2.546,2.546,0,0,1,1.492.482,2.581,2.581,0,0,1-1.492,4.69Z" transform="translate(-449.103 -376.593)"></path><path class="a" d="M505.624,397.251l-.2-.434-17.557,10.136L505.42,417.09l.2-.437a22.623,22.623,0,0,0,0-19.4Z" transform="translate(-462.594 -384.38)"></path><path class="b" d="M502.981,427.574l.274-.4L485.7,417.046v20.27l.475-.042A22.541,22.541,0,0,0,502.981,427.574Z" transform="translate(-461.762 -392.17)"></path></g><g transform="translate(529.27 394.502)"><path class="c" d="M532.255,412.62a.769.769,0,0,1-.825-.784v-.99a.748.748,0,0,1,.825-.784H534.9V386.293h-2.641a.748.748,0,0,1-.825-.784v-.991a.769.769,0,0,1,.825-.784h4.787c.867,0,1.279.371,1.279,1.279v25.048H541a.769.769,0,0,1,.825.784v.99a.793.793,0,0,1-.825.784Zm16.919-.33-8.376-8.625a1.934,1.934,0,0,1-.62-1.444,2.078,2.078,0,0,1,.661-1.485l5.529-6.108H543.85a.806.806,0,0,1-.867-.784v-.95a.805.805,0,0,1,.867-.784h7.635a.769.769,0,0,1,.825.784v.991a.77.77,0,0,1-.825.784h-1.692l-6.438,6.974,8.335,8.418a1.607,1.607,0,0,1-.124,2.435A1.7,1.7,0,0,1,549.174,412.29Z" transform="translate(-531.43 -383.61)"></path><path class="c" d="M573.492,415.145h-8.913a.806.806,0,0,1-.867-.784v-.99a.782.782,0,0,1,.867-.784h2.6V399.959l-2.806-2.806a1.2,1.2,0,0,1-.082-1.815l.453-.454a1.24,1.24,0,0,1,1.856.041l3.137,3.137a5.893,5.893,0,0,1,5.736-3.838h.826c1.2,0,1.815.537,1.815,1.527v.207c0,.907-.66,1.4-1.61,1.4h-.99c-3.012,0-4.87,1.9-4.87,5.282v9.945h2.848a.782.782,0,0,1,.866.784v.99A.805.805,0,0,1,573.492,415.145Z" transform="translate(-539.201 -386.135)"></path><path class="c" d="M588.71,412.581a.814.814,0,0,1-.867-.825v-.991a.806.806,0,0,1,.867-.784h2.682V394.63H588.71a.806.806,0,0,1-.867-.784v-.991a.805.805,0,0,1,.867-.784h4.828c.866,0,1.32.371,1.32,1.279v16.63h2.724a.8.8,0,0,1,.866.784v.991a.812.812,0,0,1-.866.825Zm3.59-23.975a1.421,1.421,0,0,1-1.526-1.569v-1.9a1.421,1.421,0,0,1,1.526-1.568h1.031a1.422,1.422,0,0,1,1.528,1.568v1.9a1.422,1.422,0,0,1-1.528,1.569Z" transform="translate(-545.01 -383.571)"></path><path class="c" d="M608.614,412.62a.77.77,0,0,1-.825-.784v-.99a.748.748,0,0,1,.825-.784h2.724V386.293h-2.724a.748.748,0,0,1-.825-.784v-.991a.77.77,0,0,1,.825-.784h4.87c.867,0,1.279.371,1.279,1.279v25.048h2.765a.749.749,0,0,1,.826.784v.99a.771.771,0,0,1-.826.784Z" transform="translate(-549.811 -383.61)"></path><path class="c" d="M628.506,412.62a.77.77,0,0,1-.826-.784v-.99a.749.749,0,0,1,.826-.784h2.724V386.293h-2.724a.749.749,0,0,1-.826-.784v-.991a.77.77,0,0,1,.826-.784h4.869c.866,0,1.279.371,1.279,1.279v25.048h2.765a.748.748,0,0,1,.825.784v.99a.769.769,0,0,1-.825.784Z" transform="translate(-554.599 -383.61)"></path><g transform="translate(1.216 33.641)"><path class="c" d="M533.032,436.144v-.03a4.079,4.079,0,0,1,6.906-2.96.549.549,0,0,1,.182.41.56.56,0,0,1-.561.562.606.606,0,0,1-.38-.137,3.024,3.024,0,0,0-2.14-.942,2.9,2.9,0,0,0-2.809,3.036v.03a2.932,2.932,0,0,0,2.884,3.051,3.133,3.133,0,0,0,2.185-.956.463.463,0,0,1,.334-.152.548.548,0,0,1,.531.531.53.53,0,0,1-.152.364,3.951,3.951,0,0,1-2.96,1.259A4.029,4.029,0,0,1,533.032,436.144Z" transform="translate(-533.032 -428.874)"></path><path class="c" d="M547.289,432.718a.59.59,0,0,1,.577-.591.583.583,0,0,1,.592.591v1.473a3.248,3.248,0,0,1,2.7-2.095.562.562,0,0,1,.577.591.58.58,0,0,1-.516.592c-1.518.182-2.762,1.32-2.762,3.582v2.671a.585.585,0,1,1-1.169,0Z" transform="translate(-536.464 -428.893)"></path><path class="c" d="M557.588,432.7a.59.59,0,0,1,.577-.592.584.584,0,0,1,.592.592v.8a2.865,2.865,0,0,1,2.534-1.487,2.665,2.665,0,0,1,2.519,1.563,3.126,3.126,0,0,1,2.763-1.563c1.806,0,2.914,1.214,2.914,3.157v4.341a.585.585,0,1,1-1.169,0v-4.068c0-1.517-.759-2.367-2.034-2.367a2.186,2.186,0,0,0-2.155,2.428v4.007a.584.584,0,1,1-1.168,0v-4.1c0-1.472-.774-2.338-2.019-2.338a2.274,2.274,0,0,0-2.185,2.474v3.962a.571.571,0,0,1-.577.592.583.583,0,0,1-.592-.592Z" transform="translate(-538.943 -428.874)"></path><path class="c" d="M578.165,436.144v-.03a4.079,4.079,0,0,1,6.906-2.96.549.549,0,0,1,.181.41.56.56,0,0,1-.561.562.605.605,0,0,1-.38-.137,3.024,3.024,0,0,0-2.14-.942,2.9,2.9,0,0,0-2.809,3.036v.03a2.932,2.932,0,0,0,2.884,3.051,3.133,3.133,0,0,0,2.186-.956.463.463,0,0,1,.334-.152.548.548,0,0,1,.531.531.533.533,0,0,1-.151.364,3.952,3.952,0,0,1-2.96,1.259A4.029,4.029,0,0,1,578.165,436.144Z" transform="translate(-543.896 -428.874)"></path><path class="c" d="M592.562,428.469a.585.585,0,1,1,1.169,0v10.048a.571.571,0,0,1-.577.592.583.583,0,0,1-.592-.592Z" transform="translate(-547.362 -427.878)"></path><path class="c" d="M599.241,436.144v-.03a4.09,4.09,0,0,1,8.18-.03v.03a4.074,4.074,0,0,1-4.113,4.1A4.02,4.02,0,0,1,599.241,436.144Zm6.982,0v-.03a2.969,2.969,0,0,0-2.914-3.066,2.9,2.9,0,0,0-2.869,3.036v.03a2.943,2.943,0,0,0,2.9,3.051A2.9,2.9,0,0,0,606.223,436.144Z" transform="translate(-548.97 -428.874)"></path><path class="c" d="M621.685,439.543a.577.577,0,1,1-1.154,0v-.85a2.988,2.988,0,0,1-2.686,1.533,2.866,2.866,0,0,1-3.005-3.142v-4.357a.571.571,0,0,1,.577-.591.592.592,0,0,1,.591.591V436.8a2.092,2.092,0,0,0,2.171,2.367,2.317,2.317,0,0,0,2.352-2.459v-3.977a.571.571,0,0,1,.578-.591.58.58,0,0,1,.576.591Z" transform="translate(-552.725 -428.903)"></path><path class="c" d="M636.84,438.518a.584.584,0,1,1-1.169,0v-1.063a3.529,3.529,0,0,1-3.005,1.746,3.828,3.828,0,0,1-3.749-4.068v-.03a3.851,3.851,0,0,1,3.749-4.083,3.543,3.543,0,0,1,3.005,1.669v-4.219a.57.57,0,0,1,.576-.591.583.583,0,0,1,.592.591Zm-6.724-3.43v.03a2.834,2.834,0,0,0,2.762,3.036,2.93,2.93,0,0,0,2.838-3.036v-.03a2.916,2.916,0,0,0-2.838-3.02A2.769,2.769,0,0,0,630.116,435.087Z" transform="translate(-556.113 -427.878)"></path></g></g></g></svg>
            </a>
            <!-- Hamburger button (hidden on large screen) -->
            <button type="button" class="block lg:hidden"
            @click="isOpen = !isOpen"
            :class="{ 'transition transform-180': isOpen }"
            >
            <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                <path x-show="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
            </svg>
            </button>
            <!--Menu-->
            <div class="hidden lg:block"
                :class="{ 'block w-full lg:w-fit flex-grow': isOpen, 'hidden': !isOpen }"
                x-show.transition="true">
                
                <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 no-underline font-bold {{ request()->routeIs('landing.home') ? 'text-white' : 'text-gray-200 hover:text-white' }}" href="{{ route('home') }}" @click="isOpen = false">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block no-underline py-2 px-4 font-bold {{ request()->routeIs('landing.features') ? 'text-white' : 'text-gray-200 hover:text-white' }}" href="{{ route('about') }}" @click="isOpen = false">Features</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block no-underline py-2 px-4 font-bold {{ request()->routeIs('landing.pricing') ? 'text-white' : 'text-gray-200 hover:text-white' }}" href="{{ route('pricing') }}" @click="isOpen = false">Pricing</a>
                    </li>
                    <li class="mr-3 pb-8 lg:pb-0">
                        <a class="inline-block text-purple-900 no-underline py-2 px-4 font-bold rounded-lg {{ request()->routeIs('landing.try') ? 'bg-white' : 'bg-gray-100 hover:bg-white' }}" href="{{ route('contacts') }}" @click="isOpen = false">Try for free!</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End navbar -->
            {{ $slot }}
        <!-- Footer -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:py-6 lg:px-8">
        <div  tabindex="0" aria-label="footer" class="focus:outline-none w-full border-gray-300 dark:border-gray-700 border-t w-full">
            <div class="container mx-auto py-12">
                <div class="xl:flex lg:flex md:flex pt-6">
                    <div class="w-11/12 xl:w-3/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0">
                        <div class="flex items-center mb-6 xl:mb-0 lg:mb-0">
                           <div aria-label="logo" role="img">
                           <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 0 140.27 45.146"><defs><style>.a-footer{fill:#581c87;}.b-footer{fill:#581c87;}.c-footer{fill:#581c87;}</style></defs><g transform="translate(-472.645 -394.502)"><g transform="translate(472.645 394.502)"><path class="a-footer" d="M450.564,417.836a21.746,21.746,0,0,1-.808-20.182l.191-.4-.8-.382-.191.4a22.607,22.607,0,0,0,18.611,32.234l.444.038.069-.881-.44-.034A21.767,21.767,0,0,1,450.564,417.836Z" transform="translate(-446.772 -384.402)"></path><path class="b-footer" d="M486.181,376.631l-.479-.038v20.266l17.554-10.133-.274-.4A22.554,22.554,0,0,0,486.181,376.631Z" transform="translate(-461.762 -376.593)"></path><path class="a-footer" d="M463.423,378.127l-.2-.243A3.455,3.455,0,0,0,457.1,380.1a3.4,3.4,0,0,0,.236,1.221l.114.3-.243.2a22.774,22.774,0,0,0-4.111,4.51l-.274.4,17.553,10.133V376.593l-.479.038a22.706,22.706,0,0,0-6.181,1.384Zm-2.848,4.558a2.569,2.569,0,0,1-2.56-2.328,1.825,1.825,0,0,1-.025-.257,2.589,2.589,0,0,1,2.585-2.588,2.546,2.546,0,0,1,1.492.482,2.581,2.581,0,0,1-1.492,4.69Z" transform="translate(-449.103 -376.593)"></path><path class="a-footer" d="M505.624,397.251l-.2-.434-17.557,10.136L505.42,417.09l.2-.437a22.623,22.623,0,0,0,0-19.4Z" transform="translate(-462.594 -384.38)"></path><path class="b-footer" d="M502.981,427.574l.274-.4L485.7,417.046v20.27l.475-.042A22.541,22.541,0,0,0,502.981,427.574Z" transform="translate(-461.762 -392.17)"></path></g><g transform="translate(529.27 394.502)"><path class="c-footer" d="M532.255,412.62a.769.769,0,0,1-.825-.784v-.99a.748.748,0,0,1,.825-.784H534.9V386.293h-2.641a.748.748,0,0,1-.825-.784v-.991a.769.769,0,0,1,.825-.784h4.787c.867,0,1.279.371,1.279,1.279v25.048H541a.769.769,0,0,1,.825.784v.99a.793.793,0,0,1-.825.784Zm16.919-.33-8.376-8.625a1.934,1.934,0,0,1-.62-1.444,2.078,2.078,0,0,1,.661-1.485l5.529-6.108H543.85a.806.806,0,0,1-.867-.784v-.95a.805.805,0,0,1,.867-.784h7.635a.769.769,0,0,1,.825.784v.991a.77.77,0,0,1-.825.784h-1.692l-6.438,6.974,8.335,8.418a1.607,1.607,0,0,1-.124,2.435A1.7,1.7,0,0,1,549.174,412.29Z" transform="translate(-531.43 -383.61)"></path><path class="c-footer" d="M573.492,415.145h-8.913a.806.806,0,0,1-.867-.784v-.99a.782.782,0,0,1,.867-.784h2.6V399.959l-2.806-2.806a1.2,1.2,0,0,1-.082-1.815l.453-.454a1.24,1.24,0,0,1,1.856.041l3.137,3.137a5.893,5.893,0,0,1,5.736-3.838h.826c1.2,0,1.815.537,1.815,1.527v.207c0,.907-.66,1.4-1.61,1.4h-.99c-3.012,0-4.87,1.9-4.87,5.282v9.945h2.848a.782.782,0,0,1,.866.784v.99A.805.805,0,0,1,573.492,415.145Z" transform="translate(-539.201 -386.135)"></path><path class="c-footer" d="M588.71,412.581a.814.814,0,0,1-.867-.825v-.991a.806.806,0,0,1,.867-.784h2.682V394.63H588.71a.806.806,0,0,1-.867-.784v-.991a.805.805,0,0,1,.867-.784h4.828c.866,0,1.32.371,1.32,1.279v16.63h2.724a.8.8,0,0,1,.866.784v.991a.812.812,0,0,1-.866.825Zm3.59-23.975a1.421,1.421,0,0,1-1.526-1.569v-1.9a1.421,1.421,0,0,1,1.526-1.568h1.031a1.422,1.422,0,0,1,1.528,1.568v1.9a1.422,1.422,0,0,1-1.528,1.569Z" transform="translate(-545.01 -383.571)"></path><path class="c-footer" d="M608.614,412.62a.77.77,0,0,1-.825-.784v-.99a.748.748,0,0,1,.825-.784h2.724V386.293h-2.724a.748.748,0,0,1-.825-.784v-.991a.77.77,0,0,1,.825-.784h4.87c.867,0,1.279.371,1.279,1.279v25.048h2.765a.749.749,0,0,1,.826.784v.99a.771.771,0,0,1-.826.784Z" transform="translate(-549.811 -383.61)"></path><path class="c-footer" d="M628.506,412.62a.77.77,0,0,1-.826-.784v-.99a.749.749,0,0,1,.826-.784h2.724V386.293h-2.724a.749.749,0,0,1-.826-.784v-.991a.77.77,0,0,1,.826-.784h4.869c.866,0,1.279.371,1.279,1.279v25.048h2.765a.748.748,0,0,1,.825.784v.99a.769.769,0,0,1-.825.784Z" transform="translate(-554.599 -383.61)"></path><g transform="translate(1.216 33.641)"><path class="c-footer" d="M533.032,436.144v-.03a4.079,4.079,0,0,1,6.906-2.96.549.549,0,0,1,.182.41.56.56,0,0,1-.561.562.606.606,0,0,1-.38-.137,3.024,3.024,0,0,0-2.14-.942,2.9,2.9,0,0,0-2.809,3.036v.03a2.932,2.932,0,0,0,2.884,3.051,3.133,3.133,0,0,0,2.185-.956.463.463,0,0,1,.334-.152.548.548,0,0,1,.531.531.53.53,0,0,1-.152.364,3.951,3.951,0,0,1-2.96,1.259A4.029,4.029,0,0,1,533.032,436.144Z" transform="translate(-533.032 -428.874)"></path><path class="c-footer" d="M547.289,432.718a.59.59,0,0,1,.577-.591.583.583,0,0,1,.592.591v1.473a3.248,3.248,0,0,1,2.7-2.095.562.562,0,0,1,.577.591.58.58,0,0,1-.516.592c-1.518.182-2.762,1.32-2.762,3.582v2.671a.585.585,0,1,1-1.169,0Z" transform="translate(-536.464 -428.893)"></path><path class="c-footer" d="M557.588,432.7a.59.59,0,0,1,.577-.592.584.584,0,0,1,.592.592v.8a2.865,2.865,0,0,1,2.534-1.487,2.665,2.665,0,0,1,2.519,1.563,3.126,3.126,0,0,1,2.763-1.563c1.806,0,2.914,1.214,2.914,3.157v4.341a.585.585,0,1,1-1.169,0v-4.068c0-1.517-.759-2.367-2.034-2.367a2.186,2.186,0,0,0-2.155,2.428v4.007a.584.584,0,1,1-1.168,0v-4.1c0-1.472-.774-2.338-2.019-2.338a2.274,2.274,0,0,0-2.185,2.474v3.962a.571.571,0,0,1-.577.592.583.583,0,0,1-.592-.592Z" transform="translate(-538.943 -428.874)"></path><path class="c-footer" d="M578.165,436.144v-.03a4.079,4.079,0,0,1,6.906-2.96.549.549,0,0,1,.181.41.56.56,0,0,1-.561.562.605.605,0,0,1-.38-.137,3.024,3.024,0,0,0-2.14-.942,2.9,2.9,0,0,0-2.809,3.036v.03a2.932,2.932,0,0,0,2.884,3.051,3.133,3.133,0,0,0,2.186-.956.463.463,0,0,1,.334-.152.548.548,0,0,1,.531.531.533.533,0,0,1-.151.364,3.952,3.952,0,0,1-2.96,1.259A4.029,4.029,0,0,1,578.165,436.144Z" transform="translate(-543.896 -428.874)"></path><path class="c-footer" d="M592.562,428.469a.585.585,0,1,1,1.169,0v10.048a.571.571,0,0,1-.577.592.583.583,0,0,1-.592-.592Z" transform="translate(-547.362 -427.878)"></path><path class="c-footer" d="M599.241,436.144v-.03a4.09,4.09,0,0,1,8.18-.03v.03a4.074,4.074,0,0,1-4.113,4.1A4.02,4.02,0,0,1,599.241,436.144Zm6.982,0v-.03a2.969,2.969,0,0,0-2.914-3.066,2.9,2.9,0,0,0-2.869,3.036v.03a2.943,2.943,0,0,0,2.9,3.051A2.9,2.9,0,0,0,606.223,436.144Z" transform="translate(-548.97 -428.874)"></path><path class="c-footer" d="M621.685,439.543a.577.577,0,1,1-1.154,0v-.85a2.988,2.988,0,0,1-2.686,1.533,2.866,2.866,0,0,1-3.005-3.142v-4.357a.571.571,0,0,1,.577-.591.592.592,0,0,1,.591.591V436.8a2.092,2.092,0,0,0,2.171,2.367,2.317,2.317,0,0,0,2.352-2.459v-3.977a.571.571,0,0,1,.578-.591.58.58,0,0,1,.576.591Z" transform="translate(-552.725 -428.903)"></path><path class="c-footer" d="M636.84,438.518a.584.584,0,1,1-1.169,0v-1.063a3.529,3.529,0,0,1-3.005,1.746,3.828,3.828,0,0,1-3.749-4.068v-.03a3.851,3.851,0,0,1,3.749-4.083,3.543,3.543,0,0,1,3.005,1.669v-4.219a.57.57,0,0,1,.576-.591.583.583,0,0,1,.592.591Zm-6.724-3.43v.03a2.834,2.834,0,0,0,2.762,3.036,2.93,2.93,0,0,0,2.838-3.036v-.03a2.916,2.916,0,0,0-2.838-3.02A2.769,2.769,0,0,0,630.116,435.087Z" transform="translate(-556.113 -427.878)"></path></g></g></g></svg>
                           </div>
                        </div>
                    </div>

                    <div class="w-11/12 xl:w-1/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex flex-col xl:justify-start pl-3 sm:pl-0">

                    </div>
                    <div class="w-11/12 xl:w-1/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex flex-col xl:justify-start pl-3 sm:pl-0">
                        <h2 tabindex="0" class="focus:outline-none text-gray-800 dark:text-white font-bold text-xl mb-6">Getting Started</h2>
                        <ul>
                            <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                <a tabindex="0" class="focus:underline focus:outline-none" href="javascript:void(0)">How to use Krill</a>
                            </li>
                            <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                <a tabindex="0" class="focus:underline focus:outline-none" href="javascript:void(0)">Get a help</a>
                            </li>
                            <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                <a tabindex="0" class="focus:underline focus:outline-none" href="javascript:void(0)">How does it cost?</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-11/12 xl:w-1/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex flex-col xl:justify-start pl-3 sm:pl-0">
                        <h2 tabindex="0" class="focus:outline-none text-gray-800 dark:text-white font-bold text-xl mb-6">Resources</h2>
                        <ul>
                            <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                <a tabindex="0" class="focus:underline focus:outline-none" href="javascript:void(0)">Terms & conditions</a>
                            </li>
                            <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                <a tabindex="0" class="focus:underline focus:outline-none" href="javascript:void(0)">Privacy policy</a>
                            </li>
                            <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                <a tabindex="0" class="focus:underline focus:outline-none" href="javascript:void(0)">Cookie policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="xl:flex flex-wrap justify-between xl:mt-24 mt-16 pb-6 pl-3 sm:pl-0">
                    <div class="w-11/12 xl:w-3/6 mx-auto lg:mx-0 xl:mx-0 mb-6 xl:mb-0">
                        <p tabindex="0" class="focus:outline-none text-gray-800 dark:text-white text-base">2022 Krill. All Rights Reserved | Powered by <a href="https://elaboranext.com" target="_blank" class="hover:text-purple-900 pointer underline">Elabora Next</a></p>
                    </div>
                    <div class="w-11/12 xl:w-1/6 lg:w-1/6 sm:w-11/12 mx-auto lg:mx-0 xl:mx-0 mb-6 lg:mb-0 xl:mb-0 mt-8 lg:mt-8 xl:mt-0">
                        <div class="flex justify-start sm:justify-start xl:justify-end space-x-6 pr-2 xl:pr-0 lg:pr-0 md:pr-0 sm:pr-0">
                            <div>
                                <a aria-label="Twitter" role="link" href="javascript:void(0)">
                                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg2.svg" alt="Twitter">
                                </a>
                            </div>
                            <div>
                                <a aria-label="Instagram" role="link" href="javascript:void(0)">
                                  <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg3.svg" alt="Instagram">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer -->
    <style>
		div#cc_div thead {
			font-weight: bold;
		}
		div#cm #c-inr #c-bns button#c-p-bn {
		  background: #581C87;
		}
		div#cs #c-s-in #s-inr #s-bns #s-all-bn {
		  background: #581C87;
		}
		#cm.bar #c-inr {
		  max-width: 60em !important;
		  margin: 0 auto;
		}
		div#c-bns {
		  max-width: 60em !important;
		  margin: 0 auto !important;
		}
		div#c-txt {
		  padding-bottom: 1.5em;
		}
		div#c-txt a:hover {
		  color: #581C87;
		}
		a.privacy-link {
			color: #fff;
		}
		#c-txt a {
			font-size: unset;
		}
		#s-inr .cc_div .c-bn {
			background: #e5ebef !important;
		}
		button#s-c-bn {
			background: #d8e0e6 !important;
		}
		button.b-tl.exp {
    		color: #2d4156;
		}
	</style>
    {{-- <!-- Cookie consent JS -->
    <script defer="" src="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.7.1/dist/cookieconsent.js"></script>
    <script>
    window.addEventListener('load', function(){
        const cc = initCookieConsent();
        // basic configuration
        cc.run({
            current_lang : 'en',
            theme_css : 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.x/dist/cookieconsent.css',
            page_scripts: true,
            cookie_expiration : 365,
            gui_options: {
                consent_modal : {
                    layout : 'bar',               // box/cloud/bar
                    position : 'bottom center',     // bottom/top + left/right/center
                    transition: 'slide'             // zoom/slide
                },
                settings_modal : {
                    layout : 'box',                 // box/bar
                    // position : 'left',           // left/right
                    transition: 'slide'             // zoom/slide
                }
            },
            onAccept : function(){
                //console.log('Accettato');
            },
            onChange: function(){
                //console.log('Non ha accettato');
            },
            languages : {
                en : {
                    consent_modal : {
                        title :  "Privacy and cookies settings",
                        description :  'We use technologies, such as cookies, to ensure technical functionality and to measure site performance in order to provide you with a better browsing experience. If you click on "Accept", you will consent to the installation of cookies for the purposes indicated. Do you want to avoid the installation of unnecessary cookies? Click on "Reject". If you want to decide which cookies to accept and which to refuse, <a href="javascript:void(0);" aria-label="View cookie settings" data-cc="c-settings"><b>customize your choices</b></a>; you can change your preferences at any time by returning to this site. For more information on cookies and your privacy, we recommend that you consult our <a href="/privacy-policy" target="_blank"><b>Privacy and cookie policy</b></a>.',
                        primary_btn: {
                            text: 'Accept',
                            role: 'accept_all'  //'accept_selected' or 'accept_all'
                        },
                        secondary_btn: {
                            text : 'Reject',
                            role : 'accept_necessary'   //'settings' or 'accept_necessary'
                        }
                    },
                    settings_modal : {
                        title : 'Cookie Settings',
                        save_settings_btn : "Save settings",
                        accept_all_btn : "Accept all",
                        reject_all_btn : "Reject all",
                        close_btn_label: "Close",
                        cookie_table_headers : [
                            {col1: "Name" }, 
                            {col2: "Description" }, 
                            {col3: "Epiration" }
                        ],   
                        blocks : [
                            {
                                title : "",
                                description: 'This site may store or retrieve information from the browser in the form of cookies. Cookies are necessary for the proper functioning of the site and to improve the browsing experience of users as they store some information (eg preferences, internet access device, etc.) useful for subsequent access to the site.'
                            },{
                                title : "Technical cookies",
                                description: 'Technical cookies are absolutely necessary for the website to function properly. These cookies guarantee the basic functionality and security features of the website, anonymously.',
                                toggle : {
                                    value : 'necessary',
                                    enabled : true,
                                    readonly: true
                                },
                                cookie_table: [
                                {
                                    col1: 'cc_cookie',
                                    col2: 'Stores and manages user preferences about cookies.',
                                    col3: '1 year',
                                },
                                {
                                    col1: 'krill_session',
                                    col2: 'Manage the current user session on this website.',
                                    col3: 'Session',
                                },
                                {
                                    col1: 'XSRF-TOKEN',
                                    col2: 'This cookie generates a random token for security purposes.',
                                    col3: 'Session',
                                }
                                ]
                            },{
                                title : "Analytical cookies",
                                description: 'Analytical cookies are used to understand how visitors interact with the website. These cookies help provide information on visitor numbers, bounce rate, traffic source, etc.',
                                toggle : {
                                    value : 'analytics',
                                    enabled : false,
                                    readonly: false
                                },
                                cookie_table: [
                                {
                                    col1: '_ga',
                                    col2: 'Cookie installed by Google Analytic for counting and storing the pages viewed by the current user. It does not collect your personal information.',
                                    col3: '2 years',
                                },
                                {
                                    col1: '_ga_*',
                                    col2: 'Cookie installed by Google Analytic for determining the current user. It does not collect your personal information.',
                                    col3: '1 minute',
                                },
                                ]
                            },
                        ]
                    }
                }
            }
        });
    });
    </script> --}}
</body>
</html>