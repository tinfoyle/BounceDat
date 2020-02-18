<script>
    export default {
        data() {
            return {
                appData : require('../viewdata/application.json'),
                user : {

                },
                props: [
                    {
                        name: 'userid',
                        default:0
                    }
                ]
            }
        },
        mounted() {
            axios.post(this.appData.dataRoute.user.get).then(response => (this.user = response.data));
        }
    }
</script>

<template>
    <div class="container-fluid">
        <div class="row">
            <div class="dashboard-header">
                <h3 class="dashboard-title">{{ appData.dashboardTitle }}</h3>
                <p class="dashboard-description">{{ appData.dashboardDescription }}</p>
            </div>
        </div>
        <div class="row">
            <div v-for="card in appData.cards" :id="card.id" class="col-3 dash-column">
                <h5 class="dash-title">{{ card.title }}</h5>
                <div v-if="card.type == 'text'" class="row dash-card-body">
                    {{ card.content }}
                </div>
                <div v-if="card.type == 'userinfo'">
                    <p>Name: {{ user.name }}</p>
                    <p>Username: {{ user.username }}</p>
                    <p v-if="user.type == 'Admin'"> {{ user.type }}</p>
                    <p>Email: {{ user.email }}</p>
                </div>
            </div>
        </div>
    </div>
</template>