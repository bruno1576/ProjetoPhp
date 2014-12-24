<?php   
$conteudodapagina= consultaempresa();
updateempresa();
     ?>
    <div class="span10"> <div class="well"> <h1> <?php echo utf8_encode( $conteudodapagina['titulo']);  ?> </h1>
 <form action="" method="post">
		<p>
			<label for="editor1">
				Editor 1:
			</label>
			<textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10">
            
				<?php echo utf8_encode( $conteudodapagina['conteudo']); ?> 
			</textarea>
		</p>
		<p>
		<button class="btn btn-primary btn-large" type="submit">Salvar</button> 
		</p>
	</form>

    </div>
       </div>