<?php
function FindReplace(){
$offset=0;

if(isset($_POST['text']) && isset($_POST['search']) && isset($_POST['replace'])){
 	
 	 $text= $_POST['text'];
	 $search =$_POST['search'];
 	 $replace=$_POST['replace'];
	 $search_length =strlen($search);

if(!empty($text) && !empty($search) && !empty($replace)){
	
		while($strpos=strpos($text,$search,$offset)){

		$offset=$strpos+$search_length;

		$text=substr_replace($text,$replace,$strpos,$search_length);
		echo $text;

		}
}
else{
		echo 'Please Fill All The Fields.';
	}
}
}
?>