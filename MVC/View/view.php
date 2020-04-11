<!DOCTYPE html>
<html>
<head>
    <title>View</title>
</head>
<body>
<h1><?php echo $msg." ".$name; ?></h1>
<form method="POST">
    <label>NAME : </label><input type="text" name="name" placeholder="Enter"><br>
    <small>try, submitting empty field once then try submitting with some name</small><br>
    <input type="submit" name="btnsub" value="Submit">
</form>
</body>
</html>