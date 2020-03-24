<template>
    <div class="col-sm" v-if="discipulo">
        <div class="card text-center" style="width: 18rem; margin-top: 70px" >       
            <img style="height: 150px; width:150px; backgroud-color: #EFEFEF; margin:20px" class="card-img-top rounded-circle mx-auto d-block" v-bind:src="discipulo.picture" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ discipulo.name }}</h5>
                <p class="card-text">{{ discipulo.clase }}</p>
                <a href="/trainers/" class="btn btn-primary">Conocer Mas</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['discipulo'],
    }
</script>

<style scoped>

</style>