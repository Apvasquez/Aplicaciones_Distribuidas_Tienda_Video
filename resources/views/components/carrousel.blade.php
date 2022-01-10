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
<main class="min-h-screen -mt-10 bg-black text-white flex items-center justify-center" x-data="carouselFilter()">
  <div class="container grid grid-cols-1">
    <div class="flex py-8 justify-center">
      <a class="px-2 text-lg uppercase font-bold tracking-widest hover:text-white" :class="{ 'text-gray-800': active != 0 }" href="#" @click.prevent="changeActive(0)">Reseña</a>
      <a class="px-2 text-lg uppercase font-bold tracking-widest hover:text-white" :class="{ 'text-gray-700': active != 1 }" href="#" @click.prevent="changeActive(1)">Juegos</a>
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
        <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

          <h1 class="absolute text-5xl uppercase font-black tracking-widest"
              x-show="active == 0"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Sensaciones</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest"
              x-show="active == 1"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Recuerdos</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest"
              x-show="active == 2"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Historias</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest"
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
              src="https://images.pexels.com/photos/1111597/pexels-photo-1111597.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
            src="https://images.pexels.com/photos/1373100/pexels-photo-1373100.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
              src="https://images.pexels.com/photos/596750/pexels-photo-596750.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
              src="https://images.pexels.com/photos/790479/pexels-photo-790479.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
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
        <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

          <h1 class="absolute text-5xl uppercase font-black tracking-widest"
              x-show="active == 0"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Beth</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest"
              x-show="active == 1"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Lee</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest"
              x-show="active == 2"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-y-12"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-out duration-300"
              x-transition:leave-start="opacity-100 transform translate-y-0"
              x-transition:leave-end="opacity-0 transform -translate-y-12"
          >Jade</h1>
          <h1 class="absolute text-5xl uppercase font-black tracking-widest"
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
              src="https://gamerstyle.com.mx/wp-content/uploads/2019/07/Luigis-Mansion-3-portada-Gamer-Style.jpg"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
              src="https://uvejuegos.com/img/caratulas/1485/DKC3-EEUU.jpg"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
              src="http://3.bp.blogspot.com/-lmTTm37M1-g/UPk8h_HV7PI/AAAAAAAAAG0/8Enk1bVLTRY/s1600/600full-street-fighter-ii-cover.jpg"
              loading="lazy">
          </div>
          <div class="w-3/5 px-2">
            <img class="h-[420px] w-full"
              src="https://1.bp.blogspot.com/-B9sN_hNi00A/V6-2-J5oxsI/AAAAAAAAAW8/i6lONapv-qoQUaiXyvvblYNGILRkB57dQCLcB/s1600/portada.png"
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
