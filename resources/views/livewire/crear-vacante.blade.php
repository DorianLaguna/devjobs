<form class="md:w-1/2 space-y-4" >
    <div>
        <x-input-label 
        for="titulo" 
        :value="__('Titulo Vacante')" />

        <x-text-input 
        id="titulo" 
        class="block w-full" 
        type="text" 
        name="titulo" 
        :value="old('titulo')" 
        autocomplete="username" 
        placeholder="Titulo de la Vacante"
        />
        
        <x-input-error 
        :messages="$errors->get('titulo')" 
        class="mt-2" />
    </div>

    <div>
        <x-input-label 
        for="salario" 
        :value="__('Salario')" />

        <select name="salario" id="salario" class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            
        </select>
        
        <x-input-error 
        :messages="$errors->get('salario')" 
        class="mt-2" />
    </div>

    <div>
        <x-input-label 
        for="categoria" 
        :value="__('Categoria')" />

        <select name="categoria" id="categoria" class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            
        </select>
        
        <x-input-error 
        :messages="$errors->get('categoria')" 
        class="mt-2" />
    </div>

    <div>
        <x-input-label 
        for="empresa" 
        :value="__('Empresa')" />

        <x-text-input 
        id="empresa" 
        class="block w-full" 
        type="text" 
        name="empresa" 
        :value="old('empresa')" 
        autocomplete="username" 
        placeholder="Nombre de la empresa"
        />
        
        <x-input-error 
        :messages="$errors->get('empresa')" 
        class="mt-2" />
    </div>

    <div>
        <x-input-label 
        for="ultimo_dia" 
        :value="__('Ultimo dia para postularse')" />

        <x-text-input 
        id="ultimo_dia" 
        class="block w-full" 
        type="date" 
        name="ultimo_dia" 
        :value="old('ultimo_dia')" 
        autocomplete="username" 
        />
        
        <x-input-error 
        :messages="$errors->get('ultimo_dia')" 
        class="mt-2" />
    </div>

    <div>
        <x-input-label 
        for="descripcion" 
        :value="__('Descripcion del puesto')" />

        <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Descripcion general del puesto, experiencia" class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm h-72">

        </textarea>
        
        <x-input-error 
        :messages="$errors->get('ultimo_dia')" 
        class="mt-2" />
    </div>

    <div>
        <x-input-label 
        for="imagen" 
        :value="__('Imagen')" />

        <x-text-input 
        id="imagen" 
        class="block w-full" 
        type="file" 
        name="imagen" 
        :value="old('imagen')" 
        autocomplete="username" 
        />
        
    </div>

    <x-primary-button>
        Crear Vacante
    </x-primary-button>

</form>
