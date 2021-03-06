$(document).ready(function(){
  $('[data-toggle="popover"]').popover(); 
  // gathers home data using ajax request and inserts it into doc
  getHomeData();
});

// fetching data required for home page along with adding in html for cards
function getHomeData(){
  $.getJSON("index.php/getHomeData", function(jsonObj){
    // can see the object returned
    //var jsonObj = $.parseJSON(rawjson);
    console.log("homeData");
    console.log(jsonObj);
    // get home page text
    $('#title_home').html('<h2>' + jsonObj[0].Title + '</h2>');
    $('#subtitle_home').html('<h3>' + jsonObj[0].Subtitle + '</h3>');
    $('#text_home').html('<p>' + jsonObj[0].Paragraph + '</p>');

    var cardhtml = "";

    // adds the html needed for each card on home page
    for(i = 1; i<jsonObj.length;i++){
      cardhtml += '<div class="col-xs-12 col-sm-4 col-xl-3">';
      cardhtml += '<div class="card">';
      cardhtml += '<a href="#">';
      cardhtml += '<img class="card-img-top img-fluid img-thumbnail" src="'+ jsonObj[i].Img +'">';
      cardhtml += '</a>';
      cardhtml += '<div class="card-body">';
      cardhtml += '<div class="card-title"><h2>' + jsonObj[i].Title + '</h2></div>';
      cardhtml += '<div class="card-subtitle"><h3>' + jsonObj[i].Subtitle + '</h3></div>';
      cardhtml += '<div class="card-text"><p>' + jsonObj[i].Paragraph + '</p></div>';
      cardhtml += '<a href="'+ jsonObj[i].Link +'" class="btn btn-primary">Find out more ...</a>';
      cardhtml += '</div></div></div>';
    }
    $('#cards_home').html(cardhtml);
  });
}

// fetching data required for misc items on models page
function getMiscData(){
  $.getJSON("index.php/getMiscData", function(jsonObj){
    console.log('miscData');
    console.log(jsonObj);
    // gallery
    $('#gallerytitle').html('<h3>' + jsonObj[0].GalleryTitle + '</h3>');
    $('#gallerytext').html('<p>' + jsonObj[0].GalleryText + '</p>');

    // cams
    $('#cameratitle').html('<h2>' + jsonObj[0].CameraTitle + '</h2>');
    $('#cameratext').html('<p>' + jsonObj[0].CameraText + '</p>');

    // animation
    $('#animationtitle').html('<h2>' + jsonObj[0].AnimationTitle + '</h2>');
    $('#animationtext').html('<p>' + jsonObj[0].AnimationText + '</p>');

    // render
    $('#rendertitle').html('<h2>' + jsonObj[0].RenderTitle + '</h2>');
    $('#rendertext').html('<p>' + jsonObj[0].RenderText + '</p>');
  });
  
}

// fetching the data required for the models
function getModelData(model){
  console.log(model);
  var url = "index.php/getModelData(" + model + ")";
  $.getJSON(url, function(jsonObj){
    console.log('modelData');
    console.log(jsonObj);
    //x3d titles and description at the bottom
    $('#x3dtitle').html('<h2>' + jsonObj[0].x3dTitle + '</h2>');
    $('#x3dmethod').html('<p>' + jsonObj[0].x3dMethod + '</p>');
    $('#title_model').html(jsonObj[0].Title);
    $('#subtitle_model').html('<h3>' + jsonObj[0].Subtitle + '</h3>');
    $('#text_model').html('<p>' + jsonObj[0].Paragraph + '</p>');
    $('#button_model').attr('href', jsonObj[0].Link);
  });
}