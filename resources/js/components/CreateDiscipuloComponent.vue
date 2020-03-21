<template>
<div class="modal fade" id="addDiscipulo" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Discipulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form @submit.prevent="saveDiscipulo">
	        <div class="form-group">
			    <label>Discipulo</label>
			    <input type="text" class="form-control" placeholder="Ingresa el nombre del Discipulo" v-model="name">
		  	</div>
              <div class="form-group">
			    <label>Clase del Discipulo</label>
			    <input type="text" class="form-control" placeholder="Ingresa la clase a la que pertenece" v-model="clase">
		  	</div>
		  	<div class="form-group">
			    <label>Picture</label>
			    <input type="text" class="form-control" placeholder="Ingresa la url de una imagen" v-model="picture">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Guardar</button>
	  	</form>
      </div>
    </div>
  </div>
</div>
</template>

<script>
    export default {
        data(){
            return {
                name: null,
                clase: null,
                picture: null
            }
        },
        methods: {
            saveDiscipulo: function(){
                axios.post('http://127.0.0.1:8000/discipulos', {
                    name: this.name,
                    clase: this.clase,
                    picture: this.picture
                })
                .then(function(res){
                    console.log(res)
                    $('#addDiscipulo').modal('hide')
                })
                .catch(function(err){
                    console.log(err)
                })
                /* console.log(this.name)
                console.log(this.clase)
                console.log(this.picture) */
            }
        }
    }
</script>

<style scoped>

</style>