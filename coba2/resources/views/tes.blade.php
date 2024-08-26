<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <a href="#" class="text-xl font-bold text-gray-800">FIKIAS</a>
            <nav>
                <a href="#" class="mx-3 text-gray-700 hover:text-gray-900">Home</a>
                <a href="#" class="mx-3 text-gray-700 hover:text-gray-900">Features</a>
                <a href="#" class="mx-3 text-gray-700 hover:text-gray-900">Pricing</a>
                <a href="#" class="mx-3 text-gray-700 hover:text-gray-900">Contact</a>
            </nav>
        </div>
    </header>


    <!-- landing page(gambar) -->
    <section style="background-image: url('{{ asset('image/basreng 3.jpg') }}');"
        class="relative bg-cover bg-center py-20">
        <div class="absolute inset-0 opacity-30"></div> <!-- Overlay untuk meningkatkan kontras -->
        <div class="container relative z-10 mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold text-white">Welcome to FIKIAS</h1>
            <p class="mt-4 text-white">We offer the best solutions to grow your business.</p>
            <a href="/login" class="mt-6 inline-block rounded-lg bg-blue-500 px-6 py-3 text-white">Get Started</a>
        </div>
    </section>

    <!--subscribe start-->
    <div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                <div class="max-w-xl lg:max-w-lg">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">buat jadi tempat login 
                    </h2>
                    <p class="mt-4 text-lg leading-8 text-gray-300">Nostrud amet eu ullamco nisi aute in ad minim
                        nostrud adipisicing velit quis. Duis tempor incididunt dolore.</p>
                    <div class="mt-6 flex max-w-md gap-x-4">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
                            placeholder="Enter your email">
                        <button type="submit"
                            class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribe</button>
                    </div>
                </div>
                <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-white">Weekly articles</dt>
                        <dd class="mt-2 leading-7 text-gray-400">Non laboris consequat cupidatat laborum magna. Eiusmod
                            non irure cupidatat duis commodo amet.</dd>
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                            </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-white">No spam</dt>
                        <dd class="mt-2 leading-7 text-gray-400">Officia excepteur ullamco ut sint duis proident non
                            adipisicing. Voluptate incididunt anim.</dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
            <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>

    {{-- about us page start --}}
    <div class="container mx-auto py-16 ">
        <div class="flex flex-wrap -mx-4">
            <!-- Bagian Foto di Kiri -->
            <div class="w-full lg:w-1/2 px-4">
                <div class="flex flex-wrap -mx-2">
                    <!-- Foto Kiri Atas -->
                    <div class="w-1/2 px-2 mb-3">
                        <img class="object-cover w-full h-full rounded-lg shadow-lg" src="{{ asset('image/basreng.jpg') }}" alt="Example Image" style="width: 400px; height: 300px;">
                    </div>
                    <!-- Foto Kanan Atas -->
                    <div class="w-1/2 px-2 mb-3">
                        <img class="object-cover w-full h-full rounded-lg shadow-lg" src="{{ asset('image/basreng.jpg') }}" alt="Example Image" style="width: 200px; height: 300px;">
                    </div>
                    <!-- Foto Kiri Bawah -->
                    <div class="w-1/2 px-3 mb-3 flex justify-end">
                        <img class="object-cover w-full h-full rounded-lg shadow-lg" src="{{ asset('image/basreng.jpg') }}" alt="Example Image" style="width: 200px; height: 300px;">
                    </div>
                    <!-- Foto Kanan Bawah -->
                    <div class="w-1/2 px-2 mb-3">
                        <img class="object-cover w-full h-full rounded-lg shadow-lg" src="{{ asset('image/basreng.jpg') }}" alt="Example Image" style="width: 400px; height: 300px;">
                    </div>
                </div>
            </div>
            
    
            <!-- Bagian Teks di Kanan -->
            <div class="w-full lg:w-1/2 px-4">
                <div class="mb-6">
                    <p class="text-lg font-medium text-teal-600 italic">About Us</p>
                    <h1 class="text-4xl font-bold text-gray-900">The success history of TEA House in 25 years</h1>
                </div>
                <div class="mb-6">
                    <div class="flex mb-4">
                        <div class="w-2/3 pl-2">
                            <h5 class="text-xl font-semibold text-gray-800">Our tea is one of the most popular drinks in the world</h5>
                            <p class="text-gray-600">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</p>
                        </div>
                    </div>
                    <hr class="my-4 border-gray-300">
                    <div class="flex">
                        <div class="w-2/3 pr-2">
                            <h5 class="text-xl font-semibold text-gray-800">Daily use of a cup of tea is good for your health</h5>
                            <p class="text-gray-600">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     {{-- Shop page start --}}
     <div class="mx-auto px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-20">
        <div class="mb-10 max-w-xl sm:text-center md:mx-auto md:mb-12 lg:max-w-2xl">
            <div>
                <p
                    class="bg-teal-accent-400 mb-4 inline-block rounded-full px-3 py-px text-xs font-semibold uppercase tracking-wider text-teal-900">
                    Brand new
                </p>
            </div>
            <h2
                class="mb-6 max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="text-blue-gray-100 absolute left-0 top-0 z-0 -ml-20 -mt-8 hidden w-32 sm:block lg:-ml-28 lg:-mt-10 lg:w-32">
                        <defs>
                            <pattern id="bc9273ce-29bb-4565-959b-714607d4d027" x="0" y="0" width=".135"
                                height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#bc9273ce-29bb-4565-959b-714607d4d027)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative">Silahkan</span>
                </span>
                pilih produk. Makanan yang anda inginkan.
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                Di Website ini kami menjual 3 produk yaitu Basreng, Mie gulung , dan Cilok
            </p>
        </div>

        <div
            class="row-gap-8 sm:row-gap-10 grid max-w-md gap-10 sm:mx-auto lg:max-w-screen-lg lg:grid-cols-3 xl:max-w-screen-lg">
            <!-- Basic Plan -->
            <div class="flex flex-col rounded bg-white shadow-sm transition duration-300 hover:shadow-lg">
                <div class="relative h-48 w-full">
                    <img src="{{ asset('image/basreng.jpg') }}"
                        class="h-full w-full rounded-t object-cover" alt="Basic Plan">
                </div>
                <div class="flex flex-grow flex-col justify-between rounded-b border border-t-0 p-8">
                    <div>
                        <div class="text-lg font-semibold">Basic</div>
                        <p class="text-sm text-gray-900">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque.
                        </p>
                        <div class="mb-4 mr-1 mt-1 text-4xl font-bold sm:text-5xl">$12</div>
                    </div>
                    <a href="/"
                        class="focus:shadow-outline inline-flex h-12 w-full items-center justify-center rounded bg-black px-6 font-medium tracking-wide text-white shadow-md transition duration-200 hover:bg-gray-800 focus:outline-none">
                        Buy Basic
                    </a>
                </div>
            </div>

            <!-- Advanced Plan -->
            <div class="flex flex-col rounded bg-white shadow-sm transition duration-300 hover:shadow-lg">
                <div class="relative h-48 w-full">
                    <img src="{{ asset('image\miegulung2.jpg') }}"
                        class="h-full w-full rounded-t object-cover" alt="Advanced Plan">
                </div>
                <div class="flex flex-grow flex-col justify-between rounded-b border border-t-0 p-8">
                    <div>
                        <div class="text-lg font-semibold">Advanced</div>
                        <p class="text-sm text-gray-900">
                            A flower in my garden, a mystery in my panties. Heart attack never was so close.
                        </p>
                        <div class="mb-4 mr-1 mt-1 text-4xl font-bold sm:text-5xl">$38</div>
                    </div>
                    <a href="/"
                        class="focus:shadow-outline inline-flex h-12 w-full items-center justify-center rounded bg-black px-6 font-medium tracking-wide text-white shadow-md transition duration-200 hover:bg-gray-800 focus:outline-none">
                        Buy Advanced
                    </a>
                </div>
            </div>

            <!-- Pro Plan -->
            <div class="flex flex-col rounded bg-white shadow-sm transition duration-300 hover:shadow-lg">
                <div class="relative h-48 w-full">
                    <img src="https://images.pexels.com/photos/3182743/pexels-photo-3182743.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                        class="h-full w-full rounded-t object-cover" alt="Pro Plan">
                </div>
                <div class="flex flex-grow flex-col justify-between rounded-b border border-t-0 p-8">
                    <div>
                        <div class="text-lg font-semibold">Pro</div>
                        <p class="text-sm text-gray-900">
                            We never had the chance to. Maybe it was the eleven months he spent in the womb.
                        </p>
                        <div class="mb-4 mr-1 mt-1 text-4xl font-bold sm:text-5xl">$78</div>
                    </div>
                    <a href="/"
                        class="focus:shadow-outline inline-flex h-12 w-full items-center justify-center rounded bg-black px-6 font-medium tracking-wide text-white shadow-md transition duration-200 hover:bg-gray-800 focus:outline-none">
                        Buy Pro
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="mx-auto max-w-screen-xl space-y-8 overflow-hidden px-4 py-12 sm:px-6 lg:px-8">
            <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        About
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Blog
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Team
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Pricing
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Contact
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Terms
                    </a>
                </div>
            </nav>
            <div class="mt-8 flex justify-center space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                        </path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Dribbble</span>
                    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <p class="mt-8 text-center text-base leading-6 text-gray-400">
                © 2021 SomeCompany, Inc. All rights reserved.
            </p>
        </div>
    </footer>

</body>

</html>
