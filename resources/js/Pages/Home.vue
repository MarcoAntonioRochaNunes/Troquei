<template>
    <HeaderView />
    <section class="grid text-center justify-center">
        <h2 class="font-normal text-xl text-neutral-500">Aqui voce encontra o que tanto procura!</h2>
        <h1 class="font-semibold text-5xl mt-8 text-neutral-700">O que você está procurando?</h1>
        <div class="">
            <form class="mt-10 justify-center flex">
                <input class="border-solid border-2 border-neutral-300 h-12 rounded-xl px-5 mx-1 w-96" type="text" placeholder="Estou procurando por...">
                <input class="border-solid border-2 border-neutral-300 h-12 rounded-xl px-5 mx-1 w-56" type="text" placeholder="Categoria">
                <input class="border-solid border-2 border-neutral-300 h-12 rounded-xl px-5 mx-1 w-56" type="text" placeholder="Estado">
                <button type="submit" class="text-sm font-semibold bg-orange-600 rounded-md text-slate-50 BotaoHome">Procurar</button>
            </form>
        </div>

        <div class="bannerTwo flex gap-5 mt-10 px-5">
            <div class="bannerTwo_one rounded-xl relative overflow-hidden">
                    <img class="z-50 absolute bottom-10 left-14" src="/resources/assets/img/caneca branca.png" alt="">
                    <img class="block max-w-full object-contain" src="/resources/assets/img/caneca.png" alt="">
                        <h3>TESTE</h3>
                    <div class="h-16 w-96 text-center bg-black opacity-25 absolute inset-x-9 bottom-5 rounded-xl">
                    </div>
            </div>
            <div class="bannerTwo_two rounded-xl"></div>
        </div >
    </section>
</template>

<script>
import HeaderView from '../../components/HeaderView.vue';


export default {
    components:{
        HeaderView
    }
}
</script>

<style scoped>
    .BotaoHome{
        padding: 12px 30px;
    }
    .BotaoHome:hover{
        background-color: rgb(249 115 22);
    }
    form input:focus{
        outline: none;
        border: 1px solid #FF6E00;
    }
    .bannerTwo_one{
        width: 800px;
        height: 400px;

    }
    .bannerTwo_two{
        width: 500px;
        height: 400px;
        background-color: red;
    }

</style>
