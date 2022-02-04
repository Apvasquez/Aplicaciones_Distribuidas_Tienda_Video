<div id="button-trigger" class="">
    <div class="max-w-5xl rounded-xl border bg-transparent border-white mx-auto my-2 py-2 shadow-cyan-700 shadow-xl" x-data="{open : false , for_edit : false ,add : false,edit : false}">
        <div x-show="!open" class="font-mono font-normal uppercase m-2 tracking-wide max-w-5xl text-center rounded p-2 ">
            lista de Centros Médicos
        </div>
        <div x-show="add" class="font-mono m-2 font-normal uppercase tracking-wide w-full  rounded p-2 ">
            Agregar Centro Médico
        </div>
        <div x-show="edit" class="font-mono m-2 font-normal uppercase tracking-wide w-full  rounded p-2 ">
            Editar Centros Médicos
        </div>
                <div class="max-w-5xl px-2 mx-auto mb-1 overflow-hidden  rounded-lg ">
                    <div class="flex m-2 aspect-auto">
                        <div class="flex-none">
                            <button
                            class="bg-[#ff7514] border px-4 py-1 font-mono uppercase tracking-tighter rounded text-white hover:bg-[#ff7514] "
                            x-on:click="open = !open, for_edit = !for_edit , add = !add" x-show="!for_edit">+</button>
                        </div>
                        <div class="grow rounded  " x-show="!open">
                            <input class="w-full h-9 mx-2 rounded" wire:model="search" type="text"
                                placeholder="Buscar Centro..." />
                        </div>
                    </div>
                    <div x-show="open">
                        <div class="font-mono text-slate-900 border m-2 p-2 rounded shadow-md text-center ">

                            <label class="block mx-auto mb-2 ">
                                <span for="nombre" class="mb-2 font-bold form-label ">Nombre</label>
                            <input wire:model="nombre" type="text" placeholder="Ingrese un nombre "
                                class="w-1/2 rounded form-input" required>

                            <div class="text-red-700">
                            @error('nombre') <span class="error">{{ $message }}</span> @enderror

                            </div>
                            </label>
                            <label class="block mx-auto mb-2 ">
                                <span for="nombre" class="mb-2 font-bold form-label ">Direccion</label>
                            <input wire:model="direccion" type="text" placeholder="Ingrese una direccion "
                                class="w-1/2 rounded form-input" required>

                            <div class="text-red-700">
                            @error('direccion') <span class="error">{{ $message }}</span> @enderror

                            </div>

                            </label>
                            <label class="block mx-auto mb-2 ">
                                <span for="nombre" class="mb-2 font-bold form-label ">Telefono</label>
                            <input wire:model="telefono" type="text" placeholder="Ingrese un telefono "
                                class="w-1/2 rounded form-input" required>

                            <div class="text-red-700">
                            @error('telefono') <span class="error">{{ $message }}</span> @enderror

                            </div>

                            </label>
                            @if ($accion == 'store')
                            <div class="mt-6 text-center">
                                <button wire:click="default" x-on:click="open = !open , for_edit =!for_edit ,add = !add"
                                    class="px-2 py-2  font-bold text-black-dark border bg-gray-600 rounded hover:bg-gray-700 ">
                                    Cancelar</button>
                                <button wire:click="store" x-on:click="open = !open , for_edit =!for_edit , add = !add"
                                    class="px-2 py-2 font-bold text-white bg-[#ff7514] rounded hover:bg-red-800">Agregar</button>
                            </div>
                        @else
                        <div class="mt-6 text-center">
                            <button wire:click="default"
                                x-on:click="open = !open , for_edit =!for_edit,edit = !edit"
                                class="px-2 py-2  font-bold text-black-dark border bg-gray-600 rounded hover:bg-gray-700 ">
                                Cancelar</button>
                            <button wire:click="update"
                                x-on:click="open = !open , for_edit =!for_edit,edit = !edit"
                                class="px-2 py-2 font-bold text-white border bg-[#9c182f] rounded  sm:px-1">Editar</button>
                        </div>
                        @endif
                        </div>
                    </div>
                    <div x-show="!open" class=" ">
                        <div class="w-full mx-auto overflow-hidden  rounded-lg shadow min-w-max-content">
                            <table class="w-full overflow-hidden  rounded-lg shadow ">
                                <thead class="border-b border-gray-500 ">
                                    <tr class="text-justify uppercase text-sm">
                                        <th class="px-4 py-3 w-">CODIGO</th>
                                        <th class="px-4 py-3">NOMBRE</th>
                                        <th class="px-4 py-3">DIRECCION </th>
                                        <th class="px-4 py-3">TELEFONO</th>
                                        <th class="px-4 py-3">ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody class="w-full mx-auto divide-y divide-gray-300">
                                    @foreach ($centro as $cat)
                                        <tr class="text-xs text-justify text-gray-700">
                                            <td class="px-4 ">{{ $cat->id }}</td>
                                            <td class="px-4 ">{{ $cat->nombre }}</td>
                                            <td class="px-4 ">{{ $cat->direccion }}</td>
                                            <td class="px-4 ">{{ $cat->telefono }}</td>
                                            <td class="px-4 py-1">
                                                <button wire:click="edit({{ $cat }})"
                                                    x-on:click="open = !open , for_edit = !for_edit , edit = !edit"
                                                    class="px-2 py-2 font-bold text-[#ff7514]  border border-[#ff7514] rounded  sm:px-1">Editar</button>
                                                <button wire:click="destroy({{ $cat }})"
                                                class="px-2 py-2 font-bold text-red-700 border border-[#ff7514] hover:bg-red-500 hover:text-white rounded  sm:px-1">Eliminar</button>
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
