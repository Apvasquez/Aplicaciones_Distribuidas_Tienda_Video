<div class="row">
    <div class="w-full mx-auto h-screen overflow-hidden bg-white rounded-lg shadow min-w-max-content">
        <table class="w-full overflow-hidden bg-white rounded-lg shadow ">
            <thead class="border-b border-gray-500 bg-gray-50">
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
            <tbody class="w-full h-screen mx-auto divide-y divide-gray-300">
                <div> hahahaha
                    <h1 class="font-bold text-black font-xl">{{$empleados}}</h1>
                </div>
                {{--  @foreach ($empleados as $empleado)
                heyey
                    <tr class="text-xs text-justify text-gray-900">
                        <td class="px-4 text-slate-900 ">{{ $empleado->codigo }}</td>
                        <td class="px-4 text-slate-900 ">{{ $empleado->nombre }}</td>
                        <td class="px-4 text-slate-900 ">{{ $empleado->direccion }}</td>
                        <td class="px-4 text-slate-900 ">{{ $empleado->salario }}</td>
                        <td class="px-4 text-slate-900 ">{{ $empleado->fecha_entrada }}</td>
                        <td class="px-4 text-slate-900 ">{{ $empleado->centro_codigo}}</td>

                        <td class="px-4 py-1">
                            <button wire:click="edit({{ $empleado }})"
                                x-on:click="open = !open , for_edit = !for_edit"
                                class="px-2 py-2 font-bold text-[#9c182f] bg-white border border-[#9c182f] rounded  sm:px-1">Editar</button>
                            <button wire:click="destroy({{ $empleado }})"
                                class="px-2 py-2 font-bold text-[#9c182f] bg-white border border-[#9c182f] rounded  sm:px-1">Eliminar</button>
                        </td>
                    </tr>
                @endforeach  --}}
            </tbody>
        </table>

    </div>
</div>
