<template>
    <div class="contaniner bg-dark bg-gradient bg-opacity-25">
        <h1 class="alert alert-primary w-25 text-success">
            {{ title }}
        </h1>
        <h1 class="alert alert-primary w-25 text-success">
            {{ subTitle }}
        </h1>
        <h1 class="w-25 text-success">
            laracast vue
        </h1>


        <!-- {{ --Efficiently Manage Multiple Images-- }} -->
        <div class="row">
            <div class="conainer overflow-hidder m-0 " style="width: 18rem; height: 25rem;">
                <img :src="logo" alt="" class="w-100 h-100 border border-5 rounded-4"
                    style="object-fit: cover; object-position: center;">
            </div>

        </div>
    </div>
</template>

<script setup>
import logo from '@img/dog.jpg';
defineProps({
    title: String,
    subTitle:String
});
</script>
