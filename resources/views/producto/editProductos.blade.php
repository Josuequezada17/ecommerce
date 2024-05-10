<x-plantilla nombrePagina="Editar Producto">

    <h1 class="text-2xl font-bold">Crear Producto</h1>

    <a href="{{ route('producto.index') }}">Lista de Productos</a>
    <hr>
    <form action="{{ route('producto.update', $producto) }}" method="POST" >
        @csrf

        @method('PATCH')
        <select name="categoria" id="categoria">
            <option value="1" {{ (old('categoria') == 'Sedán' || $producto->categoria->nombre_categoria == 'Sedán') ? 'selected' : '' }}>Sedán</option>
            <option value="2" {{ (old('categoria') == 'Coupé' || $producto->categoria->nombre_categoria == 'Coupé') ? 'selected' : '' }}>Coupé</option>
            <option value="3" {{ (old('categoria') == 'Hatchback' || $producto->categoria->nombre_categoria == 'Hatchback') ? 'selected' : '' }}>Hatckback</option>
            <option value="4" {{ (old('categoria') == 'SUV' || $producto->categoria->nombre_categoria == 'SUV') ? 'selected' : '' }}>SUV</option>
            <option value="5" {{ (old('categoria') == 'Crossover' || $producto->categoria->nombre_categoria == 'Crossover') ? 'selected' : '' }}>Crossover</option>
            <option value="6" {{ (old('categoria') == 'Pick-up' || $producto->categoria->nombre_categoria == 'Pick-up') ? 'selected' : '' }}>Pick-up</option>
            <option value="7" {{ (old('categoria') == 'Deportivo' || $producto->categoria->nombre_categoria == 'Deportivo') ? 'selected' : '' }}>Deportivo</option>
            <option value="8" {{ (old('categoria') == 'Convertible' || $producto->categoria->nombre_categoria == 'Convertible') ? 'selected' : '' }}>Convertible</option>
            <option value="9" {{ (old('categoria') == 'Eléctrico/Híbrido' || $producto->categoria->nombre_categoria == 'Eléctrico/Híbrido') ? 'selected' : '' }}>Eléctrico/Híbrido</option>
        </select>
        <br>
        
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" value="{{ old('modelo') ?? $producto->modelo }}" required>
        @error('modelo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>    

        <select name="marca">
            {{ $contador = 1 }}
            @foreach ($marcas as $marca)
                <option value="{{ $contador }}" {{ (old('marca') == $marca || $producto->marca->nombre == $marca) ? 'selected' : '' }}>{{ $marca }}</option>
                {{ $contador++ }}
            @endforeach
        </select>

       <!-- <select name="marca" id="marca">
            <option value="1" {{ (old('marca') == 'Acura' || $producto->marca->nombre == 'Acura') ? 'selected' : '' }}>Acura</option>
            <option value="2" {{ (old('marca') == 'Alfa Romeo' || $producto->marca->nombre == 'Alfa Romeo') ? 'selected' : '' }}>Alfa Romeo</option>
            <option value="3" {{ (old('marca') == 'AM General' || $producto->marca->nombre == 'AM General') ? 'selected' : '' }}>AM General</option>
            <option value="4" {{ (old('marca') == 'AMC' || $producto->marca->nombre == 'AMC') ? 'selected' : '' }}>AMC</option>
            <option value="5" {{ (old('marca') == 'Aston Martin' || $producto->marca->nombre == 'Aston Martin') ? 'selected' : '' }}>Aston Martin</option>
            <option value="6" {{ (old('marca') == 'Audi' || $producto->marca->nombre == 'Audi') ? 'selected' : '' }}>Audi</option>
            <option value="7" {{ (old('marca') == 'Avanti' || $producto->marca->nombre == 'Avanti') ? 'selected' : '' }}>Avanti</option>
            <option value="8" {{ (old('marca') == 'Bentley' || $producto->marca->nombre == 'Bentley') ? 'selected' : '' }}>Bentley</option>
            <option value="9" {{ (old('marca') == 'BMW' || $producto->marca->nombre == 'BMW') ? 'selected' : '' }}>BMW</option>
            <option value="10" {{ (old('marca') == 'Bugatti' || $producto->marca->nombre == 'Bugatti') ? 'selected' : '' }}>Bugatti</option>
            <option value="11" {{ (old('marca') == 'Buick' || $producto->marca->nombre == 'Buick') ? 'selected' : '' }}>Buick</option>
            <option value="12" {{ (old('marca') == 'Cadillac' || $producto->marca->nombre == 'Cadillac') ? 'selected' : '' }}>Cadillac</option>
            <option value="13" {{ (old('marca') == 'Chevrolet' || $producto->marca->nombre == 'Chevrolet') ? 'selected' : '' }}>Chevrolet</option>
            <option value="14" {{ (old('marca') == 'Chrysler' || $producto->marca->nombre == 'Chrysler') ? 'selected' : '' }}>Chrysler</option>
            <option value="15" {{ (old('marca') == 'Citroën' || $producto->marca->nombre == 'Citroën') ? 'selected' : '' }}>Citroën</option>
            <option value="16" {{ (old('marca') == 'Crosley' || $producto->marca->nombre == 'Crosley') ? 'selected' : '' }}>Crosley</option>
            <option value="17" {{ (old('marca') == 'Datsun' || $producto->marca->nombre == 'Datsun') ? 'selected' : '' }}>Datsun</option>
            <option value="18" {{ (old('marca') == 'DeLorean' || $producto->marca->nombre == 'DeLorean') ? 'selected' : '' }}>DeLorean</option>
            <option value="19" {{ (old('marca') == 'DeSoto' || $producto->marca->nombre == 'DeSoto') ? 'selected' : '' }}>DeSoto</option>
            <option value="20" {{ (old('marca') == 'Dodge' || $producto->marca->nombre == 'Dodge') ? 'selected' : '' }}>Dodge</option>
            <option value="21" {{ (old('marca') == 'Eagle' || $producto->marca->nombre == 'Eagle') ? 'selected' : '' }}>Eagle</option>
            <option value="22" {{ (old('marca') == 'Edsel' || $producto->marca->nombre == 'Edsel') ? 'selected' : '' }}>Edsel</option>
            <option value="23" {{ (old('marca') == 'Ferrari' || $producto->marca->nombre == 'Ferrari') ? 'selected' : '' }}>Ferrari</option>
            <option value="24" {{ (old('marca') == 'Fiat' || $producto->marca->nombre == 'Fiat') ? 'selected' : '' }}>Fiat</option>
            <option value="25" {{ (old('marca') == 'Ford' || $producto->marca->nombre == 'Ford') ? 'selected' : '' }}>Ford</option>
            <option value="26" {{ (old('marca') == 'Geo' || $producto->marca->nombre == 'Geo') ? 'selected' : '' }}>Geo</option>
            <option value="27" {{ (old('marca') == 'GMC' || $producto->marca->nombre == 'GMC') ? 'selected' : '' }}>GMC</option>
            <option value="28" {{ (old('marca') == 'Honda' || $producto->marca->nombre == 'Honda') ? 'selected' : '' }}>Honda</option>
            <option value="29" {{ (old('marca') == 'Hummer' || $producto->marca->nombre == 'Hummer') ? 'selected' : '' }}>Hummer</option>
            <option value="30" {{ (old('marca') == 'Hyundai' || $producto->marca->nombre == 'Hyundai') ? 'selected' : '' }}>Hyundai</option>
            <option value="31" {{ (old('marca') == 'Infiniti' || $producto->marca->nombre == 'Infiniti') ? 'selected' : '' }}>Infiniti</option>
            <option value="32" {{ (old('marca') == 'Isuzu' || $producto->marca->nombre == 'Isuzu') ? 'selected' : '' }}>Isuzu</option>
            <option value="33" {{ (old('marca') == 'Jaguar' || $producto->marca->nombre == 'Jaguar') ? 'selected' : '' }}>Jaguar</option>
            <option value="34" {{ (old('marca') == 'Jeep' || $producto->marca->nombre == 'Jeep') ? 'selected' : '' }}>Jeep</option>
            <option value="35" {{ (old('marca') == 'Kaiser' || $producto->marca->nombre == 'Kaiser') ? 'selected' : '' }}>Kaiser</option>
            <option value="36" {{ (old('marca') == 'Kia' || $producto->marca->nombre == 'Kia') ? 'selected' : '' }}>Kia</option>
            <option value="37" {{ (old('marca') == 'Lamborghini' || $producto->marca->nombre == 'Lamborghini') ? 'selected' : '' }}>Lamborghini</option>
            <option value="38" {{ (old('marca') == 'Lancia' || $producto->marca->nombre == 'Lancia') ? 'selected' : '' }}>Lancia</option>
            <option value="39" {{ (old('marca') == 'Land Rover' || $producto->marca->nombre == 'Land Rover') ? 'selected' : '' }}>Land Rover</option>
            <option value="40" {{ (old('marca') == 'Lexus' || $producto->marca->nombre == 'Lexus') ? 'selected' : '' }}>Lexus</option>
            <option value="41" {{ (old('marca') == 'Lincoln' || $producto->marca->nombre == 'Lincoln') ? 'selected' : '' }}>Lincoln</option>
            <option value="42" {{ (old('marca') == 'Lotus' || $producto->marca->nombre == 'Lotus') ? 'selected' : '' }}>Lotus</option>
            <option value="43" {{ (old('marca') == 'Maserati' || $producto->marca->nombre == 'Maserati') ? 'selected' : '' }}>Maserati</option>
            <option value="44" {{ (old('marca') == 'Maybach' || $producto->marca->nombre == 'Maybach') ? 'selected' : '' }}>Maybach</option>
            <option value="45" {{ (old('marca') == 'Mazda' || $producto->marca->nombre == 'Mazda') ? 'selected' : '' }}>Mazda</option>
            <option value="46" {{ (old('marca') == 'McLaren' || $producto->marca->nombre == 'McLaren') ? 'selected' : '' }}>McLaren</option>
            <option value="47" {{ (old('marca') == 'Mercedes-Benz' || $producto->marca->nombre == 'Mercedes-Benz') ? 'selected' : '' }}>Mercedes-Benz</option>
            <option value="48" {{ (old('marca') == 'Mercury' || $producto->marca->nombre == 'Mercury') ? 'selected' : '' }}>Mercury</option>
            <option value="49" {{ (old('marca') == 'Mini' || $producto->marca->nombre == 'Mini') ? 'selected' : '' }}>Mini</option>
            <option value="50" {{ (old('marca') == 'Mitsubishi' || $producto->marca->nombre == 'Mitsubishi') ? 'selected' : '' }}>Mitsubishi</option>
            <option value="51" {{ (old('marca') == 'Nash' || $producto->marca->nombre == 'Nash') ? 'selected' : '' }}>Nash</option>
            <option value="52" {{ (old('marca') == 'Nissan' || $producto->marca->nombre == 'Nissan') ? 'selected' : '' }}>Nissan</option>
            <option value="53" {{ (old('marca') == 'Oldsmobile' || $producto->marca->nombre == 'Oldsmobile') ? 'selected' : '' }}>Oldsmobile</option>
            <option value="54" {{ (old('marca') == 'Opel' || $producto->marca->nombre == 'Opel') ? 'selected' : '' }}>Opel</option>
            <option value="55" {{ (old('marca') == 'Packard' || $producto->marca->nombre == 'Packard') ? 'selected' : '' }}>Packard</option>
            <option value="56" {{ (old('marca') == 'Pagani' || $producto->marca->nombre == 'Pagani') ? 'selected' : '' }}>Pagani</option>
            <option value="57" {{ (old('marca') == 'Peugeot' || $producto->marca->nombre == 'Peugeot') ? 'selected' : '' }}>Peugeot</option>
            <option value="58" {{ (old('marca') == 'Plymouth' || $producto->marca->nombre == 'Plymouth') ? 'selected' : '' }}>Plymouth</option>
            <option value="59" {{ (old('marca') == 'Pontiac' || $producto->marca->nombre == 'Pontiac') ? 'selected' : '' }}>Pontiac</option>
            <option value="60" {{ (old('marca') == 'Porsche' || $producto->marca->nombre == 'Porsche') ? 'selected' : '' }}>Porsche</option>
            <option value="61" {{ (old('marca') == 'Ram' || $producto->marca->nombre == 'Ram') ? 'selected' : '' }}>Ram</option>
            <option value="62" {{ (old('marca') == 'Renault' || $producto->marca->nombre == 'Renault') ? 'selected' : '' }}>Renault</option>
            <option value="63" {{ (old('marca') == 'Rolls-Royce' || $producto->marca->nombre == 'Rolls-Royce') ? 'selected' : '' }}>Rolls-Royce</option>
            <option value="64" {{ (old('marca') == 'Saab' || $producto->marca->nombre == 'Saab') ? 'selected' : '' }}>Saab</option>
            <option value="65" {{ (old('marca') == 'Saturn' || $producto->marca->nombre == 'Saturn') ? 'selected' : '' }}>Saturn</option>
            <option value="66" {{ (old('marca') == 'Scion' || $producto->marca->nombre == 'Scion') ? 'selected' : '' }}>Scion</option>
            <option value="67" {{ (old('marca') == 'Shelby' || $producto->marca->nombre == 'Shelby') ? 'selected' : '' }}>Shelby</option>
            <option value="68" {{ (old('marca') == 'Smart' || $producto->marca->nombre == 'Smart') ? 'selected' : '' }}>Smart</option>
            <option value="69" {{ (old('marca') == 'Spyker' || $producto->marca->nombre == 'Spyker') ? 'selected' : '' }}>Spyker</option>
            <option value="70" {{ (old('marca') == 'Studebaker' || $producto->marca->nombre == 'Studebaker') ? 'selected' : '' }}>Studebaker</option>
            <option value="71" {{ (old('marca') == 'Subaru' || $producto->marca->nombre == 'Subaru') ? 'selected' : '' }} >Subaru</option>
            <option value="72" {{ (old('marca') == 'Suzuki' || $producto->marca->nombre == 'Suzuki') ? 'selected' : '' }}>Suzuki</option>
            <option value="73" {{ (old('marca') == 'Tata' || $producto->marca->nombre == 'Tata') ? 'selected' : '' }}>Tata</option>
            <option value="74" {{ (old('marca') == 'Tesla' || $producto->marca->nombre == 'Tesla') ? 'selected' : '' }}>Tesla</option>
            <option value="75" {{ (old('marca') == 'Toyota' || $producto->marca->nombre == 'Toyota') ? 'selected' : '' }}>Toyota</option>
            <option value="76" {{ (old('marca') == 'Triumph' || $producto->marca->nombre == 'Triumph') ? 'selected' : '' }}>Triumph</option>
            <option value="77" {{ (old('marca') == 'Vauxhall' || $producto->marca->nombre == 'Vauxhall') ? 'selected' : '' }}>Vauxhall</option>
            <option value="78" {{ (old('marca') == 'Vector' || $producto->marca->nombre == 'Vector') ? 'selected' : '' }}>Vector</option>
            <option value="79" {{ (old('marca') == 'Volkswagen' || $producto->marca->nombre == 'Volkswagen') ? 'selected' : '' }}>Volkswagen</option>
            <option value="80" {{ (old('marca') == 'Volvo' || $producto->marca->nombre == 'Volvo') ? 'selected' : '' }}>Volvo</option>
            <option value="81" {{ (old('marca') == 'Willys' || $producto->marca->nombre == 'Willys') ? 'selected' : '' }}>Willys</option>
        </select>        
    -->
        <br>

        <label for="anio">Año:</label>
        <input type="text" name="anio" value="{{ old('anio') ?? $producto->anio}}" required>
        @error('anio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="version">Version:</label>
        <input type="text" name="version" value="{{ old('version') ?? $producto->version}}" required>
        @error('version')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="color">Color:</label>
        <input type="text" name="color" value="{{ old('color') ?? $producto->color }}" required>
        @error('color')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="cilindros">Cilindros:</label>
        <input type="text" name="cilindros" value="{{ old('cilindros') ?? $producto->cilindros }}" required>
        @error('cilindros')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="descripcion">Descripcion:</label><br>
        <textarea name="descripcion" id="" cols="30" rows="10">{{ old('descripcion') ?? $producto->descripcion }}</textarea>
        @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="precio">Precio:</label>
        <input type="integer" name="precio" value="{{ old('precio') ?? $producto->precio}}" required>
        @error('precio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

       <!-- <hr>
        <h3>Archivos</h3>
        <label for="archivo">Carga de Archivo:</label>
        <input type="file" name="archivo" id="archivo">
       -->
        <input type="submit" value="Enviar">
    </form>

</x-plantilla>