$(document).ready(function(){

  $.getJSON('../model/data.json', function(jsonObj){
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

  });
});