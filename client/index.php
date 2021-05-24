




<?php  include_once("header.php");
 header("Access-Control-Allow-Origin: *");

?>
<!-- jquery (help with javascript) -->
<div id="main-content">
    <h2>All Records</h2>
  
</div>
<table class="table table-dark" id="tableBody">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Class</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<script>
    $(function () {
      $.ajax({
        type: 'GET',
        url: 'http://172.16.32.11:8000/server/config.php',
        dataType: 'json',
        success: function (data) {
          console.log('success ', data);
          $.each(data, function (i, item) {
            var rows = "<tr>" +
              "<td>" + item.sname + "</td>" +
              "<td>" + item.semail + "</td>" +
              "<td>" + item.sclass + "</td>" +
              "<td>" + item.sphone + "</td>" +
              "<input type='hidden' value=" + item.id + ">" +
              "<td>" + "<a type='button' href='update.php?sid="+item.sid+"&sname="+item.sname+"&semail="+item.semail+"&sphone="+item.sphone+"&sclass="+item.sclass+"'class='btn btn-warning editBtn'>" + "Edit" + "</a>" +
              "</td>" +
              "<td>" + "<a type='button' href='http://172.16.32.11:8000/server/deletedata.php?delete="+item.sid+"'    class='btn btn-danger deleteBtn'>" + "Delete" + "</a>" +
              "</td>" +

              
              "</tr>";
            
              "</td>" +
              "<td>" + "<a type='button' class='btn btn-danger deleteBtn'>" + "Delete" + "</a>"


            $('#tableBody').prepend(rows);
          });
          // $('.deleteBtn').on("click", function () {
          //   var id = $(this).parent().prev().prev().val();
          //   $.ajax({
          //     type: "post",
          //     data: {
          //       ID: id,
          //     },
          //     url: 'http://192.168.0.1:8081/web-api/database.php',
          //     success: function (data) {
          //       alert(data);
          //     }
          //   })
          // })
        }
      })
    })

  </script>
</body>
</html>
