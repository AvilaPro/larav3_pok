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
      	<form>
	        <div class="form-group">
			    <label>Discipulo</label>
			    <input type="text" class="form-control" placeholder="Ingresa el nombre del Discipulo">
		  	</div>
              <div class="form-group">
			    <label>Clase del Discipulo</label>
			    <input type="text" class="form-control" placeholder="Ingresa la clase a la que pertenece">
		  	</div>
		  	<div class="form-group">
			    <label>Picture</label>
			    <input type="text" class="form-control" placeholder="Ingresa la url de una imagen" >
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
        
    }
</script>

<style scoped>

</style>