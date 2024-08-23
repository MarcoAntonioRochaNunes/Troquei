<template>
    <HeaderView :user="user" />

  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 pb-1 pt-1 sm:px-6 sm:pb-1 sm:pt-5 lg:max-w-7xl lg:px-8">
      <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
        <!-- Image gallery -->
        <TabGroup as="div" class="flex flex-col-reverse">
          <!-- Image selector -->
          <div class="mx-auto mt-6 hidden w-full max-w-2xl sm:block lg:max-w-none">
            <TabList class="grid grid-cols-4 gap-6">
              <Tab v-for="image in produto.anuncio_foto" :key="image.id" class="relative flex h-24 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4" v-slot="{ selected }">
                <span class="sr-only">{{ image.titulo }}</span>

                <span class="absolute inset-0 overflow-hidden rounded-md">
                  <img :src="image.url" alt="" class="h-full w-full object-cover object-center" />
                </span>
                <span :class="[selected ? 'ring-orange-500' : 'ring-transparent', 'pointer-events-none absolute inset-0 rounded-md ring-2 ring-offset-2']" aria-hidden="true" />
              </Tab>
            </TabList>
          </div>

          <TabPanels class="aspect-h-1 aspect-w-1 w-full max-h-[600px]">
            <TabPanel v-for="image in produto.anuncio_foto" :key="image.id" >
              <img :src="image.url" :alt="image.url" class="h-full w-full object-cover object-center sm:rounded-lg max-h-[600px]" />
            </TabPanel>
          </TabPanels>
        </TabGroup>

        <!-- Product info -->
        <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
          <h1 class="text-3xl font-bold tracking-tight corPrincipal">{{ produto.titulo }}</h1>
            <span class="flex justify-between mt-5 text-xs items-center font-medium text-neutral-400">
                <span class="flex gap-2 items-center text-sm corPrincipal"><img src="/assets/gps.svg" alt="" width="16">
                    Brasilia - DF
                </span>
                Hoje, 9:15
            </span>

          <div class="mt-3">
            <h2 class="sr-only">Product information</h2>
            <p class="text-3xl tracking-tight corPrincipal font-semibold">{{ produto.preco }}</p>
          </div>

            <div v-if="produto.negociavel == 1">
                <span class="flex gap-2 pt-5 negociavel"><img src="/assets/check.svg" alt=""> Negociavel</span>
                <span class="text-xs text-neutral-300">*esse valor é negociável</span>
            </div>

          <!-- Reviews -->
          <!-- <div class="mt-3">
            <h3 class="sr-only">Reviews</h3>
            <div class="flex items-center">
              <div class="flex items-center">
                <StarIcon v-for="rating in [0, 1, 2, 3, 4]" :key="rating" :class="[product.rating > rating ? 'text-indigo-500' : 'text-gray-300', 'h-5 w-5 flex-shrink-0']" aria-hidden="true" />
              </div>
              <p class="sr-only">{{ product.rating }} out of 5 stars</p>
            </div>
          </div> -->

          <div class="mt-6">
            <h3 class="sr-only">Descricao</h3>

            <div class="space-y-6 text-base corPrincipal" v-html="produto.descricao" />
          </div>

          <form class="mt-6">
            <!-- Colors -->
            <!-- <div>
              <h3 class="text-sm font-medium text-gray-600">Color</h3>

              <fieldset aria-label="Choose a color" class="mt-2">
                <RadioGroup v-model="selectedColor" class="flex items-center space-x-3">
                  <RadioGroupOption as="template" v-for="color in product.colors" :key="color.name" :value="color" :aria-label="color.name" v-slot="{ active, checked }">
                    <div :class="[color.selectedColor, active && checked ? 'ring ring-offset-1' : '', !active && checked ? 'ring-2' : '', 'relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none']">
                      <span aria-hidden="true" :class="[color.bgColor, 'h-8 w-8 rounded-full border border-black border-opacity-10']" />
                    </div>
                  </RadioGroupOption>
                </RadioGroup>
              </fieldset>
            </div> -->

            <div class="mt-10 flex">
              <button type="submit" class="flex max-w-xs flex-1 items-center justify-center rounded-md border border-transparent bg-orange-600 px-8 py-3 text-base font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:w-full">Comprar</button>
