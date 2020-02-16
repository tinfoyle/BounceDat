<script>
    export default {
        data() {
            return {
                layoutData: require('../viewdata/dashboard.json'),
            }
        },
        mounted() {
            axios
              .get("https://api.coindesk.com/v1/bpi/currentprice.json")
              .then(response => (this.info = response));

        }
    }
</script>

<template>
    <div class="container-fluid">
        <div class="row">
            <div class="dashboard-header">
                <h3 class="dashboard-title">{{ layoutData.dashboardTitle }}</h3>
                <p class="dashboard-description">{{ layoutData.dashboardDescription }}</p>
            </div>
        </div>
        <div class="row">
            <div v-for="card in layoutData.cards" :id="card.id" class="col-3 dash-column">
                <h5 class="dash-title">{{ card.title }}</h5>
                <div class="row dash-card-body">
                    {{ card.content }}
                </div>
            </div>
        </div>
    </div>
</template>