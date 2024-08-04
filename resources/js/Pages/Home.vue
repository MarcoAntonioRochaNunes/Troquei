<template>
    <HeaderView />
    <section class="grid text-center justify-center">
        <h2 class="font-normal text-xl text-neutral-500">Aqui voce encontra o que tanto procura!</h2>
        <h1 class="font-semibold text-5xl mt-8 text-neutral-700">O que você está procurando?</h1>
        <form class="mt-10 items-center flex ">
            <input class="border-solid border-2 border-neutral-300 h-12 rounded-xl px-5 mx-1" type="text" placeholder="Estou procurando por...">
            <input class="border-solid border-2 border-neutral-300 h-12 rounded-xl px-5 mx-1" type="text" placeholder="Categoria">
            <input class="border-solid border-2 border-neutral-300 h-12 rounded-xl px-5 mx-1" type="text" placeholder="Estado">
            <button type="submit" class="text-sm font-semibold bg-orange-600 rounded-md text-slate-50 BotaoHome">Procurar</button>
        </form>
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
</style>
