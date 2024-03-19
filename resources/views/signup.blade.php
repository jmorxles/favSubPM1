<x-layout/>
<div class="grid place-content-center h-screen">
    <!-- Be present above all else. - Naval Ravikant -->
    <h1 class="text-4xl text-blue-600 uppercase font-extrabold text-center">Sign up</h1>
    <form action="/register" method="POST">
    @csrf

            <x-input titulo="Name" type="text" nombre="name"/>
            <x-input titulo="Email" type="text" nombre="email"/>
            <x-input titulo="Password" type="password" nombre="password"/>
            <x-input titulo="Bithday" type="date" nombre="birthday"/>


        <button type="submit">Register</button>

    </form>
</div>
<x-layout/>
