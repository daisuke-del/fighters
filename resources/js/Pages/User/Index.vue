<template>
    <div class="p-4">
        <h1 class="text-lg font-bold">ユーザ一覧</h1>
        <ul>
            <li v-for="user in users" >{{ user.name }}</li>
        </ul>
    </div>
<!--    <div class="font-bold text-red-600">{{ message}}</div>-->
    <div>
        <inertia-link href="/" class="text-red-600 underline">
            戻る
        </inertia-link>
    </div>
</template>

<script>
import { InertiaLink } from '@inertiajs/inertia-vue3'
export default {
    props:{
        users:{
            type:Array,
        },
    },
    components: {
        InertiaLink,
    }

    // data: {
    //     message: 'Hello Vue!',
    // },

}


</script>

<style scoped>

</style>
