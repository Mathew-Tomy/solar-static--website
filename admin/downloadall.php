<?php
require('../db/session.php');
define('DBHOST','localhost'); // host name
define('DBUSER','d9wyov7dxi8t'); 
 define('DBPASS','Enbktm2020*'); // mysql pasword 
define('DBNAME','enbridg_enbridgdemo');
$db = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
define('TABLE','tbl_gallery');
?>

<html>
 <head>
  <title>Export jQuery Datatables Data to Excel, CSV, PDF using PHP Ajax</title>
       
  <!--<link href="https://www.walkerz.in/admin/jobseekerregister/css/styles.css" rel="stylesheet" />-->
  <!-- <link rel="stylesheet" type="text/css" href="https://www.walkerz.in/admin/jobseekerregister/css/jquery.dataTables.min.css">-->
  <!--  <link rel="stylesheet" type="text/css" href="https://www.walkerz.in/admin/jobseekerregister/css/bootstrap.min.css">-->
  <!--  <link rel="stylesheet" type="text/css" href="https://www.walkerz.in/admin/jobseekerregister/css/dataTables.bootstrap.min.css">-->
  <!--  <link rel="stylesheet" type="text/css" href="https://www.walkerz.in/admin/jobseekerregister/css/buttons.dataTables.min.css">-->
  

      <link rel="stylesheet" type="text/css" href="https://www.walkerz.in/admin/jobseekerregister/css/bootstrap.min.css">
  
  
  <link href="https://www.walkerz.in/admin/css/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"  rel="stylesheet" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

 </head>
 <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        
       
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Today's Birthday List</h1>
                        
<?php if(isset($_SESSION['PendingSuccess'])) { ?>
      <div class="successMessage" >
      <button type="button" class="btn btn-warning" style="text-align: center;  font-size: 22px; " >
          Message Send Successfully!
        </div>
   
    <?php unset($_SESSION['PendingSuccess']); } ?>
    
                        <div class="card mb-4">
                            
                        </div>
                       
                            <div class="card-body">
                                <div class="table-responsive">
            <body class="container">
<?php


//Select the birthday list
?>
<div class="card-body">
                                <div class="table-responsive">
                <form  name="vform"  action="createzipp.php"  method="POST" >
            <table id="maintable" class="display compact cell-border" cellspacing="0" width="100%">
    <thead>
    <tr>
     <th><input type="checkbox" id="checkAll"> Select All</th>

			    <th>Name</th>
             
      
    </tr>
    </thead>
    <tbody>
        
   
 <?php 
 $result =mysqli_query($db,"SELECT * FROM tbl_gallery ");
  $i=0;
	while($row = mysqli_fetch_array($result)) {
   
 ?>

    <tr>
         <td>
					<input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["gal_id"]; ?>">
                
					
			    </td>
              <td><?php echo $row["gal_img"]; ?></td>
		
                <?php 
     $i++;
    }
    ?>	
		
    </tfoot>
</table>
	<p align="center"><button type="submit" class="btn btn-success" name="createzip" id="createzip">Send Message </button></P>
	</form>
<script>
$("#checkAll").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);

});
</script>
<script>
$(document).ready(function() {
    $('#maintable').DataTable(
        {
            responsive: true,
  
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],     // page length options
 
            "dom": 'Bfrtip',
            "buttons": ['excel','pageLength'],    // adds the excel button
          } );
} );
</script>
<script>
//     $(document).ready( function() {
//     $('#maintable').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [ {
//             extend: 'excelHtml5',
//             autoFilter: true,
//             sheetName: 'Exported data'
//         } ]
        
//     } );
// } );
    
</script>
<script>
// $(document).ready(function() {
//     $('#maintable').DataTable( {
//         dom: 'Bfrtip',
//         lengthMenu: [
//             [ 10, 25, 50, -1 ],
//             [ '10 rows', '25 rows', '50 rows', 'Show all' ]
//         ],
//         buttons: [
//             'pageLength'
//         ]
        
//     } );
// } );
</script>

<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/jquery-2.2.4.min.js"></script>-->
<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/jquery.dataTables.min.js"></script>-->
<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/dataTables.buttons.min.js"></script>-->
<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/jszip.min.js"></script>-->
<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/pdfmake.min.js"></script>-->
<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/vfs_fonts.js"></script>-->
<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/buttons.html5.min.js"></script>-->
<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/buttons.print.min.js"></script>-->
<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/app.js"></script>-->
<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/jquery.mark.min.js"></script>-->
<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/datatables.mark.js"></script>-->
<!--<script type="text/javascript" src="https://www.walkerz.in/admin/jobseekerregister/js/buttons.colVis.min.js"></script>-->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>




<script type="text/javascript">
      $(function(){
        $(".successMessage:visible").fadeOut(5000);
      });
    </script>
    
	<script>
		$(document).ready(function(){
			$('input[type="file"]').on('change', function () {
				let filenames = [];
				let files = document.getElementById('customFile').files;
				if(files.length>1){
					filenames.push('Total Files ('+files.length+')');
				}else{
					for (let i in files) {
						if (files.hasOwnProperty(i)) {
							filenames.push(files[i].name);
						}
					}
				}
				$(this).next('.custom-file-label').html(filenames.join(','));
			});
		});
	</script>
</body>

</html>
