
<?php 

/*=============================================
Social
=============================================*/

$url = "socials";
$method = "GET";
$fields = array();

$social = CurlController::request($url,$method,$fields);


if($social->status == 200){

    $social = $social->results[0];
  
}else{

    $social = null;
}


?>

<div class="container-fluid " style="background: #41ACB1">
	
	<div class="container">
		
		<div class="d-flex justify-content-between">
			
			<div class="p-2">
				
				<div class="d-flex justify-content-center ">
					
					<div class="p-2">

						<?php foreach (json_decode(urldecode($social->social_social)) as $key => $value): ?>


							<a href="<?php echo $value->link ?>" target="_blank">
							
							<?php echo $value->icon ?></a></li>
						
						</a>
	
						<?php endforeach ?>
						
						
					</div>

				</div>

			</div>

	
		</div>


	</div>


</div>