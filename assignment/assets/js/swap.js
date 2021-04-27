$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#Description').hide();


		$('#navHome').click(function(){
			$('#home').show();
			$('#models').hide();
			$('#interaction').hide();
			$('#Description').hide();
			getHomeData();	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#Description').show();
			getMiscData();
    	getModelData('coca cola');
		});
	}

	function selectModel() {
		$('#navCoke').click(function(){
			getModelData('Coca Cola');
			$('#x3dmodel').attr('url','assets/models/x3d/coca cola.x3d');
		});

		$('#navSprite').click(function(){
			getModelData('Sprite');
			$('#x3dmodel').attr('url','assets/models/x3d/sprite.x3d');
		});

		$('#navPepper').click(function(){
			getModelData('Dr.Pepper');
			$('#x3dmodel').attr('url','assets/models/x3d/pepper.x3d');
		});

		$('#navLilt').click(function(){
			getModelData('Lilt');
			$('#x3dmodel').attr('url','assets/models/x3d/lilt.x3d');
		});
		
		$('#navOasis').click(function(){
			getModelData('Oasis');
			$('#x3dmodel').attr('url','assets/models/x3d/oasis.x3d');
		});
		
		$('#navCosta').click(function(){
			getModelData('Costa Coffee');
			$('#x3dmodel').attr('url','assets/models/x3d/costa coffee.x3d');
		});
	}

});
