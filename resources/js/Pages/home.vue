<template lang="">
    <layout>
        <Head>
            <title>Home</title>
            <meta name="home meta" content="Your home meta page description" />
        </Head>
        <div class="text-2xl font-bold">
            Hi <span class="italic">{{ user.name }}</span> !
        </div>
    </layout>
</template>
<script>
export default {
    props: ["user"],
};
</script>
<style lang=""></style>
