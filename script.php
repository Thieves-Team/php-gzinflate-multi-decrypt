<?php 

$tt = "<head><title>gzinflate Multi Tools Decrypt</title></head>
    	<center>
    		<a href='http://cristalwords.ro/tools/gzinflate_str_rot13_base64.php' target='_blank'>
    			<img src='http://cristalwords.ro/tools/gzinflate.png'></img>
    		</a><br>" . ex() . "
      	</center>
     <body text=#FFA04b bgcolor=#111111 vlink=#62b1ae link=#FFA04b clink=white>
     	<center>
	    	<form method=post>
	        	<input type=submit name='gzinflate' value='gzinflate' style = 'color:red;  background-color: #121011;'>
	        	<input type=submit name='gzinflate_rot13' value='gzinflate_rot13' style = 'color:red;  background-color: #121011;'>
	        </form>
	    </center>"; 

$tt .= meniu();

print $tt;


/********************************************************************************************/

function ex(){

	if (isset($_POST['gzinflate'])) {

		return "eval(gzinflate(base64_decode('<font color=red>dGhpZXZlcy10ZWFt</font>')));
				<br>Just <font color=red>dGhpZXZlcy10ZWFt</font>";

	} elseif (isset($_POST['gzinflate_rot13'])) {

		return "eval(gzinflate(str_rot13(base64_decode('<font color=red>dGhpZXZlcy10ZWFt</font>'))));
				<br>Just <font color=red>dGhpZXZlcy10ZWFt</font>";

	} else {

		return "<a href='http://thieves-team.com/forum/index.php?action=profile;u=230' target='_blank'>Crisalixx@thieves-team.com</a>
					<br><a href='http://thieves-team.com' target='_blank'>When one code is not enough,the expresion of one system is next!</a>";
	}
}
function meniu() {

	$tt = '';
	$var = htmlentities($_POST['DecryptText']);
	if (isset($_POST['gzinflate']) && !empty($_POST['gzinflate'])) {
			$tt .= '<form method="post" action=?gzinflate>
				 	<center>
				 		<textarea rows="20" cols="100" name="DecryptText" STYLE="color:#3cbddd; background-color: #242528;">'
				 			.Deco_gzdeflate_encrypt($var).
						'</textarea><br>
			        	<input type="submit"  value="Decrypt" name="gzinflate" STYLE="color:red;  background-color: #121011;">
			        </center>
		         </form>';	

	} elseif(isset($_POST['gzinflate_rot13']) && !empty($_POST['gzinflate_rot13'])) {

			$tt .= '<form method="post" action=?gzinflate_rot13>
			        	<center>
			        		<textarea rows="20" cols="100" name="DecryptText" STYLE="color:#3cbddd; background-color: #242528;">'
			        			.Deco_gzdeflate_rot13_base64_encode($var).
							'</textarea><br>
			        		<input type="submit"  value="Decrypt" name="gzinflate_rot13" STYLE="color:red;  background-color: #121011;">
			        	</center>
		          </form>';
	
	}
	return $tt;
}

function Deco_gzdeflate_encrypt($data) {
	
	$decrypt = gzinflate(base64_decode($data));
	$Fdecrypt = str_replace(array("<",">"),array("&lt;","&gt;"),$decrypt);
	return $Fdecrypt;
}
function Deco_gzdeflate_rot13_base64_encode($data) {

	$decrypt = gzinflate(str_rot13(base64_decode($data)));
	$Fdecrypt = str_replace(array("<",">"),array("&lt;","&gt;"),$decrypt);
	return $Fdecrypt;
	
}

/***********************************************************************************************************************/
?>
