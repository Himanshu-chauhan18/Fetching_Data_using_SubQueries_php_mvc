<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Task-1</title>
</head>

<body>
    <div class="container mt-5">
        <center>
            <h1  class="mb-5 shadow-lg p-3 mb-5 bg-white rounded text-warning">Task-1 Fetching Data using SubQueries</h1>
        </center>
        <div class="row">
            <div class="col-sm-10">
          <form action="">
          <table class="table table-striped shadow-lg p-3 mb-5 bg-white rounded table-hover mx-auto w-auto  text-center " style="margin-top:20px;">
               <tbody id="tbody">
               </tbody>
           </table>
          </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->

    <script>
        showTable();
        function showTable(){
	          var url = 'http://localhost/Fetching_Data_using_SubQueries_php_mvc/';
                $.ajax({
                    type: 'POST',
                    url: url + 'welcome/read',
                    success:function(r){
                        $('#tbody').html(r);
                    }
                });
            }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
</body>

</html>