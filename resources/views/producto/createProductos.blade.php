<x-plantilla nombrePagina="Crear Producto">
    <h1 class="text-2xl font-bold">Crear Producto</h1>

    <a href="{{ route('producto.index') }}">Lista de Productos</a>
    <hr>
    @include('parciales.formError')
    <form action="{{ route('producto.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <select name="categoria" id="categoria">
            <option value="1" {{ old('categoria') == 'Sedán' ? 'selected' : '' }}>Sedán</option>
            <option value="2" {{ old('categoria') == 'Coupé' ? 'selected' : '' }}>Coupé</option>
            <option value="3" {{ old('categoria') == 'Hatchback' ? 'selected' : '' }}>Hatchback</option>
            <option value="4" {{ old('categoria') == 'SUV' ? 'selected' : '' }}>SUV</option>
            <option value="5" {{ old('categoria') == 'Crossover' ? 'selected' : '' }}>Crossover</option>
            <option value="6" {{ old('categoria') == 'Pick-up' ? 'selected' : '' }}>Pick-up</option>
            <option value="7" {{ old('categoria') == 'Deportivo' ? 'selected' : '' }}>Deportivo</option>
            <option value="8" {{ old('categoria') == 'Convertible' ? 'selected' : '' }}>Convertible</option>
            <option value="9" {{ old('categoria') == 'Eléctrico/Híbrido' ? 'selected' : '' }}>Eléctrico/Híbrido</option>
        </select>
        <br>
        
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" value="{{ old('modelo') }}" required>
        @error('modelo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <select name="marca" id="marca">
            <option value="1" {{ old('marca') == 'Acura' ? 'selected' : '' }}>Acura</option>
            <option value="2" {{ old('marca') == 'Alfa Romeo' ? 'selected' : '' }}>Alfa Romeo</option>
            <option value="3" {{ old('marca') == 'AM General' ? 'selected' : '' }}>AM General</option>
            <option value="4" {{ old('marca') == 'AMC' ? 'selected' : '' }}>AMC</option>
            <option value="5" {{ old('marca') == 'Aston Martin' ? 'selected' : '' }}>Aston Martin</option>
            <option value="6" {{ old('marca') == 'Audi' ? 'selected' : '' }}>Audi</option>
            <option value="7" {{ old('marca') == 'Avanti' ? 'selected' : '' }}>Avanti</option>
            <option value="8" {{ old('marca') == 'Bentley' ? 'selected' : '' }}>Bentley</option>
            <option value="9" {{ old('marca') == 'BMW' ? 'selected' : '' }}>BMW</option>
            <option value="10" {{ old('marca') == 'Bugatti' ? 'selected' : '' }}>Bugatti</option>
            <option value="11" {{ old('marca') == 'Buick' ? 'selected' : '' }}>Buick</option>
            <option value="12" {{ old('marca') == 'Cadillac' ? 'selected' : '' }}>Cadillac</option>
            <option value="13" {{ old('marca') == 'Chevrolet' ? 'selected' : '' }}>Chevrolet</option>
            <option value="14" {{ old('marca') == 'Chrysler' ? 'selected' : '' }}>Chrysler</option>
            <option value="15" {{ old('marca') == 'Citroën' ? 'selected' : '' }}>Citroën</option>
            <option value="16" {{ old('marca') == 'Crosley' ? 'selected' : '' }}>Crosley</option>
            <option value="17" {{ old('marca') == 'Datsun' ? 'selected' : '' }}>Datsun</option>
            <option value="DeLorean" {{ old('marca') == 'DeLorean' ? 'selected' : '' }}>DeLorean</option>
            <option value="DeSoto" {{ old('marca') == 'DeSoto' ? 'selected' : '' }}>DeSoto</option>
            <option value="Dodge" {{ old('marca') == 'Dodge' ? 'selected' : '' }}>Dodge</option>
            <option value="Eagle" {{ old('marca') == 'Eagle' ? 'selected' : '' }}>Eagle</option>
            <option value="Edsel" {{ old('marca') == 'Edsel' ? 'selected' : '' }}>Edsel</option>
            <option value="Ferrari" {{ old('marca') == 'Ferrari' ? 'selected' : '' }}>Ferrari</option>
            <option value="Fiat" {{ old('marca') == 'Fiat' ? 'selected' : '' }}>Fiat</option>
            <option value="Ford" {{ old('marca') == 'Ford' ? 'selected' : '' }}>Ford</option>
            <option value="Geo" {{ old('marca') == 'Geo' ? 'selected' : '' }}>Geo</option>
            <option value="Genesis" {{ old('marca') == 'Genesis' ? 'selected' : '' }}>Genesis</option>
            <option value="GMC" {{ old('marca') == 'GMC' ? 'selected' : '' }}>GMC</option>
            <option value="Honda" {{ old('marca') == 'Honda' ? 'selected' : '' }}>Honda</option>
            <option value="Hummer" {{ old('marca') == 'Hummer' ? 'selected' : '' }}>Hummer</option>
            <option value="Hyundai" {{ old('marca') == 'Hyundai' ? 'selected' : '' }}>Hyundai</option>
            <option value="Infiniti" {{ old('marca') == 'Infiniti' ? 'selected' : '' }}>Infiniti</option>
            <option value="Isuzu" {{ old('marca') == 'Isuzu' ? 'selected' : '' }}>Isuzu</option>
            <option value="Jaguar" {{ old('marca') == 'Jaguar' ? 'selected' : '' }}>Jaguar</option>
            <option value="Jeep" {{ old('marca') == 'Jeep' ? 'selected' : '' }}>Jeep</option>
            <option value="Kaiser" {{ old('marca') == 'Kaiser' ? 'selected' : '' }}>Kaiser</option>
            <option value="Kia" {{ old('marca') == 'Kia' ? 'selected' : '' }}>Kia</option>
            <option value="38" {{ old('marca') == 'Lamborghini' ? 'selected' : '' }}>Lamborghini</option>
            <option value="Lancia" {{ old('marca') == 'Lancia' ? 'selected' : '' }}>Lancia</option>
            <option value="Land Rover" {{ old('marca') == 'Land Rover' ? 'selected' : '' }}>Land Rover</option>
            <option value="Lexus" {{ old('marca') == 'Lexus' ? 'selected' : '' }}>Lexus</option>
            <option value="Lincoln" {{ old('marca') == 'Lincoln' ? 'selected' : '' }}>Lincoln</option>
            <option value="Lotus" {{ old('marca') == 'Lotus' ? 'selected' : '' }}>Lotus</option>
            <option value="Maserati" {{ old('marca') == 'Maserati' ? 'selected' : '' }}>Maserati</option>
            <option value="Maybach" {{ old('marca') == 'Maybach' ? 'selected' : '' }}>Maybach</option>
            <option value="Mazda" {{ old('marca') == 'Mazda' ? 'selected' : '' }}>Mazda</option>
            <option value="McLaren" {{ old('marca') == 'McLaren' ? 'selected' : '' }}>McLaren</option>
            <option value="Mercedes-Benz" {{ old('marca') == 'Mercedes-Benz' ? 'selected' : '' }}>Mercedes-Benz</option>
            <option value="Mercury" {{ old('marca') == 'Mercury' ? 'selected' : '' }}>Mercury</option>
            <option value="Mini" {{ old('marca') == 'Mini' ? 'selected' : '' }}>Mini</option>
            <option value="Mitsubishi" {{ old('marca') == 'Mitsubishi' ? 'selected' : '' }}>Mitsubishi</option>
            <option value="Nash" {{ old('marca') == 'Nash' ? 'selected' : '' }}>Nash</option>
            <option value="Nissan" {{ old('marca') == 'Nissan' ? 'selected' : '' }}>Nissan</option>
            <option value="Oldsmobile" {{ old('marca') == 'Oldsmobile' ? 'selected' : '' }}>Oldsmobile</option>
            <option value="Opel" {{ old('marca') == 'Opel' ? 'selected' : '' }}>Opel</option>
            <option value="Packard" {{ old('marca') == 'Packard' ? 'selected' : '' }}>Packard</option>
            <option value="Pagani" {{ old('marca') == 'Pagani' ? 'selected' : '' }}>Pagani</option>
            <option value="Peugeot" {{ old('marca') == 'Peugeot' ? 'selected' : '' }}>Peugeot</option>
            <option value="Plymouth" {{ old('marca') == 'Plymouth' ? 'selected' : '' }}>Plymouth</option>
            <option value="Pontiac" {{ old('marca') == 'Pontiac' ? 'selected' : '' }}>Pontiac</option>
            <option value="Porsche" {{ old('marca') == 'Porsche' ? 'selected' : '' }}>Porsche</option>
            <option value="Ram" {{ old('marca') == 'Ram' ? 'selected' : '' }}>Ram</option>
            <option value="Renault" {{ old('marca') == 'Renault' ? 'selected' : '' }}>Renault</option>
            <option value="Rolls-Royce" {{ old('marca') == 'Rolls-Royce' ? 'selected' : '' }}>Rolls-Royce</option>
            <option value="Saab" {{ old('marca') == 'Saab' ? 'selected' : '' }}>Saab</option>
            <option value="Saturn" {{ old('marca') == 'Saturn' ? 'selected' : '' }}>Saturn</option>
            <option value="Scion" {{ old('marca') == 'Scion' ? 'selected' : '' }}>Scion</option>
            <option value="Shelby" {{ old('marca') == 'Shelby' ? 'selected' : '' }}>Shelby</option>
            <option value="Smart" {{ old('marca') == 'Smart' ? 'selected' : '' }}>Smart</option>
            <option value="Spyker" {{ old('marca') == 'Spyker' ? 'selected' : '' }}>Spyker</option>
            <option value="Studebaker" {{ old('marca') == 'Studebaker' ? 'selected' : '' }}>Studebaker</option>
            <option value="Subaru" {{ old('marca') == 'Subaru' ? 'selected' : '' }}>Subaru</option>
            <option value="Suzuki" {{ old('marca') == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
            <option value="Tata" {{ old('marca') == 'Tata' ? 'selected' : '' }}>Tata</option>
            <option value="Tesla" {{ old('marca') == 'Tesla' ? 'selected' : '' }}>Tesla</option>
            <option value="Toyota" {{ old('marca') == 'Toyota' ? 'selected' : '' }}>Toyota</option>
            <option value="Triumph" {{ old('marca') == 'Triumph' ? 'selected' : '' }}>Triumph</option>
            <option value="Vauxhall" {{ old('marca') == 'Vauxhall' ? 'selected' : '' }}>Vauxhall</option>
            <option value="Vector" {{ old('marca') == 'Vector' ? 'selected' : '' }}>Vector</option>
            <option value="Volkswagen" {{ old('marca') == 'Volkswagen' ? 'selected' : '' }}>Volkswagen</option>
            <option value="Volvo" {{ old('marca') == 'Volvo' ? 'selected' : '' }}>Volvo</option>
            <option value="Willys" {{ old('marca') == 'Willys' ? 'selected' : '' }}>Willys</option>
        </select>        
        <br>

        <label for="anio">Año:</label>
        <input type="text" name="anio" value="{{ old('anio') }}" required>
        @error('anio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="version">Version:</label>
        <input type="text" name="version" value="{{ old('version') }}" required>
        @error('version')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="color">Color:</label>
        <input type="text" name="color" value="{{ old('color') }}" required>
        @error('color')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="cilindros">Cilindros:</label>
        <input type="text" name="cilindros" value="{{ old('cilindros') }}" required>
        @error('cilindros')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="descripcion">Descripcion:</label><br>
        <textarea name="descripcion" id="" cols="30" rows="10">{{ old('descripcion') }}</textarea>
        @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="precio">Precio:</label>
        <input type="integer" name="precio" value="{{ old('precio') }}" required>
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