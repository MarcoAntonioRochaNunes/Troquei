<template>
    <HeaderView :user="user" />
    <section>
        <div>
            
        </div>
    </section>
</template>

<script>
import HeaderView from '@/Components/HeaderView.vue'

export default {
    name:"ProdutoView",
    props:['user'],
    components:{
        HeaderView
    }
}
</script>

<style>

</style>
