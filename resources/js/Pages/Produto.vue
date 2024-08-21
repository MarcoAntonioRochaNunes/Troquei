<template>
    <HeaderView :user="user" />
    <main class="TelaD">
        <div class="grid grid-cols-2">
            <div>
                <p class="ml-5 mb-2 font-light">Distrito Federal / <span class="font-semibold">Laptops</span></p>
                <div class="max-w-[700px] max-h-[650px] w-full h-full">
                    <GalleryView :items="items" />
                </div>
            </div>
            <div class="grid max-h-[500px] max-w-80 mt-[35px]">
                <div class="grid justify-center">
                    <div>
                        <h1 class="text-[32px] font-medium text-[#444]">MacBook - Laptop</h1>
                        <div class="flex justify-between items-center">
                            <span class="flex gap-1 items-center text-sm"><img src="/assets/gps.svg" alt="" width="16px"> Brasilia - DF</span>
                            <span class="text-xs">Hoje, 9:15</span>
                        </div>
                    </div>
                    <h3 class="text-3xl font-bold ml-5">R$ 3200</h3>
                    <div class="">
                        <span class="negociavel flex items-center gap-2 text-base font-medium"><img src="/assets/check.svg" alt=""> Negociável</span>
                        <span class="text-xs">*esse valor é negociável</span>
                    </div>
                    <p>descricao</p>
                    <button>botao</button>
                    <div>
                        icone e views
                    </div>
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

<style scoped>
.TelaD{
    height: calc(100vh - 152px);
    display: flex;
    justify-content: center;
    align-content: center;
}

h1,p,h2,h3,span{
    color:#444
}
.negociavel{
    color: #56AA39;
}
</style>
