@props(['titulo', 'type', 'nombre'])

<label for="">{{ $titulo }}</label>
<input type={{ $type }} name={{ $nombre }} class="border border-stone-700  rounded-lg px-2 py-2 ">
@error( $nombre )
<p>{{ $message }}</p>
@enderror
