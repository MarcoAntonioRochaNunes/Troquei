<template>
  <Carousel>
    <Slide v-for="(slide, index) in items" :key="index">
        <div class="carousel__item">
            <img class="object-cover h-full w-full rounded-xl" :src="slide.imageUrl" alt="">
        </div>
    </Slide>

    <template #addons>
      <Navigation />
      <Pagination />
    </template>
  </Carousel>
</template>

<script>
import { defineComponent } from 'vue'
import { Carousel, Pagination, Navigation, Slide } from 'vue3-carousel'

import 'vue3-carousel/dist/carousel.css'


export default defineComponent({
  name: 'Basic',
  props:['items'],
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
})
</script>
<style>
    .carousel__item{
        max-width: 710px;
        width: 100%;
        max-height: 500px;
        height: 100%;
        /* background-color: #fff; */
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

    .carousel__next,
    .carousel__prev{
        color: white;
        transition: .5s;
        border-radius: 10%;
    }

    .carousel__next:hover,
    .carousel__prev:hover{

        background-color: white;
        color: #444;
        border-radius: 25%;
    }

    .carousel__pagination{
        position: absolute;
        top: 10px;
        right: 20px;
    }
</style>
