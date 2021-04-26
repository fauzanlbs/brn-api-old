<footer class="w-full bg-gradient-to-t from-white to-gray-100">
    <div class="container px-4 mx-auto pt-28 sm:pt-0">
        <hr class="mb-4 border-b-1">
        <div class="flex flex-wrap items-center justify-center pb-5 md:justify-between">
            <div class="w-full px-4 text-center md:w-4/12">
                <div class="py-1 text-sm font-semibold text-gray-600">
                    Copyright © <span id="javascript-date"></span>
                    <a href="{{ URL::to('/') }}" class="py-1 text-sm font-semibold text-gray-600 hover:text-gray-500">
                        {{ config('app.name') }}
                    </a>
                </div>
            </div>
            <div class="w-full px-4 md:w-8/12">
                <ul class="flex flex-wrap justify-center list-none md:justify-end ">
                    <li>
                        <a href="#" data-turbolinks="false"
                            class="block px-3 py-1 text-sm font-semibold text-gray-600 hover:text-gray-500">
                            Pusat Bantuan
                        </a>
                    </li>
                    <li>
                        <a href="#" data-turbolinks="false"
                            class="block px-3 py-1 text-sm font-semibold text-gray-600 hover:text-gray-500">
                            Dev
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="inline h-4"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 391.837 391.837">
                                <g>
                                    <path style="fill:#D7443E;"
                                        d="M285.257,35.528c58.743,0.286,106.294,47.836,106.58,106.58
                                    c0,107.624-195.918,214.204-195.918,214.204S0,248.165,0,142.108c0-58.862,47.717-106.58,106.58-106.58l0,0
                                    c36.032-0.281,69.718,17.842,89.339,48.065C215.674,53.517,249.273,35.441,285.257,35.528z" />
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>
                            {{ config('app.name') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
