<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" referrerpolicy="no-referrer" />
   <title>Tablesigniter</title>
</head>

<body class="container py-5">

   <div class="container">
      <div class="card">
         <div class="card-body">
            <table id="newsTable" class="table table-striped table-hover">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Title</th>
                     <th>News</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                     <th>Action</th>
                  </tr>
               </thead>
            </table>

         </div>
      </div>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" referrerpolicy="no-referrer"></script>

   <script>
      // $('#newsTable').DataTable({
      //    "aoColumnDefs": [{
      //       "bSortable": false,
      //       "aTargets": [0, 1, 2]
      //    }],
      //    "order": [],
      //    "serverSide": true,
      //    "searching": false,
      //    "lengthChange": false,
      //    "ajax": {
      //       url: "<?= base_url('newsController/newsTable') ?>",
      //       type: 'POST'
      //    }
      // });



      $('#newsTable').DataTable({
         "order": [],
         "serverSide": true,
         "ajax": {
            url: "<?= base_url('newsController/newsTable') ?>",
            type: "POST",
         }
      });
   </script>
</body>

</html>