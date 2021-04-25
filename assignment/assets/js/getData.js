$(document).ready(function(){
  $('[data-toggle="popover"]').popover(); 
  
  $.getJSON("controller.php", function(jsonObj){
    // can see the object returned
    console.log(jsonObj);
    // get home page text
    $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '</h2>');
    $('#subtitle_home').html('<h3>' + jsonObj.pageTextData[0].subtitle + '</h3>');
    $('#text_home').html('<p>' + jsonObj.pageTextData[0].text + '</p>');

    // home left text
    $('#title_left').html('<h2>' + jsonObj.pageTextData[1].title + '</h2>');
    $('#subtitle_left').html('<h3>' + jsonObj.pageTextData[1].subtitle + '</h3>');
    $('#text_left').html('<p>' + jsonObj.pageTextData[1].text + '</p>');

    // home centre text
    $('#title_centre').html('<h2>' + jsonObj.pageTextData[2].title + '</h2>');
    $('#subtitle_centre').html('<h3>' + jsonObj.pageTextData[2].subtitle + '</h3>');
    $('#text_centre').html('<p>' + jsonObj.pageTextData[2].text + '</p>');

    // home right text
    $('#title_right').html('<h2>' + jsonObj.pageTextData[3].title + '</h2>');
    $('#subtitle_right').html('<h3>' + jsonObj.pageTextData[3].subtitle + '</h3>');
    $('#text_right').html('<p>' + jsonObj.pageTextData[3].text + '</p>');
    
    /*
    // coke 
    $('#x3dtitle_coke').html('<h2>' + jsonObj.pageTextData[4].x3dtitle + '</h2>');
    $('#x3dmethod_coke').html('<p>' + jsonObj.pageTextData[4].x3dmethod + '</p>');
    $('#title_coke').html('<h2>' + jsonObj.pageTextData[4].title + '</h2>');
    $('#subtitle_coke').html('<h3>' + jsonObj.pageTextData[4].subtitle + '</h3>');
    $('#text_coke').html('<p>' + jsonObj.pageTextData[4].text + '</p>');

    // sprite
    $('#x3dtitle_sprite').html('<h2>' + jsonObj.pageTextData[5].x3dtitle + '</h2>');
    $('#x3dmethod_sprite').html('<p>' + jsonObj.pageTextData[5].x3dmethod + '</p>');
    $('#title_sprite').html('<h2>' + jsonObj.pageTextData[5].title + '</h2>');
    $('#subtitle_sprite').html('<h3>' + jsonObj.pageTextData[5].subtitle + '</h3>');
    $('#text_sprite').html('<p>' + jsonObj.pageTextData[5].text + '</p>');

    // pepper
    $('#x3dtitle_pepper').html('<h2>' + jsonObj.pageTextData[6].x3dtitle + '</h2>');
    $('#x3dmethod_pepper').html('<p>' + jsonObj.pageTextData[6].x3dmethod + '</p>');
    $('#title_pepper').html('<h2>' + jsonObj.pageTextData[6].title + '</h2>');
    $('#subtitle_pepper').html('<h3>' + jsonObj.pageTextData[6].subtitle + '</h3>');
    $('#text_pepper').html('<p>' + jsonObj.pageTextData[6].text + '</p>');
    

    // 3d images
    $('#gallerytitle').html('<h3>' + jsonObj.pageTextData[7].gallerytitle + '</h3>');
    $('#gallerytext').html('<p>' + jsonObj.pageTextData[7].gallerytext + '</p>');

    // cams
    $('#camtitle').html('<h2>' + jsonObj.pageTextData[8].camtitle + '</h2>');
    $('#camsubtitle').html('<h3>' + jsonObj.pageTextData[8].camsubtitle + '</h3>');
    */
  });
});