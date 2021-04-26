<footer class="block py-4 mt-96">
    <div class="container px-4 mx-auto">
        <hr class="mb-4 border-gray-300 border-b-1" />
        <div class="flex flex-wrap items-center justify-center md:justify-between">
            <div class="w-full px-4 text-center md:w-4/12">
                <div class="py-1 text-sm font-semibold text-gray-600">
                    Copyright © <span id="javascript-date"></span>
                    <a href="{{ URL::to('/') }}" class="py-1 text-sm font-semibold text-gray-600 hover:text-gray-800">
                        {{ config('app.name') }}
                    </a>
                </div>
            </div>
            <div class="w-full px-4 md:w-8/12">
                <ul class="flex flex-wrap justify-center list-none md:justify-end">
                    <li>
                        <a href="#" data-turbolinks="false"
                            class="block px-3 py-1 text-sm font-semibold text-gray-700 hover:text-gray-900">
                            Pusat Bantuan
                        </a>
                    </li>
                    <li>
                        <a href="#" data-turbolinks="false"
                            class="block px-3 py-1 text-sm font-semibold text-gray-700 hover:text-gray-900">
                            {{ config('app.name') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
