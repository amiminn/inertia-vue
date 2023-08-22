<template lang="">
    <layout>
        <Head>
            <title>About</title>
            <meta
                name="about meta"
                content="Your about meta page description"
            />
        </Head>
        <div class="text-2xl font-bold">About Page</div>
    </layout>
</template>
<script>
import Layout from "./Layout.vue";
import { Head } from "@inertiajs/vue3";
export default {
    components: { Layout, Head },
};
</script>
<style lang=""></style>
