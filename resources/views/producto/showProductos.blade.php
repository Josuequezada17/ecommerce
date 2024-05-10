<x-plantilla nombre-pagina='Producto {{$producto->id}}'>
    <h1>Producto ID {{ $producto->id }}</h1>
    <ul>
        <li>Categoria: {{ $producto->categoria->nombre_categoria }}</li>
        <li>Modelo: {{ $producto->modelo }}</li>
        <li>Marca: {{ $producto->marca->nombre }}</li>
        <li>Año: {{ $producto->anio }}</li>
        <li>Version: {{ $producto->version }}</li>
        <li>Color: {{ $producto->color }}</li>
        <li>Cilindros: {{ $producto->cilindros }}</li>
        <li>Descripcion: {{ $producto->descripcion }}</li>
        <li>Precio: {{ $producto->precio }}</li>
    </ul>
    <a href="{{ route('producto.index') }}">Volver al listado</a>
    <a href="{{ route('producto.edit', $producto) }}">Editar</a>
    <form action="{{ route('producto.destroy', $producto) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar">
    </form>
    
</x-plantilla>
