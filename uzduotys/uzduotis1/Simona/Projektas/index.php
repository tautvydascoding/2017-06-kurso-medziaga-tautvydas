<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> LRK </title>
    <meta name="description" content="Lietuvos Raudonoji knyga, itin reti Lietuvos augalai, gyvūnai, grybai" />
    <meta name="author" content="Simona Matiukaite" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Spectral:300i">
    <link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap1/js/jquery-3.2.1.min.js" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap1/css/main.css" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://code.jquery/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.autocomplete.html.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap1/js/main.js" />

    <title></title>


    <!-- /*<style>
    ul{
      background-color:#eee;
      cursor:pointer;
    }
    li{
    padding:12px;
  }
    </style>*/ -->

  </head>
  <body>


    <form action='' method='post'>
    		<p><label>Rusys:</label><input type='text' name='name' value='' class='auto'></p>
    	</form>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
    <script type="text/javascript">
    $(function() {

    	//autocomplete
    	$(".auto").autocomplete({
    		source: "search.php",
    		minLength: 1
    	});
    });
    </script>








<!-- <dvi class="container" style="width:500px;">
  <h3 align="center"> Autocomplete textbox using </h3><br>
  <label>Paieska</label>
  <input type="text" name="rusis" id="rusis" class="form-control" placeholder="Iveskite rusies pavadinima"</input>
  <div id="gyvunuPav"></div>

            </div> -->
      </body>
</html>

<!-- <script>
  $(document).ready(function() {
      $('#name').keyup(function() {
        var query = $ (this).val();
        if (query != '')
  {
            $.ajax({
            url:"search.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                  $('gyvunuPav').fadeIn();
                  $('gyvunuPav').html(data);
                }
            });
          }
      });
      $(document).on('click', 'li', function(){
          $('#rusis').val($(this).text());
          $('#gyvunuPav').fadeOut();
      });
  });

</script> -->
