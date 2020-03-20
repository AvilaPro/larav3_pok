<template>
    <div class="row">
        <div class="col-sm" v-for="discipulo in discipulos" >
            <div class="card text-center" style="width: 18rem; margin-top: 70px">
                <img style="height: 150px; width:150px; backgroud-color: #EFEFEF; margin:20px" src="images/" alt="" class="card-img-top rounded-circle mx-auto d-block">
                <div class="card-body">
                  <h5 class="card-title">{{ discipulo.name }}</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="/trainers/" class="btn btn-primary">Conocer Mas</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                discipulos: [
                    { id: 1, name: "Juan"},
                    { id: 2, name: "Eduardo"},
                    { id: 1, name: "Cesar"},
                ]
            }
        },
        mounted() {
           console.log('Component mounted');
        }
    }
</script>

<style scoped>

</style>