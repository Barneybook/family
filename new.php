<?php

?>

<body>
<?php

	//require();
	
	if(trim($POST['name'])!=''){$name_new=trim($POST['name']);}
	if(trim($POST['sex'])!=''){$sex_new=trim($POST['sex']);}
	if(trim($POST['birthday'])!=''){$birthday_new=trim($POST['birthday']);}
	

	//$user_id
	
	if(isset($name_new) OR isset($sex_new) OR isset($birthday_new))
	{
		echo '<p>資料填寫不完全!!</p>';
		echo '<p>請重新填寫</p>';
		//require('add_form');
	}
	
	
	
?>
<!--
new.php
填入欄位
性名	name
性別	sex(男女)
生日	birthday(選日期，yyyy-MM-dd)，三欄的下拉式選單
用jQuery auth檢查，是否有填資料
-->
<form action="new.php" method=POST>
<table>
<tr>
	<td><b class="tx">性名:</b></td>
	<td><input type="text" name="name" /></td>
</tr>
<tr>
	<td><b class="tx">性別:</b></td>
	<td>男<input name="sex" type="radio" value="M">女<input name="sex" type="radio" value="F"></td>
</tr>
<tr>
	<td><b class="tx">生日:</b></td>
	<td></td>
</tr>
</table>
<input type="submit" value="送出" />
<input type="reset" value="清空" />
</form>


</body>