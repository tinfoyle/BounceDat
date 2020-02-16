<script>
    export default {
        data() {
            let documentation = require('../viewdata/documentation.json');
            return {
                documentation : documentation
                };
        }
    }
</script>
<template>
    <div class="content">
        <h1 class="title">BounceDat Documentation</h1>
        <ul v-for="document in documentation">
            <h3 v-if="(document.title)">{{ document.title }}</h3>
            <p v-for="message in document.messages">{{ message }}</p>
        </ul>
    </div>
</template>