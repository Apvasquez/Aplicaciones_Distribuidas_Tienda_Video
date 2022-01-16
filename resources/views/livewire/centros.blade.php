<div class="row">
    <div class="w-full mx-auto h-screen overflow-hidden bg-white rounded-lg shadow min-w-max-content">
        <table class="w-full overflow-hidden bg-white rounded-lg shadow ">
            <thead class="border-b border-gray-500 bg-gray-50">
                <tr class="text-justify uppercase text-sm">
                    <th class="px-4 py-3 w-">CODIGO</th>
                    <th class="px-4 py-3">NOMBRE</th>
                    <th class="px-4 py-3">DIRECCION </th>
                    <th class="px-4 py-3">TELEFONO</th>
                    <th class="px-4 py-3">ACCIÓN</th>

                </tr>
            </thead>
            <tbody class="w-full mx-auto divide-y divide-gray-300">
                heeyeyeyeyyee
                @foreach ($centro as $cat)
                {{$centro}}
                    <tr class="text-xs text-justify text-gray-900">
                        <td class="px-4 text-slate-900 ">{{ $cat->id }}</td>
                        <td class="px-4 text-slate-900 ">{{ $cat->nombre }}</td>
                        <td class="px-4 text-slate-900 ">{{ $cat->direccion }}</td>
                        <td class="px-4 text-slate-900 ">{{ $cat->telefono }}</td>

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
