<form class="md:w-1/2 space-y-4" wire:submit.prevent='crearVacante'>
    <div>
        <x-input-label 
        for="titulo" 
        :value="__('Titulo Vacante')" />

        <x-text-input 
        id="titulo" 
        class="block w-full" 
        type="text" 
        wire:model="titulo" 
        :value="old('titulo')" 
        placeholder="Titulo de la Vacante"
        />
        
        @error('titulo')
            <p>Hay error</p>
        @enderror
        
    </div>

    <div>
        <x-input-label 
        for="salario" 
        :value="__('Salario')" />

        <select wire:model="salario" id="salario" class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{$salario->id}}">{{$salario->salario}}</option>
            @endforeach
        </select>
        @error('salario')
            {{$message}}
        @enderror
    </div>

    <div>
        <x-input-label 
        for="categoria" 
        :value="__('Categoria')" />

        <select wire:model="categoria" id="categoria" class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option>-- Selecione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <x-input-label 
        for="empresa" 
        :value="__('Empresa')" />

        <x-text-input 
        id="empresa" 
        class="block w-full" 
        type="text" 
        wire:model="empresa" 
        :value="old('empresa')" 
        autocomplete="username" 
        placeholder="Nombre de la empresa"
        />
        @error('empresa')
            {{$message}}
        @enderror
    </div>

    <div>
        <x-input-label 
        for="ultimo_dia" 
        :value="__('Ultimo dia para postularse')" />

        <x-text-input 
        id="ultimo_dia" 
        class="block w-full" 
        type="date" 
        wire:model="ultimo_dia" 
        :value="old('ultimo_dia')" 
        autocomplete="username" 
        />
    </div>

    <div>
        <x-input-label 
        for="descripcion" 
        :value="__('Descripcion del puesto')" />

        <textarea wire:model="descripcion" id="" cols="30" rows="10" placeholder="Descripcion general del puesto, experiencia" class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm h-72">

        </textarea>
    </div>

    <div>
        <x-input-label 
        for="imagen" 
        :value="__('Imagen')" />

        <x-text-input 
        id="imagen" 
        class="block w-full" 
        type="file" 
        wire:model="imagen" 
        :value="old('imagen')" 
        autocomplete="username" 
        />
        
    </div>

    <x-primary-button>
        Crear Vacante
    </x-primary-button>

</form>
