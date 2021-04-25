$(document).ready(function(){
  $('[data-toggle="popover"]').popover(); 
  
  $.getJSON("index.php", function(rawjson){
    // can see the object returned
    var jsonObj = $.parseJSON(rawjson);
    console.log(jsonObj);
    // get home page text
    $('#title_home').html('<h2>' + jsonObj[0].Title + '</h2>');
    $('#subtitle_home').html('<h3>' + jsonObj[0].Subtitle + '</h3>');
    $('#text_home').html('<p>' + jsonObj[0].Paragraph + '</p>');

    // cocacola text
    $('#title_cocacola').html('<h2>' + jsonObj.pageTextData[1].Title + '</h2>');
    $('#subtitle_cocacola').html('<h3>' + jsonObj.pageTextData[1].Subtitle + '</h3>');
    $('#text_cocacola').html('<p>' + jsonObj.pageTextData[1].Paragraph + '</p>');

    // sprite text
    $('#title_sprite').html('<h2>' + jsonObj.pageTextData[2].Title + '</h2>');
    $('#subtitle_sprite').html('<h3>' + jsonObj.pageTextData[2].Subtitle + '</h3>');
    $('#text_sprite').html('<p>' + jsonObj.pageTextData[2].Paragraph + '</p>');

    // drpepper text
    $('#title_drpepper').html('<h2>' + jsonObj.pageTextData[3].Title + '</h2>');
    $('#subtitle_drpepper').html('<h3>' + jsonObj.pageTextData[3].Subtitle + '</h3>');
    $('#text_drpepper').html('<p>' + jsonObj.pageTextData[3].Paragraph + '</p>');
    
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