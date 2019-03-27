	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Agregar</a>
	<br>
	<br>
	<br>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">

<h3 id="myModalLabel">Add</h3>
</div>
<div class="modal-body">
<form method="post" action="upload.php"  enctype="multipart/form-data">
<table class="table1">
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Titulo</label></td>
		<td width="30"></td>
		<td><input type="text" name="first_name" placeholder="Titulo" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Descripcion</label></td>
		<td width="30"></td>
		<td><input type="text" name="last_name" placeholder="Descripcion" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Seleccionar Imagen</label></td>
		<td width="30"></td>
		<td><input type="file" name="image"></td>
	</tr>
</table>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
<button type="submit" name="Submit" class="btn btn-primary">Subir</button>
    </div>
</form>
</div>			