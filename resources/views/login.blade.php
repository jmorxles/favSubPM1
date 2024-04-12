<x-layout>
    <div class="grid place-content-center h-screen bg-gradient-to-r from-emerald-300 via-neutral-50 to-emerald-500">
        <h1 class="text-6xl text-slate-950 uppercase font-extrabold text-center mb-12">Log In</h1>

        <div class="grid place-content-center w-96 p-6 shadow-xl bg-emerald-300 rounded-xl mb-8 text-justify">

            <form action="/login" method="POST">
                @csrf

                <div class="my-2 mt-8">
                    <x-input titulo="Email" type="text" nombre="email" />
                </div>

                <div class="my-2 ">
                    <x-input titulo="Password" type="password" nombre="password" />
                </div>
        </div>
        <div class="grid place-content-center">
            <button type="submit"
                class="transition hover:-translate-y-2 delay-50 duration-200 ease-in-out mt-6 border border-neutral-50 bg-emerald-500 hover:bg-emerald-600 rounded-full px-16 py-2 ring-2 ring-emerald-600
             text-neutral-50 font-semibold">Register</button>
        </div>

</x-layout>
