<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser">Follow</button>
    </div>
</template>

<script>
    export default {

        props : ['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            followUser() {
                axios.get('/follow/' + this.userId)
                    .then(function (responce){
                        console.log(responce.data);
                    });
            }
        }
    }
</script>
