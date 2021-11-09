<?php
if (isset($_POST['submit'])){
require_once 'config.php';
$sub_id=$_POST['sub_id'];
$sub_name=$_POST['sub_name'];
$t_hour=$_POST['t_hour'];
$p_hour=$_POST['p_hour'];
$credit=$_POST['credit'];
$teacher=$_POST['teacher'];

if($sub_id=='' || $sub_name==''|| $t_hour==''|| $p_hour=='' ||$credit=='' ||$teacher==''){
    echo "<script>alert('คุณยังไม่ได้กรอกข้อมูลง')</script>";
}else{


$sql="INSERT INTO subject VALUES('$sub_id','$sub_name','$t_hour','$p_hour','$credit','$teacher')";
$con->query($sql);
if(!$con){
    echo "alert('ไม่สามารถเพิ่มข้อมูลได้')";
}else{
    echo "alert('เพิ่มข้อมูลสำเร็จ')";
}
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 w-25">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">รหัสวิชา</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="sub_id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">ชื่อวิชา</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="sub_name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">ชม.ทฤษฎี</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="t_hour">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">ชม.ปฏิบัติ</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="p_hour">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">หน่วยกิต</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="credit">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">ชื่อครูผู้สอน</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="teacher">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4"></label>
            <div class="col-sm-8">
                <input type="submit" class="btn btn-primary" name="submit" value="เพิ่มข้อมูล">
            </div>
        </div>
    </form>
    </div>
</body>
</html>