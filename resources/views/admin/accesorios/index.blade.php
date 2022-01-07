<x-app-layout>

    <div class="mt-4 flex-initial flex justify-between">

        <div class="ml-4 mt-1 p-1 w-60">
            @can('admin.Editar.edit')
                <a href="{{ route('admin/accesorios/crear') }}"
                    class="bg-gray-800 py-3 mt-1 px-2 sm:py-3 border border-white sm:px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-700">Agregar</a>
            @endcan

        </div>
        <div class="justify-center mx-auto">
            <h1
                class="flex justify-center text-center text-4xl font-mono sm:text-3xl -ml-14 tracking-wider text-white uppercase font-semibold">
                Tienda de Juegos</h1>


        </div>

    </div>


    <div class="min-h-screen m-3 border-cyan-300 border p-3  bg-transparent shadow-2xl rounded  shadow-green-600 ">

        <div class="mx-12 my-6">
            <div
                class="grid md:grid-cols-2  gap-y-4 justify-items-center items-center sm:grid-cols-2 grid-cols-1 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($accesorios as $accesorio)

                    <div class="  pb-2  bg-white rounded   shadow-xl ">
                        <a class="block  sm:w-60 h-48 rounded shadow overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center  w-full h-full block"
                                src="../uploads/{{ $accesorio->imagenesaccesorios()->first()->nombre }}">
                        </a>
                        <div class="mt-0 pl-2 flex justify-between">
                            <h3 class="text-gray-500 text-xl  tracking-widest  title-font mb-0">Accesorios </h3>
                            <button
                                onclick="location.href='{{ url('/admin/accesorios/detallesproducto', [$accesorio->id]) }}'"
                                href="" type="button"
                                class="bg-green-600 py-2 px-4 text-white font-bold uppercase text-xs rounded hover:bg-green-800">Ver</button>


                        </div>
                        <div class="mt-0 pl-2">

                            <h2 class="text-gray-900  font-bold text-base ">{{ $accesorio->nombre }}</h2>
                            <p class="mt-0 ">${{ $accesorio->precio }}</p>
                            <form action="{{ route('admin/accesorios/eliminar', $accesorio->id) }}" method="POST"
                                class="form-horizontal pl-0 " role="form" onsubmit="return confirmarEliminar()">

                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                {{-- <a href='{{ route('accesorio.pay', $accesorio) }}'
                                href="" type=" button"
                                    class="bg-yellow-600 py-2 px-2 text-white font-bold uppercase text-xs rounded hover:bg-teal-800">Comprar</a> --}}
                                @can('admin.Editar.edit')
                                    <a href="{{ route('admin/accesorios/actualizar', $accesorio->id) }}"
                                        class="bg-gray-700 py-2 px-4 text-white font-bold uppercase text-xs rounded hover:bg-gray-900">Editar</a>

                                    <button type="submit"
                                        class="bg-red-600 py-2 px-1 text-white font-bold uppercase text-xs rounded hover:bg-red-800">Eliminar</button>
                                @endcan


                            </form>
                        </div>
                    </div>
                @endforeach
            </div>





            {{-- <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mt-6 pd-6 container mx-12">
                        <a href="{{ route('admin/accesorios/crear') }}"
                            class="bg-purple-600 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-purple-800">Agregar</a>
                    </div>
                    <section class="example mt-4">

                        <div class="">

                            <table class="table w-full border-collapse border-green-400">
                                <thead>
                                    <tr class="bold  text-2xl text-red-700">
                                        <th class="border border-green-500 px-4 py-2 m-5 ml-12">Nombres</th>
                                        <th class="border border-green-500 px-4 py-2 m-5">Precio</th>
                                        <th class="border border-green-500 px-4 py-2 m-5">Stock</th>
                                        <th class="border border-green-500 px-4 py-2 ">Imagen</th>
                                        <th class="border border-green-500 px-4 py-2 m-5">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($accesorios as $bic)
                                        <tr>
                                            <td class="border border-green-500 px-4 py-2 v-align-middle">
                                                {{ $bic->nombre }}</td>
                                            <td class="border border-green-500 px-4 py-2 v-align-middle">
                                                {{ $bic->precio }}</td>
                                            <td class="border border-green-500 px-4 py-2 v-align-middle">
                                                {{ $bic->stock }}</td>
                                            <td class="border border-green-500 px-0 bg-cover py-2 flex items-center">
                                                <div class="flex flex-wrap -m-4">
                                                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                                      <a class="block relative h-48 rounded overflow-hidden">
                                                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="../uploads/{{ $bic->imagenesaccesorios()->first()->nombre }}">
                                                      </a>
                                                      <div class="mt-4">
                                                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                                        <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                                                        <p class="mt-1">$16.00</p>
                                                      </div>
                                                    </div>
                                                </div>

                                            </td>
                                            <td class=" bg-cover border border-green-500 px-4 py-2 ">

                                                <form action="{{ route('admin/accesorios/eliminar', $bic->id) }}"
                                                    method="POST" class="form-horizontal " role="form"
                                                    onsubmit="return confirmarEliminar()">

                                                    <input type="hidden" name="_method" value="PUT">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button
                                                        onclick="location.href='{{ url('/admin/accesorios/detallesproducto', [$bic->id]) }}'"
                                                        href="" type="button" class="btn btn-dark">Ver</button>

                                                    <a href="{{ route('admin/accesorios/actualizar', $bic->id) }}"
                                                        class="btn btn-primary">Editar</a>

                                                    <button type="submit" class="btn btn-danger">Eliminar</button>

                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </section>
                </div>
            </div> --}}
        </div>







    </div>

</x-app-layout>
