@extends('pages.users.sidebar')

@section('container')
    <div class="max-w-screen mb-4">
        {{-- Nav --}}
        <div class="w-full bg-white h-24 rounded-2xl mb-6 pl-8 flex items-center justify-between">
            <h1 class="text-3xl font-bold">Cash & Bank</h1>
            <div class="pr-12 flex items-center">
                <a class="bg-slate-400 text-white p-2 rounded-lg font-semibold text-lg hover:bg-slate-200 hover:text-black transition duration-300"
                    href="#"><span class="font-bold">+</span> Create New Account</a>
            </div>
        </div>

        {{-- Section 2 --}}
        <div class="w-full h-auto flex flex-wrap md:flex-nowrap mb-6">
            <div class="xl:w-1/4 lg:w-1/2 bg-white h-40 rounded-2xl mr-6 flex items-center relative overflow-hidden pl-5">
                <div>
                    <p class="text-lg text-slate-400">Total</p>
                    <p class="text-xl font-bold">$29,00</p>
                </div>
                <div class="absolute right-5 top-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </div>
                <div class="w-full h-8 absolute bottom-0 right-0 left-0 bg-green-300"></div>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 bg-white h-40 rounded-2xl mr-6 flex items-center relative overflow-hidden pl-5">
                <div>
                    <p class="text-lg text-slate-400">Total</p>
                    <p class="text-xl font-bold">$29,00</p>
                </div>
                <div class="absolute right-5 top-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </div>
                <div class="w-full h-8 absolute bottom-0 right-0 left-0 bg-red-300"></div>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 bg-white h-40 rounded-2xl mr-6 flex items-center relative overflow-hidden pl-5">
                <div>
                    <p class="text-lg text-slate-400">Total</p>
                    <p class="text-xl font-bold">$29,00</p>
                </div>
                <div class="absolute right-5 top-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </div>
                <div class="w-full h-8 absolute bottom-0 right-0 left-0 bg-blue-300"></div>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 bg-white h-40 rounded-2xl flex items-center relative overflow-hidden pl-5">
                <div>
                    <p class="text-lg text-slate-400">Total</p>
                    <p class="text-xl font-bold">$29,00</p>
                </div>
                <div class="absolute right-5 top-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </div>
                <div class="w-full h-8 absolute bottom-0 right-0 left-0 bg-sky-300"></div>
            </div>
        </div>

        <div class="w-full bg-white h-full rounded-2xl mb-6 pl-8 pr-8 pb-5 pt-5">
            <h1 class="text-3xl font-bold mb-4">List Of Accounts</h1>
            <input type="checkbox" id="showData">
            <label for="showData" class="ml-2">Show Archived Accounts</label>
            <div class="mt-24">
                <a class="bg-slate-400 text-white p-2 rounded-lg font-semibold text-lg hover:bg-slate-200 hover:text-black transition duration-300"
                    href="#"><span class="font-bold">+</span> New Transaction</a>
                <a class="bg-slate-400 text-white p-2 rounded-lg font-semibold text-lg hover:bg-slate-200 hover:text-black transition duration-300"
                    href="#">Reconcile Rules</a>
            </div>
            <div class="w-full h-72 p-5 bg-slate-100 mt-6 rounded-xl">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Account Code</th>
                            <th>Account Name</th>
                            <th>Statement Balance</th>
                            <th>Balance in Jurnal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1 - 10001</td>
                            <td>Cash</td>
                            <td>0,00</td>
                            <td>200.000,00</td>
                            <td>
                                <select name="state" id="state" class="p-2 pr-3 border-2 border-blue-400 bg-slate-100 rounded-xl">
                                    <option value="testing">Import Bank Statement</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
