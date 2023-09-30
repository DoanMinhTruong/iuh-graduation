<?php date_default_timezone_set("asia/Ho_Chi_Minh");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="../public/css/all.min.css" rel="stylesheet" />
    <link href="../public/css/bo2otstrap.min.css" rel="stylesheet" />
    <link href="../public/css/fStyle.css" rel="stylesheet" />
    <!-- css datable -->
    <link rel="stylesheet" href="../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link href="../public/plugins/summernote/summernote-bs4.min.css" rel="stylesheet" />
    <script src="../public/js/new/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Quản lý đề tài</title>
</head>
    <script src="../public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../public/plugins/summernote/summernote-bs4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
</html>
