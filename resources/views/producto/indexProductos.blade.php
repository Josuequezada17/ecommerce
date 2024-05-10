<x-plantilla nombrePagina="Listado Producto">

    <h1>Listado de Productos</h1>
    <a href="{{ route('producto.create') }}">Crear Producto</a>
    <hr>

    <table border="1">
        <thead>
            <tr>
                <th>Categoria</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Año</th>
                <th>Version</th>
                <th>Color</th>
                <th>Cilindros</th>
                <th>Descripcion</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->categoria->nombre_categoria }}</td>
                    <td>{{ $producto->modelo }}</td>
                    <td>{{ $producto->marca->nombre }}</td>
                    <td>{{ $producto->anio }}</td>
                    <td>{{ $producto->version }}</td>
                    <td>{{ $producto->color }}</td>
                    <td>{{ $producto->cilindros }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>
                        <button onclick="window.location.href='{{ route('producto.show', $producto) }}'">Ver</button> |
                        
                        <button onclick="window.location.href='{{ route('producto.edit', $producto) }}'">Editar</button> |
                    
                        <form action="{{ route('producto.destroy', $producto) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-plantilla>