<!--
              <button type="button" class="ml-4 flex items-center justify-center rounded-md px-3 py-3 text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                <HeartIcon class="h-6 w-6 flex-shrink-0" aria-hidden="true" />
                <span class="sr-only">Add to favorites</span>
              </button> -->
            </div>
          </form>

            <!-- <div class="mt-10">
                <span class="flex gap-2 text-xs corPrincipal font-medium"><img src="/assets/eye.svg" alt="" width="16"> 80 Visualizações neste anúncio</span>
            </div> -->

          <section aria-labelledby="details-heading" class="mt-12">
            <h2 id="details-heading" class="sr-only">Additional details</h2>

            <div class="divide-y divide-gray-200 border-t">
              <Disclosure as="div"  v-slot="{ open }">
                <h3>
                  <DisclosureButton class="group relative flex w-full items-center justify-between py-6 text-left">
                    <span :class="[open ? 'text-orange-500' : 'text-gray-900', 'text-sm font-medium']">Vendedor</span>
                    <span class="ml-6 flex items-center">
                      <PlusIcon v-if="!open" class="block h-6 w-6 text-gray-400 group-hover:text-gray-500" aria-hidden="true" />
                      <MinusIcon v-else class="block h-6 w-6 text-orange-400 group-hover:text-orange-500" aria-hidden="true" />
                    </span>
                  </DisclosureButton>
                </h3>
                <DisclosurePanel as="div" class="prose prose-sm pb-6">
                  <ul role="list">
                    <!-- <li v-for="item in produto.usuario" :key="item">{{ item }}</li> -->
                    <li><h2>Nome : {{produto.usuario.name}}</h2></li>
                    <li><h2>Mora : {{produto.usuario.estado.nome}} - {{produto.usuario.estado.uf}}</h2></li>
                  </ul>
                </DisclosurePanel>
              </Disclosure>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import {
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  RadioGroup,
  RadioGroupOption,
  Tab,
  TabGroup,
  TabList,
  TabPanel,
  TabPanels,
} from '@headlessui/vue'
import { StarIcon } from '@heroicons/vue/20/solid'
import { HeartIcon, MinusIcon, PlusIcon } from '@heroicons/vue/24/outline'
import HeaderView from '@/Components/HeaderView.vue'

// const product = {
//   name: 'Zip Tote Basket',
//   price: 'R$ 3440',
//   rating: 5,
//   negociavel:true,
//   images: [
//     {
//       id: 1,
//       name: 'Angled view',
//       src: 'https://tailwindui.com/img/ecommerce-images/product-page-03-product-01.jpg',
//       alt: 'Angled front view with bag zipped and handles upright.',
//     },
//     {
//       id: 2,
//       name: 'Angled view',
//       src: '/img/caneca.jpg',
//       alt: 'Angled front view with bag zipped and handles upright.',
//     },
//     {
//       id: 3,
//       name: 'Angled view',
//       src: 'https://tailwindui.com/img/ecommerce-images/product-page-03-product-01.jpg',
//       alt: 'Angled front view with bag zipped and handles upright.',
//     },
//     // More images...
//   ],
//   colors: [
//     { name: 'Washed Black', bgColor: 'bg-gray-700', selectedColor: 'ring-gray-700' },
//     { name: 'White', bgColor: 'bg-white', selectedColor: 'ring-gray-400' },
//     { name: 'Washed Gray', bgColor: 'bg-gray-500', selectedColor: 'ring-gray-500' },
//   ],
//   description: `
//     <p>The Zip Tote Basket is the perfect midpoint between shopping tote and comfy backpack. With convertible straps, you can hand carry, should sling, or backpack this convenient and spacious bag. The zip top and durable canvas construction keeps your goods protected for all-day use.</p>
//   `,
//   details: [
//     {
//       name: 'Features',
//       items: [
//         'Multiple strap configurations',
//         'Spacious interior with top zip',
//         'Leather handle and tabs',
//         'Interior dividers',
//         'Stainless strap loops',
//         'Double stitched construction',
//         'Water-resistant',
//       ],
//       name: 'Features2',
//       items: [
//         'Multiple strap configurations',
//         'Spacious interior with top zip',
//         'Leather handle and tabs',
//         'Interior dividers',
//         'Stainless strap loops',
//         'Double stitched construction',
//         'Water-resistant',
//       ],
//     },
//     // More sections...
//   ],
// }

// const selectedColor = ref(product.colors[0])
</script>
<script>
    export default {
        components:[HeaderView],
        props:['user', 'produto'],
    }
</script>
<style scoped>
    .corPrincipal{
        color: #444;
    }
    .negociavel{
        color: green;
    }
    .headlessui-tabs-panel-5{
        max-height: 700px;
        height: 100%;
    }
</style>
