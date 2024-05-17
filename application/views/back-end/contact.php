<!DOCTYPE html> 
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contact | Sanskrutik Mahotsav</title>
  <!-- FAVICONS ICON -->
  <link href="<?php echo base_url(); ?>assets/front/img/logo/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/front/img/apple-touch-icon.png" rel="apple-touch-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>back_end_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>back_end_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>back_end_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>back_end_assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style type="text/css">
    .card-primary:not(.card-outline)>.card-header {
    background-color: #e31e24;
}
.btn-primary {
    color: #fff;
    background-color: #e31e24;
    border-color: #e31e24;
    box-shadow: none;
    border-radius: 1px;
}
.btn-primary:hover {
    color: #fff;
    background-color: #000;
    border-color: #e31e24;
    box-shadow: none;
    border-radius: 1px;
}
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #e31e24;
    border-color: #e31e24;
}
.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
    background-color: #e31e24;
    color: #fff;
} 
a {
    color: #e31e24;
}
  </style>
</head>
 

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('back-end/layout/header'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with contact</h3>
            </div>
              
            <!-- /.card-header -->
            <div class="card-body">
              <!-- <div class="date__ mb-3">
                 <form method="POST" action="<?php echo base_url('admin-filter'); ?>">  
                   <div class="container text-center" style="padding-top: 20px; padding-bottom: 20px; border: 1px solid; ">
                     <div class="row">
                       <div class="col-md-4"> 
                         <label for="from_date">From Date </label>
                         <span id="" class="red"></span>
                         <input type="date" name="from_date" value="<?php if ($dates['start']!=''){
                           echo $dates['start'];
                         } ?>" id="from_date" class="form-control">
                       </div>
                       <div class="col-md-4">
                         <label for="from_date">To Date </label>
                         <span id="" class="red"></span>
                         <input type="date" name="to_date" value="<?php if ($dates['end']!=''){
                           echo $dates['end'];
                         } ?>" id="to_date" class="form-control">
                       </div>
                       <div class="col-md-4">
                         <label></label>
                         <button type="submit" class="btn btn-info" style="margin-top: 33px;">Search</button>
                         <a href="https://www.teztecch.in/employee/attendance">
                           <span class="btn btn-warning" style="margin-top: 33px;">Reset</span>
                         </a>
                       </div>
                     </div>
                   </div>
                 </form>
               </div> -->
                <!-- <a href="#" class="btn btn-info mb-4"><i class="fas fa-plus-circle"></i></a> -->
              <table id="example1" class="table table-bordered table-striped"> 
                <thead> 
                <tr>
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                 <?php $i=1;  
                foreach ($contact_data as $data) { ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $data->name; ?></td>
                  <td><?php echo $data->email; ?></td>
                  <td><?php echo $data->phone; ?></td>
                  <td><?php echo $data->subject; ?></td>
                  <td><?php echo $data->message; ?></td>
                  <td><a href="javascript:void(0)" title="Delete" onclick="delete_person(<?php echo $data->id; ?>)" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                </tr>
                <?php $i++; } ?> 
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('back-end/layout/footer'); ?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>back_end_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>back_end_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<!--<script src="<?php echo base_url(); ?>back_end_assets/plugins/datatables/jquery.dataTables.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>back_end_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>back_end_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>back_end_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>-->
<script src="https://teztecch.in/teztecch_lms/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://teztecch.in/teztecch_lms/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://teztecch.in/teztecch_lms/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://teztecch.in/teztecch_lms/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://teztecch.in/teztecch_lms/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="https://teztecch.in/teztecch_lms/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="https://teztecch.in/teztecch_lms/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="https://teztecch.in/teztecch_lms/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="https://teztecch.in/teztecch_lms/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>back_end_assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>back_end_assets/dist/js/demo.js"></script>
<?php $this->load->view('back-end/refresh_js');?>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "print", "colvis"],
       stateSave: true
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
function delete_person(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        //alert(id);
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('Authenticate/delete_contact')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
              
                setInterval(location.reload(true), 5000);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

</script>
</body>
</html>
