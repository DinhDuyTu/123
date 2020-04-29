<!DOCTYPE html>
<html>
<head>
    <link href="templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="templates/css/datepicker3.css" rel="stylesheet">        
    <link href="templates/css/styles.css" rel="stylesheet">
    <title></title>
</head>
<body>
<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">List Post</h1>
</div>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <div class="">
            <div class="" style="position: relative;">
                <table data-toggle="table">
                    <thead>

                        <tr>
                            <th class="col-lg-1">ID</th>
                            <th class="col-lg-2">Thump</th>
                            <th class="col-lg-6">Title</th>
                            <th class="col-lg-1">Status</th>
                            <th class="col-lg-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rows as $row): ?>

                        <tr>
                          
                            <td>
                                <?php echo $row['id_post']; ?>
                            </td>

                            <td>
                                <img width="192" height="108" src="templates/image/<?php echo $row['image']; ?>">
                            </td>

                            <td>
                                <?php echo $row['title']; ?>
                            </td>

                            <td>
                                <?php if($row['status']==1){
                                    echo "Enable";
                                }
                                else {
                                    echo "Disable";
                                }
                                ?>
                            </td>

                            <td>
                                <a href="?action=show">Show</a>
                                <p>|</p>
                                <a href="?action=edit&id_post=<?php echo $row['id_post']; ?>">Edit</a>
                                <p>|</p>
                                <a href="?action=delete&id_post=<?php echo $row['id_post']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->
            <script src="templates/js/jquery-1.11.1.min.js"></script>
            <script src="templates/js/bootstrap.min.js"></script>
            <script src="templates/js/chart.min.js"></script>
            <script src="templates/js/chart-data.js"></script>
            <script src="templates/js/bootstrap-table.js"></script>
            <link rel="stylesheet" href="templates/css/bootstrap-table.css"/>

</body>
</html>