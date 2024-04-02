<?php

if(session_status()!=PHP_SESSION_ACTIVE) session_start();

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");

include("complainrepository.php");

$complainRepo = new ComplainRepository($dc);

$message = '';
$errors = [];


$validate = true;

$queries = $complainRepo->all($_SESSION['portal_sup_school']);


?>
<!DOCTYPE html>
<html lang="en">

<?php $title = "Academic Queries"; include($path."includes.php"); ?>

<!-- JQuery UI -->
<link href="<?php echo $path; ?>vendors/jquery/dist/jquery-ui.min.css" rel="stylesheet">
<!-- Datatables -->
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">

<style>
    .Pending { background-color: red; color:#fff; }
    .Process { background-color: orange; }
    .Done { background-color: green; }

</style>
<body class="nav-md footer_fixed">
<div class="container body">
    <div class="main_container">

        <?php include($path."leftheader.php"); ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Academic Queries</h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">

                            <div class="x_content">

                                <div data-parsley-validate class="form-horizontal form-label-left">

                                    <table id="table-queries" class="table table-bordered table-hover">
                                        <thead>
                                            <tr style="background-color:#293594;color:#FFF;">
                                            <th>#</th>
                                            <th>School</th>
                                            <th>School No</th>
                                            <th>Student Name</th>
                                            <th style="width: 15%;">Subject</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($queries->Rows as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->Id; ?></td>
                                                <td><?php echo $row->School; ?></td>
                                                <td><?php echo $row->SchoolNo; ?></td>
                                                <td><?php echo $row->StudentName; ?></td>
                                                <td><a href="javascript:void()" onclick="javascript:onView(<?php echo $row->Id;?>)"><?php echo $row->Subject; ?></a></td>
                                                <td class="<?php echo $row->Status; ?>"><?php echo $row->Status; ?></td>
                                                <td style="font-size:12px;">
                                                    <div>Query:
                                                    <?php echo $functions->formatDate ($row->Datetime, 'm/d/yy  h:i a'); ?></div>
                                                    <div>Process:
                                                        <?php if($row->DatetimeProcess != '') echo $functions->formatDate ($row->DatetimeProcess, 'm/d/yy  h:i a'); ?></div>
                                                    <div>Done:
                                                        <?php if($row->DatetimeDone != '') echo $functions->formatDate ($row->DatetimeDone, 'm/d/yy  h:i a'); ?></div>
                                                </td>
                                                <td>
                                                    <?php
                                                    $onClick = 'onclick="javascript:onProcess('.$row->Id.')"';
                                                    $disabled = '';
                                                    if ($row->DatetimeProcess != '') {
                                                        $onClick = '';
                                                        $disabled = ' disabled';
                                                    } ?>
                                                    <a href="#" <?php echo $onClick;?>  <?php echo $disabled;?> class="btn btn-warning small process">Process</a>

                                                    <?php
                                                    $onClick = 'onclick="javascript:onDone('.$row->Id.')"';
                                                    $disabled = '';
                                                    if ($row->DatetimeDone != '') {
                                                        $onClick = '';
                                                        $disabled = ' disabled';
                                                    } ?>

                                                    <a href="#" <?php echo $onClick;?>  <?php echo $disabled;?> class="btn btn-success small done" style="background: #28a745;border: 1px solid #28a745;">Done</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- footer content -->

            <?php include($path."footer.php"); ?>
            <!-- /footer content -->

        </div>
        <!-- /page content -->


    </div>
</div>

<?php include($path."footerincludes.php"); ?>

<!-- JQuery UI -->
<script src="<?php echo $path; ?>vendors/jquery/dist/jquery-ui.min.js"></script>

<!-- Datatables -->
<script src="<?php echo $path; ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $path; ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $path; ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo $path; ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo $path; ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>

</body>

<script>

    $(document).ready(function () {

        var table = $('#table-queries').DataTable({
            dom: "Bfrtip",
            buttons: [
                'print'
            ],
            "ordering": false,
            responsive: true,
            //"pagingType": "full_numbers",

        });
    });
</script>

<script>
    
    function onProcess(id) {

        if (confirm('Are you sure you want to update query as Start Process?')) {
            $.post("complainrepository.php?select=1&id="+id,function(data){
                //alert(data);

                var status = data;

                if (status == 1) {
                    location.href = "myqueries.php";
                }
            });
        }
    }

    function onDone(id) {

        if (confirm('Are you sure you want to update query as Done?')) {
            $.post("complainrepository.php?select=2&id="+id,function(data){
                //alert(data);

                var status = data;

                if (status == 1) {
                    location.href = "myqueries.php";
                }
            });
        }
    }

    function onView(id) {
        var query = "";
        $.post("complainrepository.php?select=3&id="+id,function(data){
            //alert(data);
            query = jQuery.parseJSON( data );

            query = query[0];

            //alert(query);
            $('<div></div>').dialog({
                modal: true,
                title: "Query Details - #" + query.Id,
                width: "500",
                position: { my: "center center", at: "center center-100" },
                open: function() {

                    var markup = markupJSON( query );
                    $(this).html(markup);

                },
                buttons: {
                    Ok: function() {
                        $( this ).dialog( "close" );
                    }
                }
            });

        });


    }

    function markupJSON (jsonData) {
        var markup =
            '<div class="form-group row">\n' +
            '   <div class="col-xs-4">School No </div>\n' +
            '   <div class="col-xs-8">\n' +
            '       <div>'+ jsonData.SchoolNo + " - " + jsonData.Studing +'</div>\n' +
            '   </div>' +
            '</div>' +

            '<div class="form-group row">\n' +
            '   <div class="col-xs-4">Student Name </div>\n' +
            '   <div class="col-xs-8">\n' +
            '       <div>'+ jsonData.StudentName +'</div>\n' +
            '   </div>' +
            '</div>' +

            '<div class="form-group row">\n' +
            '   <div class="col-xs-4">Email </div>\n' +
            '   <div class="col-xs-8">\n' +
            '       <div>'+ jsonData.Email_Gmail +'</div>\n' +
            '   </div>' +
            '</div>' +

            '<div class="form-group row">\n' +
            '   <div class="col-xs-4">Mobile </div>\n' +
            '   <div class="col-xs-8">\n' +
            '       <div>'+ jsonData.Mobile +'</div>\n' +
            '   </div>' +
            '</div>' +

            '<div class="ui-widget-content ui-helper-clearfix" style="margin-bottom: 10px;"></div>'+

            '<div class="form-group row">\n' +
            '   <label class="col-xs-12">'+ jsonData.Subject +' </label>\n' +
            '   <div class="col-xs-12">\n' +
            '       <div>'+ jsonData.Message +'</div>\n' +
            '   </div>' +
            '</div>';

        return markup;
    }


</script>

</html>
