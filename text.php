
<?php
if(isset($_POST['submit'])){
    //move_uploaded_file();
    foreach($FILES['doc']['name'] as $key=>$val){
        $rand=rand('11111111','99999999');
        $file=$rand.''.$val;
        move_uploaded_file($_FILES['doc']['tmp_name'][$key],'img/upload/'.$file);
        //insert into table(image) values('$file');
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="doc[]" multiple/>
    <input type="submit" name="submit"/>
</form>