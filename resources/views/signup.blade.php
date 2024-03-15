<div class="grid place-content-center h-screen">
    <!-- Be present above all else. - Naval Ravikant -->
    <h1 class="text-green-600 uppercase font-extrabold text-center">Sign up</h1>
    <form action="/register" method="POST">
    @csrf
        <div>
            <x-input titulo="Name" type="text" nombre="name"/>
        </div>

        <div>
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>

        <div>
            <x-input titulo="Password" type="password" nombre="password"/>
        </div>

        <div>
            <x-input titulo="Bithday" type="date" nombre="birthday"/>
        </div>

        <button type="submit">Register</button>

    </form>
</div>
