<template>
    <HeaderView :user="user" />
    <main class="">
        <div class="bg-[red] TelaD">
            <p>Distrito Federal / <span>Laptops</span></p>
            <div>
               <div class="max-w-[700px] max-h-[650px] w-full h-full">
                    <GalleryView :items="items" />
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import HeaderView from '@/Components/HeaderView.vue';
import GalleryView from '@/Components/GalleryView.vue';

export default {
    name:"ProdutoView",
    props:['user'],
    components:{
        HeaderView,
        GalleryView
    },
    data(){
        return{
            items: [
                {
                    imageUrl: "/img/caneca.jpg",
                },
                {
                    imageUrl: "/img/caneca-branca.jpg",
                },
                {
                    imageUrl: "/img/caneca.jpg",
                },
            ],
        }
    }
}
</script>

<style>
.TelaD{
    height: calc(100vh - 152px);
}
</style>
