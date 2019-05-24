<?php //require_once('codigo_fuente/comentario.php'); ?>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript">
	function btn_guardar(){
		var comentario = document.getElementById('comentario').value;
		var id_text = document.getElementById('id_text').value;
		var datos = 'message='+comentario+'&id_item_video='+id_text;
		var url = "recibe_post.php";
		$.ajax({
			type: "POST",
			url: url,
			data: datos,
			success:function(datos){
				$("#inyect_post").html(datos);
				if(comentario != ''){
					document.getElementById("form_coment").reset();
				}
			}
		})
	}
///////////////////////
	setInterval( () => {
		var id_text = document.getElementById('id_text').value;
		var dates = 'id_item_video='+id_text;
		$.ajax({
			type: "POST",
			url: "time_real_post.php?",
			data: dates,
			success:function(res){
				$("#inyect_post").html(res);
			}
		})
	},1000);

</script>
						<div class="blog-comments" style="margin: 10px;">
							<h3>Comentarios</h3>

							<!-- single comment -->
							<div class="media">
								<div id="inyect_post">
								
								</div>	
							</div>
							<!-- blog reply form -->
							<div class="blog-reply-form col-6">
								<!--<h3>Comentarios</h3>-->
								<form id="form_coment" method="post">
									<input type="text" id="id_text" name="id_item_video" value="<?php echo $post; ?>" style="display: none;">
									<textarea class="input" id="comentario" name="message" placeholder="Describe tus ideas..." style="border: 1px solid #FF6700"></textarea>
									<?php 
										if(!empty($_SESSION['cuenta_personal'])){
											echo "<button type='button' id='guardar' class='main-button icon-button' onclick='btn_guardar()'>Comentar</button>";
										}else{
											echo "<button type='button' disabled='true' id='guardar' class='main-button icon-button' onclick='btn_guardar()'>Comentar</button>";
										}
									?>
								</form>
							</div>
							<!-- /blog reply form -->
						</div>