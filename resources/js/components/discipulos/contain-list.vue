<template>
    <div>
        <modal-button></modal-button>
        <create-form-discipulo @new="addDiscipulo"></create-form-discipulo>
        <div class="row justify-content-center">
            <spinner v-show="loading">  </spinner>
            <list-of-discipulos
                v-for="discipulo in discipulos"
                :key="discipulo.id"
                :discipulo="discipulo" >
            
            </list-of-discipulos>
        </div>
    </div>
</template>

<script>
    export default {
        
        mounted() {
            let currentRoute = window.location.pathname
            axios.get(`http://127.0.0.1:8000${currentRoute}/discipulos`).then((response) => {
                this.discipulos = response.data,
                this.loading = false
            })
        },

        methods: {
            addDiscipulo(disc) {
                this.discipulos.push(disc);
            }
        },

        data() {
            return {
                discipulos: [],
                loading: true,
            }
        },
        
    }
</script>

<style scoped>

</style>