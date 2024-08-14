<template>
  <Carousel>
    <Slide v-for="slide in items" :key="slide">
        <a href="#">
            <div class="carousel__item">
                <img :src="slide.imageUrl" class="object-cover" alt=""/>
                <div v-if="type == 'Banner'">
                    <img class="z-50 absolute bottom-10 left-14 h-[80px] w-[80px] rounded-xl" :src="slide.imageIcon" alt="">
                    <div class="h-16 w-11/12 text-center bg-black absolute inset-x-9 bottom-5 rounded-xl bg-opacity-10 px-28 grid items-center grid-cols-2">

                        <div class="pl-5 w-[200px] grid">
                            <h1 class="font-medium text-gray-50 inline">{{slide.titulo}}</h1>
                            <h5 class="font-semibold text-sm text-gray-300 inline">{{slide.subtitulo}}</h5>
                        </div>

                    </div>
                </div>
            </div>
        </a>
    </Slide>

    <template #addons>
      <Navigation />
      <Pagination />
    </template>
  </Carousel>
</template>

<script>
import { defineComponent } from 'vue'
import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel'

import 'vue3-carousel/dist/carousel.css'

export default defineComponent({
  name: 'Basic',
  props:["items", "type"],
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
})
</script>

<style>
.carousel{
    border-radius: 15px;
}
.carousel__pagination{
    /* display: none; */
    position: absolute;
    bottom: 40px;
    right: 100px;
    padding: 0 10px 0 10px;

}
.carousel__item {
  border-radius: 10px;
  min-height: 200px;
  width: 100%;
  color: var(--vc-clr-white);
  font-size: 20px;
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
}


.carousel__track{
    height: 100%;
}

.carousel__viewport{
    height: 100%;
  border-radius: 10px;

}

.carousel__slide {
    width: 100%;
    height: 100%;
    border-radius: 10px;
}
.carousel__icon{
    color: white;
}
.carousel__prev,
.carousel__next {
    box-sizing: content-box;

    border-radius: 7px;
}

.carousel__pagination-button::after{
    background-color: white;
    width: 6px;
    height: 6px;
    border-radius: 50%;
}

.carousel__pagination-button.carousel__pagination-button--active::after{
    background-color: rgb(234 88 12 / 1);
    width: 10px;
    height: 10px;
}
.carousel__next{
    position: absolute;
    bottom: 40px;
}
.carrosel_produto .carousel__pagination{
    position: absolute;
    bottom: 10px;
    left: 10px;
    width: 50px;
    /* background-color: red; */
}
</style>
