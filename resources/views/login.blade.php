<x-layout class="grid place-content-center h-screen">
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <h1 class="text-green-600 uppercase font-extrabold text-center text-3xl">Log In</h1>
    <form action="/login" method="POST">
        @csrf

        <div class="my-2">
            <x-input titulo="Email" type="text" nombre="Email"/>
        </div>

        <div class="my-2">
            <x-input titulo="Password" type="password" nombre="Password"/>
        </div>

        <button type="submit" class="rounded-xl bg-lime-200 px-6 py-2 mt-10">Log In</button>
    </form>
</x-layout>


