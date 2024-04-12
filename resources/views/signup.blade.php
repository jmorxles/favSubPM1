<x-layout />
<div class="grid place-content-center h-screen bg-gradient-to-r from-emerald-600 via-neutral-50 to-emerald-300">

    <h1 class="text-6xl text-slate-950 uppercase font-extrabold text-center mb-12">Sign up</h1>

    <div class="grid place-content-center w-96 p-6 shadow-xl bg-emerald-300 rounded-xl mb-8 text-justify">
        <!-- Be present above all else. - Naval Ravikant -->

        <form action="/register" method="POST">
            @csrf

            <x-input titulo="Name" type="text" nombre="name" />
            <x-input titulo="Email" type="text" nombre="email" />
            <x-input titulo="Password" type="password" nombre="password" />
            <x-input titulo="Bithday" type="date" nombre="birthday" />


    </div>

    <div class="grid place-content-center">
        <button type="submit"
            class="transition hover:-translate-y-2 delay-50 duration-200 ease-in-out mt-6 border border-neutral-50 bg-emerald-500 hover:bg-emerald-600 rounded-full px-16 py-2 ring-2 ring-emerald-600
            text-neutral-50 font-semibold">Register</button>
    </div>

</div>
<x-layout />
