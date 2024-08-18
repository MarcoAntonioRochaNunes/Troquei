<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="h-[700px] flex items-center gap-5">
            <div class="h-full max-w-[600px] rounded-xl relative">

                <img class="h-full object-cover sm:rounded-lg" src="/img/nasa.jpg" alt="">

                <div class=" absolute top-0 text-white font-medium text-xl p-5 grid gap-3" >
                    <div><h3>Bem-Vindo ao <span>Troquei!</span></h3></div>
                    <p>Descubra uma nova maneira de negociar seus itens! O Troquei! facilita a compra e venda de uma vasta gama de produtos. Crie uma conta em segundos, publique seu anúncio e comece a negociar diretamente com outros usuários. </p>
                </div>
            </div>

            <div class=" w-full min-w-[400px] sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg h-[600px]">

                <slot />

            </div>
        </div>
    </div>
</template>
