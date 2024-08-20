<template>
    <HeaderView :user="user" />
    <section class="grid text-center justify-center">
        <h2 class="font-normal text-xl text-neutral-500">
            Aqui voce encontra o que tanto procura!
        </h2>
        <h1 class="font-semibold text-5xl mt-8 text-neutral-700">
            O que você está procurando?
        </h1>
        <div>
            <form class="mt-10 justify-center flex">
                <input
                    class="border-solid border-2 border-neutral-300 h-12 rounded-xl px-5 mx-1 w-96"
                    type="text"
                    placeholder="Estou procurando por..."
                />
                <select name="categoia" id="categoria" class="border-solid border-2 border-neutral-300 h-12 rounded-xl px-5 mx-1 w-56 text-neutral-400">
                    <option value="">Categoria</option>
                </select>
                <select name="estado" id="estado" class="border-solid border-2 border-neutral-300 h-12 rounded-xl px-5 mx-1 w-56 text-neutral-400 ">
                    <option value="">Estado</option>
                </select>
                <button
                    type="submit"
                    class="text-sm font-semibold bg-orange-600 rounded-md text-slate-50 BotaoHome"
                >
                    Procurar
                </button>
            </form>
        </div>

        <div class="bannerTwo flex gap-4 my-10 px-5 max-w-screen-xl">
            <CarouselView
                :items="items"
                :type="nome"
                class="bannerTwo_one rounded-xl overflow-hidden"
            >
            </CarouselView>

            <div
                class="bannerTwo_two rounded-xl overflow-hidden bg-black relative"
            >
                <img
                    :src="lampadas"
                    class="h-full w-full object-cover opacity-90"
                    alt=""
                />

                <div
                    class="absolute bottom-7 left-5 flex justify-between gap-1 text-left w-11/12 px-5"
                >
                    <div>
                        <p class="font-semibold text-gray-50 inline-block">
                            Lampadas
                        </p>
                        <h5 class="font-medium text-sm text-gray-300">
                            Lampadas de outras marcas
                        </h5>
                    </div>

                    <a
                        href="#"
                        class="flex gap-1 text-gray-300 items-center px-5 bg-black rounded-lg text-sm"
                    >
                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M11 13H6C5.71667 13 5.47917 12.9042 5.2875 12.7125C5.09583 12.5208 5 12.2833 5 12C5 11.7167 5.09583 11.4792 5.2875 11.2875C5.47917 11.0958 5.71667 11 6 11H11V6C11 5.71667 11.0958 5.47917 11.2875 5.2875C11.4792 5.09583 11.7167 5 12 5C12.2833 5 12.5208 5.09583 12.7125 5.2875C12.9042 5.47917 13 5.71667 13 6V11H18C18.2833 11 18.5208 11.0958 18.7125 11.2875C18.9042 11.4792 19 11.7167 19 12C19 12.2833 18.9042 12.5208 18.7125 12.7125C18.5208 12.9042 18.2833 13 18 13H13V18C13 18.2833 12.9042 18.5208 12.7125 18.7125C12.5208 18.9042 12.2833 19 12 19C11.7167 19 11.4792 18.9042 11.2875 18.7125C11.0958 18.5208 11 18.2833 11 18V13Z"
                                fill="currentColor"
                            />
                            <p>$ 45,00</p>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <ListaProdutos :image="laptop">
            <h1 class="font-semibold text-2xl text-neutral-700">
                Novos Produtos
            </h1>
        </ListaProdutos>

        <CategoriaView class="mb-10">
            <h1 class="font-semibold text-2xl text-neutral-700">Categorias</h1>
        </CategoriaView>

        <ListaProdutosDois class="relative mb-10" />
    </section>
</template>

<script>
import HeaderView from "@/Components/HeaderView.vue";
import CarouselView from "@/Components/CarouseulView.vue";
import ListaProdutos from "@/Components/ListaProdutos.vue";
import CategoriaView from "@/Components/CategoriaView.vue";
import ListaProdutosDois from "@/Components/ListaProdutosDois.vue";

export default {
    components: {
        HeaderView,
        CarouselView,
        ListaProdutos,
        CategoriaView,
        ListaProdutosDois,
    },
    props:['user'],

    data() {
        return {

            name: "Home",
            items: [
                {
                    imageUrl: "/img/caneca.jpg",
                    imageIcon: "/img/caneca-branca.jpg",
                    titulo: "Caneca",
                    subtitulo: "Xicara",
                },
                {
                    imageUrl: "/img/caneca-branca.jpg",
                    imageIcon: "/img/caneca.jpg",
                    titulo: "Caneca 1",
                    subtitulo: "Xicara 1",
                },
                {
                    imageUrl: "/img/caneca.jpg",
                    imageIcon: "/img/caneca-branca.jpg",
                    titulo: "Caneca 2",
                    subtitulo: "Xicara 2",
                },
            ],
            lampadas: "/img/lampadas.jpg",
            laptop: "/img/laptop.jpg",
            nome: "Banner",
        };
    },
};
</script>



<style scoped>
.BotaoHome {
    padding: 12px 30px;
}
.BotaoHome:hover {
    background-color: rgb(249 115 22);
}
form input:focus,
select:focus {
    outline: none;
    border: 1px solid #ff6e00;
}
.bannerTwo_one {
    width: 800px;
    height: 400px;
    border-radius: 10px;
}
.bannerTwo_two {
    width: 500px;
    height: 400px;
}
</style>
