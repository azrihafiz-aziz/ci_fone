<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Filter Data Di PHP CodeIgniter</title>
</head>
<body>
 <div class="container">
 <div class="row">
 <h1 align="center">Belajar Membuat Filter Data dengan Javascript dan PHP CodeIgniter</h1>
 <br>
 <div class="col-md-3">
 <table class="table">
 <tr>
 <td>
    <select name="" class="form-control" id="angkatan">
    <option value="0">Show All</option>
    <option value="1">2017</option>
    <option value="2">2018</option>
    <option value="3">2019</option>
    </select>
 </td>
 </tr>
 </table>
 </div>
 <div class="col-md-9">
  <table class="table table-hover table-striped" id="mahasiswa">
  <thead>
            <tr>
            <td>#</td>
            <td>Name</td>
            <td>Standard</td>
            <td>Percentange</td>
            </tr>
  </thead>
  <tbody>
  </tbody>
  </table>
 </div>
 </div>
 </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
  <script>
  $(document).ready(function(){
      //jika data sudah siap maka akan dijalankan
      mahasiswa();
  $("#angkatan").change(function(){
    //let a=$(this).val();
//   console.log(a);
//ini dijalankan ketika ada event dari combo box
     mahasiswa();
  });
  });
  function mahasiswa(){
      var angkatan=$("#angkatan").val();
      //console.log(angkatan);
      $.ajax({
          url:"<?php echo base_url('Filter/load_mahasiswa') ?>",
          data:"angkatan"+ angkatan,
        //   method: get,
          success:function(data){
            // $("#mahasiswa tbody").html('<tr><td colspan="4" align="center">Tidak ada data</td></tr>')
            //console.log(data);
            $("#mahasiswa tbody").html(data);
            console.log(url);
          }
      });
  }
  </script>
</body>
</html>