<template>
    <section class="text-left ">
        <slot></slot>

        <div class="flex gap-5 justify-center items-center flex-wrap max-w-screen-xl">
            <div v-for="produto in produtos" :key="produto.id" class="mt-10 w-[280px] h-[450px] border-neutral-300 border-double border-4 rounded-xl relative">
                <a :href="generateUrl(produto.id)">
                    <div class=" max-h-[260px] max-w-[260px] w-full h-full rounded-lg m-auto mt-2 overflow-hidden relative">
                        <span class="absolute text-white text-xs px-2 py-1 bg-[#FF6E00] rounded-r-md bottom-2 left-[5px]z-100">Pouco Usado</span>
                        <div v-if="produto.anuncio_foto" class="absolute h-[40px] w-[40px] rounded-full right-1 top-1 border-solid border-2 border-[#FF6E00] overflow-hidden">
                            <img class="w-full h-full object-cover" :src="produto.usuario.foto.url" alt="">
                        </div>
                        <div v-for="foto in produto.anuncio_foto" :key="foto.id" class="max-h-[260px] max-w-[260px] w-full h-full">
                            <img v-if="foto.principal == 1" class="w-full h-full object-cover" :src="produto.anuncio_foto[0].url" alt="Product Image">
                        </div>
                    </div>

                    <div class="flex justify-between mt-3 items-center px-3">
                        <p class="font-medium text-base text-neutral-700">{{produto.titulo}}</p>
                        <span class="font-medium text-sm text-neutral-500">{{produto.preco}}</span>
                    </div>

                    <div class="h-full">
                        <p class="max-h-[7ch] px-4 text-sm font-normal mt-3 text-neutral-400 text-ellipsis overflow-hidden text-start">{{produto.descricao}}</p>
                    </div>

                    <div class="flex justify-between items-center absolute bottom-2 w-full px-2">
                        <p class="text-sm font-normal text-neutral-500 flex items-center gap-1">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 19.35C14.0333 17.4833 15.5417 15.7875 16.525 14.2625C17.5083 12.7375 18 11.3833 18 10.2C18 8.38333 17.4208 6.89583 16.2625 5.7375C15.1042 4.57917 13.6833 4 12 4C10.3167 4 8.89583 4.57917 7.7375 5.7375C6.57917 6.89583 6 8.38333 6 10.2C6 11.3833 6.49167 12.7375 7.475 14.2625C8.45833 15.7875 9.96667 17.4833 12 19.35ZM12 21.325C11.7667 21.325 11.5333 21.2833 11.3 21.2C11.0667 21.1167 10.8583 20.9917 10.675 20.825C9.59167 19.825 8.63333 18.85 7.8 17.9C6.96667 16.95 6.27083 16.0292 5.7125 15.1375C5.15417 14.2458 4.72917 13.3875 4.4375 12.5625C4.14583 11.7375 4 10.95 4 10.2C4 7.7 4.80417 5.70833 6.4125 4.225C8.02083 2.74167 9.88333 2 12 2C14.1167 2 15.9792 2.74167 17.5875 4.225C19.1958 5.70833 20 7.7 20 10.2C20 10.95 19.8542 11.7375 19.5625 12.5625C19.2708 13.3875 18.8458 14.2458 18.2875 15.1375C17.7292 16.0292 17.0333 16.95 16.2 17.9C15.3667 18.85 14.4083 19.825 13.325 20.825C13.1417 20.9917 12.9333 21.1167 12.7 21.2C12.4667 21.2833 12.2333 21.325 12 21.325ZM12 12C12.55 12 13.0208 11.8042 13.4125 11.4125C13.8042 11.0208 14 10.55 14 10C14 9.45 13.8042 8.97917 13.4125 8.5875C13.0208 8.19583 12.55 8 12 8C11.45 8 10.9792 8.19583 10.5875 8.5875C10.1958 8.97917 10 9.45 10 10C10 10.55 10.1958 11.0208 10.5875 11.4125C10.9792 11.8042 11.45 12 12 12Z" fill="#FF6E00"/>
                            </svg>
                            {{produto.estado.nome}} - {{produto.estado.uf}}
                        </p>
                        <span class="text-xs font-normal text-neutral-500">Hoje, 8:19</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: ["produtos"],
    methods:{
        generateUrl(id){
            return `/produto/${id}`
        }
    }
}
</script>

<style>

</style>
