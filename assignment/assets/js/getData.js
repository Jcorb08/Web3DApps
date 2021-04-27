$(document).ready(function(){
  $('[data-toggle="popover"]').popover(); 
  // gathers home data using ajax request and inserts it into doc
  getHomeData();
});

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

function getModelData(model){
  console.log(model);
  $.getJSON("index.php/getModelData(" + model + ")", function(jsonObj){
    console.log('miscData');
    console.log(jsonObj);
    //x3d titles and description at the bottom
    $('#x3dtitle').html('<h2>' + jsonObj.pageTextData[4].x3dtitle + '</h2>');
    $('#x3dmethod').html('<p>' + jsonObj.pageTextData[4].x3dmethod + '</p>');
    $('#title_model').html('<h2>' + jsonObj.pageTextData[4].title + '</h2>');
    $('#subtitle_model').html('<h3>' + jsonObj.pageTextData[4].subtitle + '</h3>');
    $('#text_model').html('<p>' + jsonObj.pageTextData[4].text + '</p>');
    $('#button_model').attr('href', jsonObj[5].link);
  });
}