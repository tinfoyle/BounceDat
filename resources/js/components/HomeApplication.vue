<script>
    export default {
        data() {
            homeTemplate = require('../views/home/home.html');

            return {
                someKey: "value",
                homeTemplate: homeTemplate
            }
        }
    }
</script>


<template>
<div class="content">
    <p v-if="someKey">{{ someKey }}</p>
</div>
</template>