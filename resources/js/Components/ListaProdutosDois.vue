<template>
    <section>
        <div class="flex justify-center gap-5 max-w-screen-xl flex-wrap">
            <div class="w-[550px] h-[200px] rounded-xl border-double border-4 border-neutral-300 grid grid-cols-2 gap-5
            ">
                <div class="w-[250px] h-[180px] self-center ml-2 carrosel_produto">
                    <CarouselView :items="items" />
                </div>
                <a href="#" class="grid">
                    <div class="grid" align="left">
                        <span class="justify-self-end mr-2 self-center text-xs text-neutral-500">Hoje, 8:19</span>
                        <h1 class="text-base font-medium text-neutral-800">MacBook - Laptop</h1>
                        <p class="text-sm font-normal text-neutral-400">MacBook - Laptop 500GB,
                        de uma liga de Adamantium</p>
                        <div class="flex justify-between">
                            <span class="flex items-center gap-1 text-xs font-normal text-neutral-800">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 19.35C14.0333 17.4833 15.5417 15.7875 16.525 14.2625C17.5083 12.7375 18 11.3833 18 10.2C18 8.38333 17.4208 6.89583 16.2625 5.7375C15.1042 4.57917 13.6833 4 12 4C10.3167 4 8.89583 4.57917 7.7375 5.7375C6.57917 6.89583 6 8.38333 6 10.2C6 11.3833 6.49167 12.7375 7.475 14.2625C8.45833 15.7875 9.96667 17.4833 12 19.35ZM12 21.325C11.7667 21.325 11.5333 21.2833 11.3 21.2C11.0667 21.1167 10.8583 20.9917 10.675 20.825C9.59167 19.825 8.63333 18.85 7.8 17.9C6.96667 16.95 6.27083 16.0292 5.7125 15.1375C5.15417 14.2458 4.72917 13.3875 4.4375 12.5625C4.14583 11.7375 4 10.95 4 10.2C4 7.7 4.80417 5.70833 6.4125 4.225C8.02083 2.74167 9.88333 2 12 2C14.1167 2 15.9792 2.74167 17.5875 4.225C19.1958 5.70833 20 7.7 20 10.2C20 10.95 19.8542 11.7375 19.5625 12.5625C19.2708 13.3875 18.8458 14.2458 18.2875 15.1375C17.7292 16.0292 17.0333 16.95 16.2 17.9C15.3667 18.85 14.4083 19.825 13.325 20.825C13.1417 20.9917 12.9333 21.1167 12.7 21.2C12.4667 21.2833 12.2333 21.325 12 21.325ZM12 12C12.55 12 13.0208 11.8042 13.4125 11.4125C13.8042 11.0208 14 10.55 14 10C14 9.45 13.8042 8.97917 13.4125 8.5875C13.0208 8.19583 12.55 8 12 8C11.45 8 10.9792 8.19583 10.5875 8.5875C10.1958 8.97917 10 9.45 10 10C10 10.55 10.1958 11.0208 10.5875 11.4125C10.9792 11.8042 11.45 12 12 12Z" fill="#FF6E00"/>
                                </svg>
                                Brasilia - DF
                            </span>
                            <span class="flex items-center mr-3 mb-2 text-neutral-700 font-medium">R$ 123,00</span>
                        </div>
                    </div>
                </a>
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
