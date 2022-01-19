<div id="button-trigger" class="">
    <div class="max-w-5xl rounded-xl border bg-transparent border-white mx-auto my-2 py-2 shadow-cyan-700 shadow-xl" x-data="{open : false , for_edit : false ,add : false,edit : false}">
        <div x-show="!open" class="font-mono font-normal text-xl uppercase m-2 tracking-wide max-w-5xl text-center rounded p-2 bg-transparent">
            lista de Empleados
        </div>
        <div x-show="add" class="font-mono m-2 font-normal text-xl uppercase tracking-wide w-full  rounded p-2 ">
            Agregar Empleados
        </div>
        <div x-show="edit" class="font-mono m-2 font-normal text-xl uppercase tracking-wide w-full  rounded p-2 ">
            Editar Empleados
        </div>

            <div class="max-w-5xl px-2 mx-auto mb-1 overflow-hidden ">
                <div class="flex m-2 aspect-auto">
                    <div class="flex-none">
                        <button
                            class="bg-[#ff7514] border px-4 py-1 font-mono uppercase tracking-tighter rounded text-white hover:bg-[#ff7514] "
                            x-on:click="open = !open, for_edit = !for_edit , add = !add" x-show="!for_edit">+</button>
                    </div>
                    <div class="grow rounded  " x-show="!open">
                        <input class="w-full h-9 mx-2 rounded" wire:model="search" type="text"
                            placeholder="Buscar Empleado..." />
                    </div>
                </div>
                <div x-show="open">
                    <div class="font-mono text-slate-900 border m-2 p-2 text-center ">

                        <label class="block mx-auto mb-2 ">
                            <span for="id" class="mb-2 font-bold form-label ">NOMBRE</label>
                        <input wire:model="nombre" type="text" placeholder="Ingrese el nombre.."
                            class="w-1/2 rounded form-input" required>
                        <div class="text-red-700">
                        @error('nombre') <span class="error">{{ $message }}</span> @enderror

                        </div>
                        <label class="block mx-auto mb-2 ">
                            <span for="id" class="mb-2 font-bold form-label ">DIRECCIÓN</label>
                        <input wire:model="direccion" type="text" placeholder="Ingrese la dirección.."
                            class="w-1/2 rounded form-input" required>
                        <div class="text-red-700">
                        @error('direccion') <span class="error">{{ $message }}</span> @enderror

                        </div>
                        <label class="block mx-auto mb-2 ">
                            <span for="id" class="mb-2 font-bold form-label ">SALARIO</label>
                        <input wire:model="salario" type="number" placeholder="Ingrese el Salario.."
                            class="w-1/2 rounded form-input" required>
                        @error('salario') <span class="error">{{ $message }}</span> @enderror
                        <div class="text-red-700">
                        </div>
                        <label class="block mx-auto mb-2 ">
                            <span for="nombre" class="mb-2 font-bold w-1/2 form-label ">FECHA_ENTRADA</label>
                        <input wire:model="fecha_entrada" type="date" placeholder="Ingrese la fecha "
                            class=" rounded form-input" required>

                        <div class="text-red-700">
                        @error('fecha_entrada') <span class="error">{{ $message }}</span> @enderror

                        </div>

                        </label>
                        <label class="block mx-auto mb-2 text-center">
                            <span for="guard_name" class="mb-2 font-bold form-label">CENTRO_CODIGO</label>
                                <select class="m-2 w-40" name="" id="" wire:model="centro_codigo">;
                                    @foreach ($centros as $cen )
                                    <option class="capitalize" value="{{$cen->id}}">{{$cen->nombre}}</option>
                                    @endforeach
                                </select>

                        <div class="text-red-700">
                        @error('centro_codigo') <span class="error">{{ $message }}</span> @enderror

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
                                <button wire:click="update" x-on:click="open = !open , for_edit =!for_edit,edit = !edit"
                                    class="px-2 py-2 font-bold text-white border bg-[#ff7514] rounded  sm:px-1">Editar</button>
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
                                    <th class="px-4 py-3">SALARIO</th>
                                    <th class="px-4 py-3">FECHA_ENTRADA </th>
                                    <th class="px-4 py-3">CENTRO_CODIGO</th>
                                    <th class="px-4 py-3">ACCIÓN</th>

                                </tr>

                            </thead>
                            <tbody class="w-full  mx-auto divide-y divide-gray-300">

                                @foreach ($empleados as $empleado)

                                    <tr class="text-xs text-justify text-gray-900">
                                        <td class="px-4 text-slate-900 ">{{ $empleado->id }}</td>
                                        <td class="px-4 text-slate-900 ">{{ $empleado->nombre }}</td>
                                        <td class="px-4 text-slate-900 ">{{ $empleado->direccion }}</td>
                                        <td class="px-4 text-slate-900 ">{{ $empleado->salario }}</td>
                                        <td class="px-4 text-slate-900 ">{{ $empleado->fecha_entrada }}</td>
                                        <td class="px-4 text-slate-900 ">{{ $empleado->centro_codigo }}</td>

                                        <td class="px-4 py-1">
                                            <button wire:click="edit({{ $empleado }})"
                                                x-on:click="open = !open , for_edit = !for_edit , edit = !edit"
                                                class="px-2 py-2 font-bold text-[#ff7514]  border border-[#ff7514] rounded  sm:px-1">Editar</button>
                                            <button wire:click="destroy({{ $empleado }})"
                                                class="px-2 py-2 font-bold text-red-700 border border-[#ff7514] hover:bg-red-500 hover:text-white rounded  sm:px-1">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
