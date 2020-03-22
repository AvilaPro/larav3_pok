<template>
    <div class="row">
        <spinner v-show="loading">  </spinner>
        <div class="col-sm" v-for="discipulo in discipulos" >
            <div class="card text-center" style="width: 18rem; margin-top: 70px">
                <img style="height: 150px; width:150px; backgroud-color: #EFEFEF; margin:20px" alt="" class="card-img-top rounded-circle mx-auto d-block" v-bind:src="discipulo.picture" >
                <div class="card-body">
                  <h5 class="card-title">{{ discipulo.name }}</h5>
                  <p class="card-text">{{ discipulo.clase }}</p>
                <a href="/trainers/" class="btn btn-primary">Conocer Mas</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import EventBus from '../event-bus';

    export default {
        data(){
            return {
                discipulos: [],
                loading: true,
            }
        },
        created(){
            EventBus.$on('discipulo-added', data => {
                this.discipulos.push(data)                
            })
        },
        mounted() {
           axios
                .get('http://127.0.0.1:8000/discipulos')
                .then((res) => {
                    this.discipulos = res.data
                    this.loading = false
                })
        }
    }
</script>

<style scoped>

</style>