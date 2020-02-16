<script>
    export default {
        data() {
            let news = require('../viewdata/news.json');
            return {
                news : news
                };
        }
    }
</script>
<template>
    <div class="content">
        <h1 class="title">BounceDat News</h1>
        <div class="news-post" v-for="post in news">
            <h3 class="news-title" v-if="(post.title)">{{ post.title }}</h3>
            <p class="news-message" v-for="message in post.messages">{{ message }}</p>
            <div v-if="(post.footer)" class="news-footer">
                <p class="news-author" v-if="(post.footer.author)">{{ post.footer.author }}</p>
                <p class="news-date" v-if="(post.footer.date)">{{ post.footer.date }}</p>
            </div>
        </div>
    </div>
</template>