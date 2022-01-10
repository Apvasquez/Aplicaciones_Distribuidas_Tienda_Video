<div class="row">
    <div id="button-trigger" class="">
        <div class="card-content" x-data="{open : false , for_edit : false}">
            <div x-show="!open" class="font-mono font-normal uppercase tracking-wide w-full  rounded p-2 bg-white">
                Lista de Categorias
            </div>
            <div class="row mt-0">
                <div class="max-w-7xl px-2 mx-auto mb-1 overflow-hidden bg-white rounded-lg border shadow-sm ">
                    <div class="flex m-2 aspect-auto">
                        <div class="flex-none">
                            <button
                                class="bg-[#9c182f] border px-4 py-1 font-mono uppercase tracking-tighter rounded text-white hover:bg-[#be1935] "
                                x-on:click="open = !open, for_edit = !for_edit" x-show="!for_edit">+</button>
                        </div>
                        <div class="grow rounded  " x-show="!open">
                            <input class="w-full h-9 mx-2 rounded" wire:model="search" type="text"
                                placeholder="Buscar Categoria..." />
                        </div>
                    </div>
                    <div x-show="open">
                        <div class="font-mono text-slate-900 border m-2 p-2 rounded shadow-md text-center ">
                            <label class="block mx-auto mb-2 ">
                                <span for="id" class="mb-2 font-bold form-label ">NOMMBRE</label>
                            <input wire:model="nombre" type="text" placeholder="Ingrese el nombre.."
                                class="w-1/2 rounded form-input" required>
                            {{--  @error('id_cor') <span class="error">{{ $message }}</span> @enderror  --}}
                            <div class="text-red-700">
                            </div>
                            <label class="block mx-auto mb-2 ">
                                <span for="nombre" class="mb-2 font-bold form-label ">DESCRIPCION</label>
                            <input wire:model="descripcion" type="text" placeholder="Ingrese la descripcion "
                                class="w-1/2 rounded form-input" required>
                            {{--  @error('nombre') <span class="error">{{ $message }}</span> @enderror  --}}

                            <div class="text-red-700">
                            </div>

                            </label>
                            <label class="block mx-auto mb-2 text-center">
                                <span for="guard_name" class="mb-2 font-bold form-label">TIPOP</label>
                                    <select class="m-2 w-40" name="" id="" wire:model="tipo">
                                        <option value="Accion">Accion</option>
                                        <option value="Arcade">Arcade</option>
                                        <option value="Clásico">Clásico</option>
                                        <option value="Aventura">Aventura</option>
                                        <option value="Deportes">Deportes</option>
                                        {{-- <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option> --}}
                                    </select>
                            {{--  @error('pais') <span class="error">{{ $message }}</span> @enderror  --}}

                            <div class="text-red-700">
                            </div>
                            </label>
                            @if ($accion == 'store')
                            <div class="mt-6 text-center">
                             <button wire:click="default" x-on:click="open = !open , for_edit =!for_edit ,add = !add"
                                 class="px-2 py-2  font-bold text-black-dark border bg-gray-600 rounded hover:bg-gray-700 ">
                                 Cancelar</button>
                             <button wire:click="store" x-on:click="open = !open , for_edit =!for_edit , add = !add"
                                 class="px-2 py-2 font-bold text-white bg-[#9c182f] rounded hover:bg-red-800">Agregar</button>
                         </div>
                            @else
                            <div class="mt-6 text-center">
                             <button wire:click="default" x-on:click="open = !open , for_edit =!for_edit,edit = !edit"
                                 class="px-2 py-2  font-bold text-black-dark border bg-gray-600 rounded hover:bg-gray-700 ">
                                 Cancelar</button>
                             <button wire:click="update" x-on:click="open = !open , for_edit =!for_edit,edit = !edit"
                             class="px-2 py-2 font-bold text-white border bg-[#9c182f] rounded  sm:px-1">Editar</button>
                         </div>
                            @endif
                        </div>
                    </div>
                    <div x-show="!open" class=" ">
                        <div class="w-full mx-auto overflow-hidden bg-white rounded-lg shadow min-w-max-content">
                            <table class="w-full overflow-hidden bg-white rounded-lg shadow ">
                                <thead class="border-b border-gray-500 bg-gray-50">
                                    <tr class="text-justify uppercase text-sm">
                                        <th class="px-4 py-3 w-">ID</th>
                                        <th class="px-4 py-3">NOMBRE</th>
                                        <th class="px-4 py-3">DESCRIPCION </th>
                                        <th class="px-4 py-3">TIPO</th>
                                        <th class="px-4 py-3">ACCIÓN</th>

                                    </tr>
                                </thead>
                                <tbody class="w-full mx-auto divide-y divide-gray-300">
                                    @foreach ($categorias as $cat)
                                        <tr class="text-xs text-justify text-gray-500">
                                            <td class="px-4 ">{{ $cat->id }}</td>
                                            <td class="px-4 ">{{ $cat->nombre }}</td>
                                            <td class="px-4 ">{{ $cat->descripcion }}</td>
                                            <td class="px-4 ">{{ $cat->tipo }}</td>

                                            <td class="px-4 py-1">
                                                <button wire:click="edit({{ $cat }})"
                                                    x-on:click="open = !open , for_edit = !for_edit"
                                                    class="px-2 py-2 font-bold text-[#9c182f] bg-white border border-[#9c182f] rounded  sm:px-1">Editar</button>
                                                <button wire:click="destroy({{ $cat }})"
                                                    class="px-2 py-2 font-bold text-[#9c182f] bg-white border border-[#9c182f] rounded  sm:px-1">Eliminar</button>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
