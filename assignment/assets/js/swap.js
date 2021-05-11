$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#pics').hide();
		resetActive('#navHome');

		$('#navHome').click(function(){
			$('#home').show();
			$('#models').hide();
			$('#interaction').hide();
			$('#pics').hide();
			resetActive('#navHome');
			getHomeData();	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#pics').show();
			resetActive('#navModels');
			getMiscData();
    	getModelData('Coca Cola');
			textureButton('#navCoke');
		});
	}

	function selectModel() {
		$('#navCoke').click(function(){
			getModelData('Coca Cola');
			$('#model').attr('url','assets/models/x3d/coca cola.x3d');
			removeattr('#navCoke');
			textureButton('#navCoke');
		});

		$('#navSprite').click(function(){
			getModelData('Sprite');
			$('#model').attr('url','assets/models/x3d/sprite.x3d');
			removeattr('#navSprite');
			textureButton('#navSprite');
		});

		$('#navPepper').click(function(){
			getModelData('Dr.Pepper');
			$('#model').attr('url','assets/models/x3d/pepper.x3d');
			removeattr('#navPepper');
			textureButton('#navPepper');
		});

		$('#navLilt').click(function(){
			getModelData('Lilt');
			$('#model').attr('url','assets/models/x3d/lilt.x3d');
			removeattr('#navLilt');
			textureButton('#navLilt');
		});
		
		$('#navOasis').click(function(){
			getModelData('Oasis');
			$('#model').attr('url','assets/models/x3d/oasis.x3d');
			removeattr('#navOasis');
			textureButton('#navOasis');
		});
		
		$('#navCosta').click(function(){
			getModelData('Costa Coffee');
			$('#model').attr('url','assets/models/x3d/costa coffee.x3d');
			removeattr('#navCosta');
			textureButton('#navCosta');
		});
	}

	function textureButton(randomid){
		$('#texture').addClass('disabled');
		$('#resettexture').addClass('disabled');
		if(randomid == '#navCosta' || randomid == '#navLilt'){
			$('#texture').removeClass('disabled');
			$('#resettexture').removeClass('disabled');
		}
		if(randomid == "#navCosta"){
			$('resettexture').attr('onclick','resetCostaTexture();');
		}
		if(randomid == "#navLilt"){
			$('resettexture').attr('onclick','resetLiltTexture();');
		}
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

	function resetActive(id){
		$('#navHome').removeClass('active');
		$('#navModels').removeClass('active');
		$(id).addClass('active');
	}

});
