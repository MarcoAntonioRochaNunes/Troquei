<template>
    <header class="h-24 flex justify-center mb-14">
        <div class="h-full max-w-screen-2xl w-full flex items-center justify-between px-10">
            <div class="max-w-16 logo">
                <img class="w-full" src="/resources/assets/Vector.svg" alt="">
            </div>
            <div class="relative">
                <input type="text" class="inputActive barra_pesquisa" placeholder="O que esta procurando...">
                <input id="lupa" type="submit" value="Buscar" class="max-w-6 w-full absolute" >
            </div>
            <!-- {{user}} -->
            <nav class="flex gap-7 mx-3 items-center">
                <Link v-if="user === null" :href="route('login')" class="text-sm font-semibold text-neutral-500 flex items-center max-h-10 h-full gap-1">
                    Entrar
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                    </svg>
                </Link>
                <Link v-else :href="route('login')" class="text-sm font-semibold text-neutral-500 flex items-center max-h-10 h-full gap-1">
                     Ola, {{user.name}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                    </svg>
                </Link>
                <button class="text-sm font-semibold bg-orange-600 flex items-center p-2.5 rounded-md gap-1 text-slate-50 max-h-10 h-full Botao-Header">
                    Anuncie Agora
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                    <path fill-rule="evenodd" d="M2 8c0 .414.336.75.75.75h8.69l-1.22 1.22a.75.75 0 1 0 1.06 1.06l2.5-2.5a.75.75 0 0 0 0-1.06l-2.5-2.5a.75.75 0 1 0-1.06 1.06l1.22 1.22H2.75A.75.75 0 0 0 2 8Z" clip-rule="evenodd" />
                    </svg>
                </button>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    name: "HeaderView",
    props: ['user']
}
</script>

<style scoped>
    .barra_pesquisa{
        width: 500px;
        height: 40px;
        padding: 0px 30px;
        /* background-color: red; */
        border-radius: 15px;
        border: 1px solid #CECECE;
    }
    .inputActive:focus{
        outline: none;
        border: 1px solid #FF6E00;
    }
    #lupa{
        position: absolute;
        background: url("/resources/assets/Lupa.svg") no-repeat center center;
          text-indent: -150px;
          cursor: pointer;
          top: 8px;
          right: 30px;
    }
    .Botao-Header:hover{
        background-color: rgb(249 115 22);
    }
</style>
