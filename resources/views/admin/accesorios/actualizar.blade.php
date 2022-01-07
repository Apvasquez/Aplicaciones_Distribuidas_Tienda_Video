<x-app-layout>
<div class="min-h-screen mb-5 bg-gray-100">
    {{--  @livewire('navigation-dropdown')  --}}

    <div class="panel-body">
        <section class="">

            <form class="h-screen mb-32 container mx-auto border-gray-900" style="" method="POST"
                action="{{ route('admin/accesorios/update', $accesorios->id) }}" role="form"
                enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1 class="font-bold text-3xl text-center uppercase  ">Actualizar</h1>
                @include('admin.accesorios.frm.prt')

            </form>



        </section>

    </div>
</x-app-layout>

