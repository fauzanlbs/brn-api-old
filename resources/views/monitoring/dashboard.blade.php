@extends('layouts.app-native', ['header'=> 'Pemantawan Kinerja'] )

@section('body')
    <div class="space-x-4"></div>
    <div class="flex-grow max-w-full px-4" data-turbolinks="false">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 lg:col-span-3" id="requestsChart">
                <chart :title="title" :endpoint="endpoint"></chart>
            </div>
            <div class="col-span-6 lg:col-span-3" id="queriesChart">
                <chart :title="title" :endpoint="endpoint"></chart>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-6 px-4 mt-6">
        <div class="col-span-6 lg:col-span-3">
            <x-table.show>
                <x-slot name="header">
                    <div class="w-full">
                        <div class="flex flex-wrap items-center">
                            <div class="relative flex-1 flex-grow w-full max-w-full ">
                                <h2 class="mt-1 text-base font-semibold text-gray-600">Expensive Requests</h2>
                            </div>
                        </div>
                    </div>
                </x-slot>
                <x-slot name="thead">
                    <tr class="pb-10">
                        <x-table.th-image text="Method" />
                        <x-table.th text="Route" />
                        <x-table.th text="# Requests" />
                        <x-table.th text="Average time" />

                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @forelse ($requests as $request)
                        <tr>
                            <x-table.td>
                                @include('gauge::components.method-badge')
                            </x-table.td>
                            <x-table.td
                                text="{{ strrev(\Illuminate\Support\Str::limit(strrev($request->content['route']), 30)) }}" />
                            <x-table.td text="{{ number_format($request->count) }}*" />
                            <x-table.td
                                text="{{ \TobiasDierich\Gauge\GaugeHelper::formatNanoseconds($request->duration_average) }}" />
                        </tr>
                    @empty
                        <x-table.data-not-found colspan="5" />
                    @endforelse
                </x-slot>
            </x-table.show>
        </div>

        <div class="col-span-6 lg:col-span-3">
            <x-table.show>
                <x-slot name="header">
                    <div class="w-full">
                        <div class="flex flex-wrap items-center">
                            <div class="relative flex-1 flex-grow w-full max-w-full ">
                                <h2 class="mt-1 text-base font-semibold text-gray-600">Expensive Queries</h2>
                            </div>
                        </div>
                    </div>
                </x-slot>
                <x-slot name="thead">
                    <tr class="pb-10">
                        <x-table.th-image text="Connection" />
                        <x-table.th text="SQL" />
                        <x-table.th text="# Queries" />
                        <x-table.th text="Average time" />
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @forelse ($queries as $query)
                        <tr>
                            <x-table.td>
                                <span
                                    class="px-2 font-semibold leading-5 text-yellow-800 capitalize bg-yellow-100 rounded-full">
                                    {{ $query->content['connection'] }}
                                </span>
                            </x-table.td>
                            <x-table.td>
                                {{ \Illuminate\Support\Str::limit($query->content['sql'], 50) }}
                            </x-table.td>
                            <x-table.td text="{{ number_format($query->count) }}*" />
                            <x-table.td
                                text="{{ \TobiasDierich\Gauge\GaugeHelper::formatNanoseconds($query->duration_average) }}" />
                        </tr>
                    @empty
                        <x-table.data-not-found colspan="5" />
                    @endforelse
                </x-slot>
            </x-table.show>
        </div>

    </div>
@endsection
@push('js')
    <script defer>
        document.addEventListener("turbolinks:before-visit", function() {
            let x = document.querySelector(
                "#requestsChart > div > div.p-4.flex.justify-between.items-end > div > a:nth-child(1)");
            if (x) {
                x.click();
            }
            let y = document.querySelector(
                "#queriesChart > div > div.p-4.flex.justify-between.items-end > div > a:nth-child(1)");
            if (y) {
                y.click();
            }
        });

    </script>
    <script src="{{ asset(mix('charts.js', 'vendor/gauge')) }}" defer></script>
@endpush
@push('breadcrumbs')
    @php
    $x = [
        [
            'url' => route('monitoring.dashboard'),
            'text' => 'Pemantauan kinerja',
        ],
    ];
    @endphp
    @include('layouts.breadcrumbs', ['breadcrumbs' => $x])
@endpush
