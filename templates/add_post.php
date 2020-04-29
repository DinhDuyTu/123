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
            <div class="panel-heading">Add post</div>
            <div class="panel-body">
                <form action="?action=doAdd" method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-12" style="position: relative;">
                        <div class="form-group">
                            <a href="index.php?action=list" class="btn btn-primary" style="float: right;">Back</a>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control"  name="title" required="">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="textarea" class="form-control" name="description" required=""></input>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Enable</option>
                                <option value="0">Disable</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label name="image">Thump</label><?php if(isset($error_image)){echo $error_image;} ?>                         
                            <input type="file" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Create</button>

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