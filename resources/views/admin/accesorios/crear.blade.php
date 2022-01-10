<x-app-layout>
<div class=""" bg-gray-100">
</div>


<div class="panel-body">



    <section class="mt-4 ">

        <form class="pt-0 m-2 mx-auto container" method="POST" action="{{ route('admin/accesorios/store') }}" role="form" enctype="multipart/form-data">

            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <h1 class="text-2xl m-2 font-semibold tracking-wide tex uppercase  text-white text-center text-shadow-xl">Crear Videojuego</h1>
            @include('admin.accesorios.frm.prt')

        </form>

    </section>

</div>
</x-app-layout>

