<script setup>
import HeaderComponent from "./Header.vue";
</script>

<template>
    <main class="bg-slate-950 h-screen pt-16">
        <div class="container mx-auto">
            <HeaderComponent />
        </div>
        <article class="container mx-auto text-white text-center my-32">
            <div class="p-8 mx-3">
                <slot />
            </div>
        </article>
    </main>
</template>
