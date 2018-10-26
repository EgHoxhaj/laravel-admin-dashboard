<template>
    <div class="small-box bg-aqua">
        <div class="inner">
            <h3 v-html="amount"></h3>

            <p v-html="label"></p>
        </div>
        <div class="icon">
            <i :class="icon"></i>
        </div>
        <a :href="href" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</template>

<script>
    export default {
        props: ['amount', 'label', 'icon', 'href'],
        mounted() {
            console.log('Widget component mounted.')
        }
    }
</script>
