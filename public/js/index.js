$( document ).ready(function() {

  document.getElementById("buttonHidden").style.visibility = 'hidden';
  $( "select" ).change(function()
  {
    var str = $("#select").val()

    if (str=="Admin")
     {
      document.getElementById("buttonHidden").style.visibility = 'visible';
    }
    else
    {
      document.getElementById("buttonHidden").style.visibility = 'hidden';
    }

  })


});
