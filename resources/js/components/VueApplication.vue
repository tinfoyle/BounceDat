<template>
    <p>You are logged in as</p>
</template>

<script>
    export default {
        data() {
            return {
                counter: 0
            }
        },
        beforeCreate() {
            console.log('Nothing gets called before me!');
        },
        mounted() {
            console.log('Mounted');
        },
        beforeUpdate() {
            console.log(this.counter) // Logs the counter value every second, before the DOM updates.
        },
        created() {
            setInterval(() => {
                this.counter++
            }, 1000);
            this.property = 'Example property update.';
            console.log('propertyComputed will update, as this.property is now reactive.');
        },
        computed: {
            propertyComputed() {
                console.log('I change when this.property changes.');
                console.log(this.counter);
                return this.property;
            }
        }
    }
</script>
