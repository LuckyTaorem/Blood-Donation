<?php
error_reporting(0);
$SETTINGS["mysql_user"]='epiz_30952003';
$SETTINGS["mysql_pass"]='4TeSyJ2b5LHde';
$SETTINGS["hostname"]='sql308.epizy.com';
$SETTINGS["mysql_database"]='epiz_30952003_majorproject';
$SETTINGS["data_table"]='blood_camps';

/* Connect to MySQL */

$mysqli = new mysqli($SETTINGS["hostname"], $SETTINGS["mysql_user"], $SETTINGS["mysql_pass"],$SETTINGS["mysql_database"]);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style type="text/css" class="init">

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            visibility: hidden;
        }

        #search_wrapper{
            width: 98%;
        }

        table.dataTable > tbody > tr.child span.dtr-title{
            display: none;
        }
    </style>

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" class="init">


        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#search #head #th').each( function () {
                var title = $(this).text();
                $(this).html( ''+title+' <input type="text" class="filter" placeholder="Search '+title+'" />' );
            } );

            // DataTable
            var table = $('#search').DataTable({
                responsive: true,


                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
                        $( 'input', this.header() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }
            });

            $('.filter').on('click', function(e){
                e.stopPropagation();
            });

            new $.fn.dataTable.FixedHeader( table );
            $("#search th.datepicker input").datepicker({
                format: "yyyy-mm-dd",

            });
        } );


    </script>
</head>
<body style="padding: 10px">
<button class="btn btn-dark mt-3" onclick="history.back()">Go Back</button>
<p class="h1 text-center">Blood Camp Schedule</p>
            <table id="search" class="table table-striped table-bordered display  responsive nowrap" style="width: 100%">    
            <thead id="head">
                <tr>
                    <th><strong>S.No</strong></th>
                    <th id="th"><strong>Camp Name</strong></td>
                    <th id="th"><strong>State</strong></td>
                    <th id="th"><strong>District/City</strong></td>
                    <th><strong>Date</strong></td>
                    <th><strong>Timing</strong></td>
                    <th><strong>Camp Address</strong></td>
                    <th><strong>Contact</strong></td>
                    <th id="th"><strong>Organized by</strong></td>
                    <th><strong>Conducted By</strong></td>
                </tr>
                </thead>
                <tbody>
                <?php

                $sql = "SELECT *,ROW_NUMBER() OVER ( ORDER BY sdate desc ) as ids FROM ".$SETTINGS["data_table"];

                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr><td><?php echo $row["ids"]; ?></td>
                            <td><?php echo $row["cname"]; ?></td>
                            <td><?php echo $row["state"]; ?></td>
                            <td><?php echo $row["district"]; ?></td>
                            <td><strong>Date: </strong><?php echo date('d/m/y',strtotime($row["sdate"])); ?>&nbsp;-&nbsp;<?php echo date('d/m/y',strtotime($row["edate"])); ?></td>
                            <td><strong>Timing: </strong><?php echo date('h:i a',strtotime($row["stime"])); ?>&nbsp;-&nbsp;<?php echo date('h:i a',strtotime($row["etime"])); ?></td>
                            <td><strong>Camp Address: </strong><?php echo $row["cadd"]; ?></td>
                            <td><strong>Contact: </strong><?php echo $row["contact"]; ?></td>
                            <td><strong>Organized by: </strong><?php echo $row["organized"]; ?></td>
                            <td><strong>Conducted By: </strong><?php echo $row["conducted"]; ?></td>
                        </tr>
                    <?php }
                } else {
                ?>
                <tr><td colspan="5">No results found.</td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>