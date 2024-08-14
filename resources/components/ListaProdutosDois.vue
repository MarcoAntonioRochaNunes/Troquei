<template>
    <section>
        <div class="flex justify-center gap-5">
            <div class="w-[550px] h-[200px] rounded-xl border-double border-4 border-neutral-300 grid grid-cols-2">
                <div class="w-[250px] h-[180px] self-center ml-2 carrosel_produto">
                    <CarouselView :items="items" />
                </div>
                <div class="grid">
                    <span class="justify-self-end mr-2 self-center">Hoje, 8:19</span>
                    <h1>MacBook - Laptop</h1>
                    <p>MacBook - Laptop 500GB,
                    de uma liga de Adamantium</p>
                    <div>
                        <span>Brasilia - DF</span>
                        <span>R$ 123,00</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import CarouselView from '../components/CarouseulView.vue';

export default {
    components:{
        CarouselView
    },
    data(){
        return {
            items: [
                {
                    imageUrl: '/img/caneca.jpg',
                    imageIcon: '/img/caneca-branca.jpg',
                    titulo: 'Caneca',
                    subtitulo: 'Xicara',
                },
                {
                    imageUrl: '/img/caneca-branca.jpg',
                    imageIcon: '/img/caneca.jpg',
                    titulo: 'Caneca 1',
                    subtitulo: 'Xicara 1',
                },
                {
                    imageUrl: '/img/caneca.jpg',
                    imageIcon: '/img/caneca-branca.jpg',
                    titulo: 'Caneca 2',
                    subtitulo: 'Xicara 2',
                },
            ],
        }
    }
}
</script>

<style>

</style>
