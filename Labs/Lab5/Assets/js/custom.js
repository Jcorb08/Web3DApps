$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

function swap(selected)
    {
      // first dont display all div id contents
      document.getElementById('home').style.display = 'none';
      document.getElementById('coke').style.display = 'none';
      document.getElementById('sprite').style.display = 'none';
      document.getElementById('pepper').style.display = 'none';

      // then display the selected div id contents
      document.getElementById(selected).style.display = 'block';

    }