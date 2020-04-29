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
        <div class="panel panel-default">
            <div class="panel-heading">Edit Post</div>
            <div class="panel-body">

                <form action="?action=doEdit" method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-12">
                    	<div class="form-group">
                            <a href="?action=list" class="btn btn-primary" style="float: right;">Back</a>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control"  name="title" value="<?php echo $row['title']; ?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>" required="">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value=1 name="status"
                                <?php 
                                    if($row['status']==1){
                                        echo 'selected';
                                    }
                                ?>>Enable</option>
                                <option value=0 name="status"
                                <?php 
                                    if($row['status']==0){
                                        echo 'selected';
                                    }
                                ?>>Disable</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Ảnh mô tả</label>
                            <input type="file" name="image"><input type="hidden" name="image"	  value="<?php echo $row['image']; ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit Edit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
            <script src="templates/js/jquery-1.11.1.min.js"></script>
            <script src="templates/js/bootstrap.min.js"></script>
            <script src="templates/js/chart.min.js"></script>
            <script src="templates/js/chart-data.js"></script>
            <script src="templates/js/bootstrap-table.js"></script>
            <link rel="stylesheet" href="templates/css/bootstrap-table.css"/>

</body>
</html>
