<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <main class="bg-slate-950 h-screen pt-16">
        <div class="container mx-auto">
            <header
                class="grid grid-cols-2 justify-items-center gap-3 text-white font-bold"
            >
                <Link
                    class="border border-white rounded py-1 px-8 hover:text-slate-950 hover:bg-white"
                    href="/"
                    >Home</Link
                >
                <Link
                    class="border border-white rounded py-1 px-8 hover:text-slate-950 hover:bg-white"
                    href="/about"
                    >About</Link
                >
            </header>
        </div>
        <article class="container mx-auto text-white text-center my-32">
            <div class="border border-white rounded-md p-8 mx-3">
                <slot />
            </div>
        </article>
    </main>
</template>
