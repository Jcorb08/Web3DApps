$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#pics').hide();


		$('#navHome').click(function(){
			$('#home').show();
			$('#models').hide();
			$('#interaction').hide();
			$('#pics').hide();
			getHomeData();	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#pics').show();
			getMiscData();
    	getModelData('Coca Cola');
		});
	}

	function selectModel() {
		$('#navCoke').click(function(){
			getModelData('Coca Cola');
			$('#model').attr('url','assets/models/x3d/coca cola.x3d');
			removeattr('#navCoke');
		});

		$('#navSprite').click(function(){
			getModelData('Sprite');
			$('#model').attr('url','assets/models/x3d/sprite.x3d');
			removeattr('#navSprite');
		});

		$('#navPepper').click(function(){
			getModelData('Dr.Pepper');
			$('#model').attr('url','assets/models/x3d/pepper.x3d');
			removeattr('#navPepper');
		});

		$('#navLilt').click(function(){
			getModelData('Lilt');
			$('#model').attr('url','assets/models/x3d/lilt.x3d');
			removeattr('#navLilt');
		});
		
		$('#navOasis').click(function(){
			getModelData('Oasis');
			$('#model').attr('url','assets/models/x3d/oasis.x3d');
			removeattr('#navOasis');
		});
		
		$('#navCosta').click(function(){
			getModelData('Costa Coffee');
			$('#model').attr('url','assets/models/x3d/costa coffee.x3d');
			removeattr('#navCosta');
		});
	}

	function removeattr(id){
		$('#navCoke').removeClass('active');
		$('#navSprite').removeClass('active');	
		$('#navPepper').removeClass('active');	
		$('#navLilt').removeClass('active');
		$('#navOasis').removeClass('active');
		$('#navCosta').removeClass('active');
		$(id).addClass('active');
	}

});
