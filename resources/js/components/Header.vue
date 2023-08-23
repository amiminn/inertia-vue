<template lang="">
    <header class="text-white font-bold flex justify-end gap-2">
        <Link
            class="rounded py-1 px-8 hover:text-slate-950 hover:bg-white"
            href="/"
            :class="{ 'underline underline-offset-8': $page.url === '/' }"
            >Home</Link
        >
        <Link
            class="rounded py-1 px-8 hover:text-slate-950 hover:bg-white"
            href="/about"
            :class="{ 'underline underline-offset-8': $page.url === '/about' }"
            >About</Link
        >
    </header>
</template>
<script>
import { Link } from "@inertiajs/vue3";
export default {
    components: { Link },
};
</script>
<style lang=""></style>
