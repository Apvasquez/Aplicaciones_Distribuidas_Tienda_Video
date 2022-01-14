<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - AlpineJS Slider V3</title>
  <link rel='stylesheet' href='https://unpkg.com/flickity@2/dist/flickity.min.css'>
<link rel='stylesheet' href='https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<main class="min-h-screen -mt-12 bg-transparent text-white flex items-center justify-center" x-data="carouselFilter()">
  <div class="container grid grid-cols-1">
    <div class="flex py-2 justify-center font-body">
      <a class="px-2 text-lg uppercase font-bold tracking-widest hover:text-white" :class="{ 'text-gray-800': active != 0 }" href="#" @click.prevent="changeActive(0)">Centros</a>
      <a class="px-2 text-lg uppercase font-bold tracking-widest hover:text-white" :class="{ 'text-gray-700': active != 1 }" href="#" @click.prevent="changeActive(1)">Especialidades</a>
    </div>

    <div class="row-start-2 col-start-1"
         x-show="active == 0"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform scale-90"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-90"
    >
      <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
        <div class="col-start-1 row-start-1 relative z-20 mt-24 flex items-center justify-center pointer-events-none">

          <h1 class="absolute text-5xl uppercase font-black tracking-widest   text-[#ff7514]" style="text-shadow: rgb(4, 1, 48) 3px 3px 5px; "
              x-show="active == 0"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Sensaciones</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest   text-[#ff7514]" style="text-shadow: rgb(4, 1, 48) 3px 3px 5px; "
              x-show="active == 1"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Recuerdos</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest   text-[#ff7514]" style="text-shadow: rgb(4, 1, 48) 3px 3px 5px; "
              x-show="active == 2"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Historias</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest   text-[#ff7514]" style="text-shadow: rgb(4, 1, 48) 3px 3px 5px; "
              x-show="active == 3"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Ideas</h1>
        </div>

        <div class="carousel h-[420px] col-start-1 row-start-1" x-ref="carousel">
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
              src="https://dralbuja.com/wp-content/uploads/2018/08/ALBUJA-FACHADA.jpg"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
            src="https://noticias.mapfre.com/media/2020/04/centros-medicos-nuevo-800x472-1.jpg"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
              src="https://images.adsttc.com/media/images/5249/e17d/e8e4/4e67/bf00/0314/large_jpg/AITOR_ESTEVEZ.jpg?1380573554"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
              src="https://i.ebayimg.com/images/g/XzoAAOSwIf9e6mLA/s-l800.jpg"
              loading="lazy">
          </div>
        </div>
      </div>
    </div>


    <div class="row-start-2 col-start-1"
         x-show="active == 1"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform scale-90"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-90"
   >
      <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
        <div class="col-start-1 row-start-1 relative z-20 mt-24 flex items-center justify-center pointer-events-none">

          <h1 class="absolute text-5xl uppercase font-black tracking-widest   text-[#ff7514]" style="text-shadow: rgb(4, 1, 48) 3px 3px 5px; "
              x-show="active == 0"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Beth</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest   text-[#ff7514]" style="text-shadow: rgb(4, 1, 48) 3px 3px 5px; "
              x-show="active == 1"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Lee</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest   text-[#ff7514]" style="text-shadow: rgb(4, 1, 48) 3px 3px 5px; "
              x-show="active == 2"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Jade</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest   text-[#ff7514]" style="text-shadow: rgb(4, 1, 48) 3px 3px 5px; "
              x-show="active == 3"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Drew</h1>
        </div>


        <div class="carousel h-[420px] col-start-1  row-start-1" x-ref="carousel">
            <div class="w-3/5 px-2">
                <img class="h-[420px] w-full"
              src="https://papelmatic.com/wp-content/uploads/2016/07/papelmatic-higiene-profesional-centros-medicos-evolucion-higiene-1080x675.jpg"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
              src="https://veigler.com/wp-content/uploads/2020/01/centro-medico-e1620819797482.jpg"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
              src="https://www.esan.edu.pe/apuntes-empresariales/2018/03/20/1120x630_categorizacion_salud.jpg"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
              src="https://clinic-cloud.com/wp-content/uploads/2020/04/hospital-ward-1338585_640.jpg"
              loading="lazy">
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
<!-- partial -->
  <script src='https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js'></script>
<script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js'></script><script  src="./script.js"></script>

</body>
<script>
    function carousel() {
        return {
          active: 0,
          init() {
            var flkty = new Flickity(this.$refs.carousel, {
              wrapAround: true
            });
            flkty.on('change', i => this.active = i);
          }
        }
      }

      function carouselFilter() {
        return {
          active: 0,
          changeActive(i) {
            this.active = i;

            this.$nextTick(() => {
              let flkty = Flickity.data( this.$el.querySelectorAll('.carousel')[i] );
              flkty.resize();

              console.log(flkty);
            });
          }
        }
      }
</script>
</html>
