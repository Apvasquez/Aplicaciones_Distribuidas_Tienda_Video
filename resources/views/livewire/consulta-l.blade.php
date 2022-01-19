<div id="button-trigger" class="">
    <div class="card-content max-w-5xl mx-auto my-2 py-2" x-data="{open : false , for_edit : false ,add : false,edit : false}">
        <div x-show="!open" class="font-mono font-normal uppercase m-2 tracking-wide max-w-5xl text-center rounded p-2 bg-white">
            lista de Consultas
        </div>
        <div x-show="add" class="font-mono m-2 font-normal uppercase tracking-wide w-full  rounded p-2 bg-white">
            Agregar Consulta
        </div>
        <div x-show="edit" class="font-mono m-2 font-normal uppercase tracking-wide w-full  rounded p-2 bg-white">
            Editar Consulta
        </div>
                <div class="max-w-5xl px-2 mx-auto mb-1 overflow-hidden bg-white rounded-lg border shadow-sm ">
                    <div class="flex m-2 aspect-auto">
                        <div class="flex-none">
                            <button
                            class="bg-[#9c182f] border px-4 py-1 font-mono uppercase tracking-tighter rounded text-white hover:bg-[#be1935] "
                            x-on:click="open = !open, for_edit = !for_edit , add = !add" x-show="!for_edit">+</button>
                        </div>
                        <div class="grow rounded  " x-show="!open">
                            <input class="w-full h-9 mx-2 rounded" wire:model="search" type="text"
                                placeholder="Buscar consulta..." />
                        </div>
                    </div>
                    <div x-show="open">
                        <div class="font-mono text-slate-900 border m-2 p-2 rounded shadow-md text-center ">

                        <label class="block mx-auto mb-2 ">
                                <span for="nombre" class="mb-2 font-bold form-label ">Centro</label>
                                    <select class="m-2 w-40" name="" id="" wire:model="centro_codigo">;
                                        @foreach ($centros as $cen )
                                        <option class="capitalize" value="{{$cen->id}}">{{$cen->nombre}}</option>
                                        @endforeach
                                    </select>

                            @error('centro_codigo') <span class="error">{{ $message }}</span> @enderror

                            <div class="text-red-700">
                            </div>

                            <label class="block mx-auto mb-2 ">
                                <span for="nombre" class="mb-2 font-bold form-label ">Empleado</label>
                            <input wire:model="empleado_codigo" type="text" placeholder="Empleado "
                                class="w-1/2 rounded form-input" required>
                            @error('empleado_codigo') <span class="error">{{ $message }}</span> @enderror

                            <div class="text-red-700">
                            </div>

                            <label class="block mx-auto mb-2 ">
                                <span for="nombre" class="mb-2 font-bold form-label ">Especialidad</label>
                            <input wire:model="especialidad_codigo"   type="text" placeholder="Especialidad "
                                class="w-1/2 rounded form-input" required>
                            @error('especialidad_codigo') <span class="error">{{ $message }}</span> @enderror

                            <div class="text-red-700">
                            </div>

                        <label class="block mx-auto mb-2 ">
                                <span for="id" class="mb-2 font-bold form-label ">Fecha</label>
                            <input wire:model="fecha" type="date" placeholder="Ingrese una fecha.."
                                class="w-1/2 rounded form-input" required>
                            @error('fecha') <span class="error">{{ $message }}</span> @enderror
                            <div class="text-red-700">
                            </div>

                            <label class="block mx-auto mb-2 ">
                                <span for="nombre" class="mb-2 font-bold form-label ">Hora</label>
                            <input wire:model="hora" type="time" placeholder="Ingrese una hora"
                                class="w-1/2 rounded form-input" required>
                            @error('hora') <span class="error">{{ $message }}</span> @enderror

                            <div class="text-red-700">
                            </div>


                            <label class="block mx-auto mb-2 ">
                                <span for="nombre" class="mb-2 font-bold form-label ">Paciente</label>
                            <input wire:model="paciente" type="text" placeholder="Ingrese un paciente"
                                class="w-1/2 rounded form-input" required>
                            @error('paciente') <span class="error">{{ $message }}</span> @enderror

                            <div class="text-red-700">
                            </div>


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
                                        <th class="px-4 py-3 w-">CODIGO</th>
                                        <th class="px-4 py-3">CENTRO</th>
                                        <th class="px-4 py-3">EMPLEADO </th>
                                        <th class="px-4 py-3">ESPECIALIDAD</th>
                                        <th class="px-4 py-3">FECHA</th>
                                        <th class="px-4 py-3">HORA</th>
                                        <th class="px-4 py-3">PACIENTE</th>
                                        <th class="px-4 py-3">ACCIÓN</th>

                                    </tr>
                                </thead>
                                <tbody class="w-full mx-auto divide-y divide-gray-300">
                                    @foreach ($consulta as $con)
                                        <tr class="text-xs text-justify text-gray-500">
                                            <td class="px-4 ">{{ $con->id }}</td>
                                            <td class="px-4 ">{{ $con->centro_codigo }}</td>
                                            <td class="px-4 ">{{ $con->empleado_codigo }}</td>
                                            <td class="px-4 ">{{ $con->especialidad_codigo }}</td>
                                            <td class="px-4 ">{{ $con->fecha }}</td>
                                            <td class="px-4 ">{{ $con->hora }}</td>
                                            <td class="px-4 ">{{ $con->paciente }}</td>
                                            <td class="px-4 py-1">
                                                <button wire:click="edit({{ $con }})"
                                                    x-on:click="open = !open , for_edit = !for_edit, edit = !edit"
                                                    class="px-2 py-2 font-bold text-[#9c182f] bg-white border border-[#9c182f] rounded  sm:px-1">Editar</button>
                                                <button wire:click="destroy({{ $con }})"
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
