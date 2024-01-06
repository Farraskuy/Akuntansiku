@extends('pages.users.sidebar')

@section('container')
    <div class="max-w-screen mb-4">

        {{-- Nav --}}
        <div class="w-full bg-white h-24 rounded-2xl mb-6 pl-8 flex items-center justify-between">
            <h1 class="text-3xl font-bold">Dashboard</h1>
            <div class="pr-16 flex items-center">
                <div class="w-14 h-14 rounded-full bg-slate-500 mr-4"></div>
                <p class="text-lg">Aku Atomic</p>
            </div>
        </div>

        {{-- Section 2 --}}
        <div class="w-full h-auto flex mb-6">
            <div class="w-1/4 bg-white h-40 rounded-2xl mr-6 flex items-center relative overflow-hidden">
                <div class="w-20 h-20 rounded-full bg-slate-500 ml-10 mr-4"></div>
                <div>
                    <p class="text-xl font-bold">$29,00</p>
                    <p class="text-lg text-slate-400">Total Income</p>
                </div>
                <p class="absolute right-5 top-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </p>
                <p class="absolute right-5 bottom-3 text-blue-500 text-md">+ 20%</p>
            </div>
            <div class="w-1/4 bg-white h-40 rounded-2xl mr-6 flex items-center relative overflow-hidden">
                <div class="w-20 h-20 rounded-full bg-slate-500 ml-10 mr-4"></div>
                <div>
                    <p class="text-xl font-bold">$29,00</p>
                    <p class="text-lg text-slate-400">Total Expence</p>
                </div>
                <p class="absolute right-5 top-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </p>
                <p class="absolute right-5 bottom-3 text-blue-500 text-md">+ 20%</p>
            </div>
            <div class="w-1/4 bg-white h-40 rounded-2xl mr-6 flex items-center relative overflow-hidden">
                <div class="w-20 h-20 rounded-full bg-slate-500 ml-10 mr-4"></div>
                <div>
                    <p class="text-xl font-bold">$29,00</p>
                    <p class="text-lg text-slate-400">Total Orders</p>
                </div>
                <p class="absolute right-5 top-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </p>
                <p class="absolute right-5 bottom-3 text-blue-500 text-md">+ 20%</p>
            </div>
            <div class="w-1/4 bg-white h-40 rounded-2xl flex items-center relative overflow-hidden">
                <div class="w-20 h-20 rounded-full bg-slate-500 ml-10 mr-4"></div>
                <div>
                    <p class="text-xl font-bold">$29,00</p>
                    <p class="text-lg text-slate-400">Total Bonus</p>
                </div>
                <p class="absolute right-5 top-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </p>
                <p class="absolute right-5 bottom-3 text-blue-500 text-md">+ 20%</p>
            </div>
        </div>

    {{-- Analytics Data --}}
    <div class="w-full h-auto flex mb-6">
        <div class="w-full bg-white h-[27rem] rounded-2xl mr-6">
            <h2 class="text-2xl font-bold ml-8 mt-4">Earning Reports</h2>
        </div>
        <div class="w-3/6 bg-white h-[27rem] rounded-2xl">
            <h2 class="text-2xl font-bold ml-8 mt-4">Performance</h2>
            <div class="flex flex-col items-center">
                <div class="w-36 h-36 rounded-full bg-slate-500 mt-6 mb-10"></div>

                <div class="mb-3">
                    <p class="mb-1">Good Review</p>
                    <div class="w-80 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Fast Response</p>
                    <div class="w-80 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 25%"></div>
                    </div>
                </div class="mb-3">
                <div>
                    <p class="mb-1">Fast Delivery</p>
                    <div class="w-80 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 15%"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Overview --}}
    <div class="w-full h-auto flex">
        <div class="w-1/2 bg-white h-72 rounded-2xl mr-6">
            <h2 class="text-2xl font-bold ml-8 mt-4">User Analysis</h2>
        </div>
        <div class="w-1/2 bg-white h-72 rounded-2xl">
            <h2 class="text-2xl font-bold ml-8 mt-4">Orders Review</h2>
        </div>

    </div>
    </div>
    </div>
@endsection
