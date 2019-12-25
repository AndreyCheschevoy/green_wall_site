<?php 

    $item = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    mail("info@greenempire.com.ua", "Сообщение с сайта greenempire.com.ua","Email: ".$item. "\n\nИмя: ".$name."\n\nТема: ".$subject."\n\nСообщение: ".$message."\n\n")

?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">

function changeurl1(){eval(self.location="http://www.greenempire.com.ua");}
window.setTimeout("changeurl1();",1);

</script>