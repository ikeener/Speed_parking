<?php
$conn = mysqli_connect('localhost','root','1234','finalproject');
$descript = "SELECT lot_status,p_time FROM parking_lots where lot like '8F%' ";
$result = mysqli_query($conn, $descript);
?>
<?php
	while($row = mysqli_fetch_row($result)){
		 //echo 'status: '.$row[0];
		//echo '	Time: '.$row[1];
		 //echo '<br />';
		 if ($row[0] == 'idle'){
			$status_V[] = 'idle2.png';
		}
		else if($row[0] == 'reserve'){
			 $status_V[] = 'reserved2.png';
			}
		else if($row[0] == 'parked'){
			$status_V[] = 'parked2.png';
			 }
	}
?>
<script type="text/javascript">
	function play() { 
    var audio = document.getElementById('audio_play'); 
		if (audio.paused) { 
			audio.play(); 
		}else{ 
			audio.pause(); 
			audio.currentTime = 0 
		} 
	} 
	
</script>
<!DOCTYPE html>
<html>
      <head>
	       <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
		   <meta http-equiv="refresh" content="20">
            <title>지상 8층</title>

			<script>

				function select_func(){
					var select_btn = document.getElementsByClassName('checkform1');
					var select_value; // 여기에 선택된 radio 버튼의 값이 담기게 된다.
					for(var i=0; i<select_btn.length; i++) {
					    if(select_btn[i].checked) {
					        select_value = select_btn[i].value;
						}

					}
				}
			</script>


            <style>
			@import url("S-Core-Dream-light/s-core-dream.css"); 

				@media all and (max-width:1024px) and (max-height:768px){ 
				*{font-family: "s-core-dream-regular", sans-serif !important; } 
				
					html, body
	            	{
	            		overflow:hidden;
	            		width:99%; height:99%; 
	            	}
					h3
					{
						color:#233B4D;
						margin-top:30%; 
						margin-left:10%;
						margin-right:10%;
						padding-bottom:2%;
						border-bottom:1px solid #233B4D;
					}
					hr
					{
						border: none;
						color: #fff;
						background-color: #fff;
					}
	            	#sector
	            	{
	            		background-color:#C9DFF0;
	            		float : left;
						width : 15%;
	            		height: 100%;
						margin-top:0;
						margin-bottom:0;
	            	}
	            	#sector_sel
	            	{
						text-align:center;
	            	}
	            	.floor_sel
	            	{
	            		margin : 25%;
	            		text-decoration: none;
						color:#233B4D;
						font-weight:bold;
						font-size:large;
	            	}
					.floor_style
					{
						text-shadow: 3px 3px 3px #88B7C9;
						margin-top:13%;
						padding-top:2%;
						padding-bottom:2%;
						margin-left:32%;
						margin-right:32%;
					}
					.line
					{
						display:block;
						width:55px;
						height:3px;
						background-color:blue;
						float:left;
						border:0px dotted #88B7C9;
						margin-left:14%;
						margin-top:5px;
					}
					.text
					{
						border:0px solid green;
						display:inline;
						margin-left:0;
						font-size:11px;
						font-family: "s-core-dream-medium", sans-serif !important; 
					}
					.vl 
					{
						border-left: 1px solid #88B7C9;
						height: 700px;
					}
	            	#img 
	            	{
	            		float : left;
	            		background-image:url('8F1.jpg');
	            		background-repeat: no-repeat;
	            		width : 70%;
	            		height: 80%;
	            		margin-left : 5%;
	            		margin-top : 10%;
	           		}

	           	#check{
            		width : 35px;
            		height : 17px;
            		position : absolute;
            		top : 24.5%;
            		left : 29.8%;
            	}
				
				#check #check_A1{position : relative; top : 144px; left : 133px;}
				#check #check_A2{float: left; position : relative; top : 64px; left : 157.6px;}
				#check #check_A3{float: left; position : relative; top : -16px; left : 200px;}
				#check #check_A4{float: left; position : relative; top : -96px; left : 225px;}
				#check #check_A5{float: left; position : relative; top : -176.5px; left : 267px;}
				#check #check_A6{float: left; position : relative; top : -256.8px; left : 292px;}
				#check #check_A7{float: left; position : absolute; top : 125px; left : 352.5px;}
				#check #check_A8{float: left; position : relative; top : -355px; left : 87px;}



            	#check .checkform .horizon input[type="radio"] {display: none;}

				#check .checkform .horizon #F8F-A1-1 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[0]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A1-1:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right}
				#check .checkform .horizon #F8F-A1-2 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[1]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A1-2:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}
				#check .checkform .horizon #F8F-A1-3 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[2]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A1-3:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A1-4 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[3]?>');	
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A1-4:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A1-5 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[4]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A1-5:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A1-6 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[5]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A1-6:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A1-7 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[6]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A1-7:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A1-8 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[7]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A1-8:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A1-9 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[8]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A1-9:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A1-10 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[9]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A1-10:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A2-1 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[10]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A2-1:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A2-2 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[11]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A2-2:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A2-3 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[12]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A2-3:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A2-4 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[13]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A2-4:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A2-5 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[14]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A2-5:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A2-6 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[15]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A2-6:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A2-7 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[16]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A2-7:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A2-8 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[17]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A2-8:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A2-9 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[18]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A2-9:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A2-10 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[19]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A2-10:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A3-1 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[20]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A3-1:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A3-2 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[21]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A3-2:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A3-3 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[22]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A3-3:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A3-4 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[23]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A3-4:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A3-5 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[24]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A3-5:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A3-6 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[25]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A3-6:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A3-7 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[26]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A3-7:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A3-8 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[27]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A3-8:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A3-9 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[28]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A3-9:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A3-10 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[29]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A3-10:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A4-1 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[30]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A4-1:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A4-2 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[31]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A4-2:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A4-3 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[32]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A4-3:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A4-4 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[33]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A4-4:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A4-5 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[34]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A4-5:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A4-6 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[35]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A4-6:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A4-7 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[36]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A4-7:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A4-8 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[37]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A4-8:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A4-9 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[38]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A4-9:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A4-10 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[39]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A4-10:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A5-1 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[40]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A5-1:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A5-2+ label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[41]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A5-2:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A5-3 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[42]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A5-3:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A5-4 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[43]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A5-4:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A5-5 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[44]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A5-5:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A5-6 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[45]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A5-6:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A5-7 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[46]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-C5-7:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A5-8 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[47]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A5-8:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A5-9 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[48]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A5-9:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A5-10 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[49]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A5-10:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A6-1 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[50]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A6-1:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A6-2 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[51]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A6-2:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A6-3 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[52]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A6-3:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A6-4 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[53]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A6-4:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A6-5 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[54]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A6-5:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A6-6 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[55]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A6-6:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A6-7 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[56]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A6-7:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A6-8 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[57]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A6-8:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A6-9 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[58]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A6-9:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A6-10 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[59]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A6-10:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-1 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[60]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-1:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-2 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[61]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-2:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-3 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[62]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-3:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-4 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[63]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-4:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-5 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[64]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-5:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-6 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[65]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-6:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-7 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[66]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-7:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-8 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[67]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-8:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-9 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[68]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-9:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-10 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[69]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-10:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-11 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[70]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-11:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A7-12 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[71]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A7-12:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A8-1 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[72]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A8-1:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
				#check .checkform .horizon #F8F-A8-2 + label {
					display: inline-block; width:20px; height: 8px;
					background:url('<?php echo $status_V[73]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #F8F-A8-2:checked + label{background:url(reserved2.png) no-repeat center/35px 17px; float: right	}	
	
	           		#reserve
	           		{
	           			height:10%; 
	           			position : absolute;
	           			left : 520px;
	           			top : -70px;
	           		}
	           		#reserve_but
	           		{
	           			width: 117px;
	           			height: 78px;
						background-color:#EAF2F1;
						border: 5px double #88B7C9;
						color:#233B4D;
						border-radius:15px;
						font-size:17px;
						font-family: "s-core-dream-bold", sans-serif !important;
	           		}
					#reserve_but:hover
					{
						background-color:#C9DFF0;
					}
					#parking_location
					{
						font-family: "s-core-dream-medium", sans-serif !important; 
						font-size:15px;
						position:absolute; 
						top:566px; 
						left:165px;
						color: #233B4D; 
					}
					#parking_location #barcode_123{
						position: absolute; top:0px; left:400px;
						width : 500px;
					}
					#parking_location #barcode_123 #barcode_1234{
						position: relative; top:0px; left:141px;
					}
					#btn_group input
					{ 
						margin-top:5px;
						border: 1px solid #88B7C9; 
						background-color: rgba(0,0,0,0); 
						color: #88B7C9; 
						padding: 5px;
						font-family: "s-core-dream-medium", sans-serif !important; 
						font-size:12px;
					}
					#btn_group input:hover
					{ 
						color:#233B4D; 
						background-color: #C9DFF0; 
					}
            </style>


      </head>
      <body>
	  <audio id='audio_play' src='./비프음.MP3'></audio> 
	  <hr style="margin:0; border-bottom: 1px solid #4D669E;"></hr>
      	<div id="sector">
		
		<div class="vl" style="float:right;"></div>
      		<div id="sector_sel">
	      	<div>
	      		<h3>지하 주차장 <br></h3>
				<div class="floor_style">
	      		<a class="floor_sel" href="B2F.php">B2F</a></div>
				<div class="floor_style">
	      		<a class="floor_sel" href="B3F.html">B3F</a></div>
				<div class="floor_style">
	      		<a class="floor_sel" href="B4F.html">B4F</a></div>
      		</div>
      		<br><br>
      		<div>
      			<h3 style="margin-top:0%">지상 주차장<br></h3>
				<div class="floor_style">
	      		<a class="floor_sel" href="5F.html">5F</a></div>
				<div class="floor_style">
	      		<a class="floor_sel" href="6F.html">6F</a></div>
				<div class="floor_style">
	      		<a class="floor_sel" href="7F.html">7F</a></div>
				<div class="floor_style">
				<a class="floor_sel" href="8F.php">8F</a></div>
			</div>
			<hr width="80%;" style="margin-top:20%;border-top:1px solid #233B4D;"></hr>
			<div style="margin-top:15%;">
				<div class="line" style="background-color:#9adc22; border:1px dotted #9adc22;"></div>
				<p class="text">대기</p>
			</div>
			<div style="margin-top:7%;">
				<div class="line" style="background-color:#00A2E8; border:1px dotted #00A2E8;"></div>
				<p class="text">예약</p>
			</div>
			<div style="margin-top:7%;">
				<div class="line" style="background-color:red; border:1px dotted red;"></div>
				<p class="text">주차</p>
			</div>
			</div>
			
        </div>
        <div id="parking_location">
			<form name="park_situation" action="8F_parking_situation.php" method="post">
			주차할 위치 : <input style="border:1px dashed #233B4D" type="text" id= "ppla" name="location" size="12" autocomplete="off"><br/>
				<center>
				<div id="btn_group">
				<input type="submit" value="확인" 
					style="margin-right:-3px;border-top-left-radius: 5px; border-bottom-left-radius: 5px;"/>
				<input type="reset" value="취소" 
					style="margin-left:-3px;border-top-right-radius: 5px; border-bottom-right-radius: 5px;"/>
				</div>
				</center>
			</form>
			<div id="barcode_123">
			<form action="barcodesave_8F.php" method="post">
				<div id="barcode_1234" >
					바코드 인식내용 : <input style="border:1px dashed #233B4D" type="text" name="barcodenote" size="12" autocomplete="off"><br/>
				</div>
				<center>
				<div id="btn_group">
				<input type="submit" value="확인" 
					style="margin-right:-3px;border-top-left-radius: 5px; border-bottom-left-radius: 5px;"/>
				<input type="reset" value="취소" 
					style="margin-left:-3px;border-top-right-radius: 5px; border-bottom-right-radius: 5px;"/>
				</div>
				</center>
			</div>
			</form>
			</div>			
			</div>
			</div>
			<div id="status" style="border:0px solid red;"></div>
		</div>	
        <div id="img" style="border:0px solid red;">
        </div>



<div id=check>
	<form class="checkform" method="POST" action="8F_reserve.php" >
		<div class="horizon" id="check_A1">
			<input type="radio" class="checkform1"id="F8F-A1-1"value="8F-A1-1"name="8F"/><label for="F8F-A1-1"></label>
			<input type="radio" class="checkform1"id="F8F-A1-2"value="8F-A1-2"name="8F"/><label for="F8F-A1-2"></label>
			<input type="radio" class="checkform1"id="F8F-A1-3"value="8F-A1-3"name="8F"/><label for="F8F-A1-3"></label>
			<input type="radio" class="checkform1"id="F8F-A1-4"value="8F-A1-4"name="8F"/><label for="F8F-A1-4"></label>
			<input type="radio" class="checkform1"id="F8F-A1-5"value="8F-A1-5"name="8F"/><label for="F8F-A1-5"></label>
			<input type="radio" class="checkform1"id="F8F-A1-6"value="8F-A1-6"name="8F"/><label for="F8F-A1-6"></label>
			<input type="radio" class="checkform1"id="F8F-A1-7"value="8F-A1-7"name="8F"/><label for="F8F-A1-7"></label>
			<input type="radio" class="checkform1"id="F8F-A1-8"value="8F-A1-8"name="8F"/><label for="F8F-A1-8"></label>
			<input type="radio" class="checkform1"id="F8F-A1-9"value="8F-A1-9"name="8F"/><label for="F8F-A1-9"></label>			
			<input type="radio" class="checkform1"id="F8F-A1-10"value="8F-A1-A10"name="8F"/><label for="F8F-A1-10"></label>
		</div>
		<div class="horizon" id="check_A2">
			<input type="radio" class="checkform1"id="F8F-A2-1"value="8F-A2-1"name="8F"/><label for="F8F-A2-1"></label>
			<input type="radio" class="checkform1"id="F8F-A2-2"value="8F-A2-2"name="8F"/><label for="F8F-A2-2"></label>
			<input type="radio" class="checkform1"id="F8F-A2-3"value="8F-A2-3"name="8F"/><label for="F8F-A2-3"></label>
			<input type="radio" class="checkform1"id="F8F-A2-4"value="8F-A2-4"name="8F"/><label for="F8F-A2-4"></label>
			<input type="radio" class="checkform1"id="F8F-A2-5"value="8F-A2-5"name="8F"/><label for="F8F-A2-5"></label>
			<input type="radio" class="checkform1"id="F8F-A2-6"value="8F-A2-6"name="8F"/><label for="F8F-A2-6"></label>
			<input type="radio" class="checkform1"id="F8F-A2-7"value="8F-A2-7"name="8F"/><label for="F8F-A2-7"></label>
			<input type="radio" class="checkform1"id="F8F-A2-8"value="8F-A2-8"name="8F"/><label for="F8F-A2-8"></label>
			<input type="radio" class="checkform1"id="F8F-A2-9"value="8F-A2-9"name="8F"/><label for="F8F-A2-9"></label>			
			<input type="radio" class="checkform1"id="F8F-A2-10"value="8F-A2-A10"name="8F"/><label for="F8F-A2-10"></label>
		</div>
		<div class="horizon" id="check_A3">
			<input type="radio" class="checkform1"id="F8F-A3-1"value="8F-A3-1"name="8F"/><label for="F8F-A3-1"></label>
			<input type="radio" class="checkform1"id="F8F-A3-2"value="8F-A3-2"name="8F"/><label for="F8F-A3-2"></label>
			<input type="radio" class="checkform1"id="F8F-A3-3"value="8F-A3-3"name="8F"/><label for="F8F-A3-3"></label>
			<input type="radio" class="checkform1"id="F8F-A3-4"value="8F-A3-4"name="8F"/><label for="F8F-A3-4"></label>
			<input type="radio" class="checkform1"id="F8F-A3-5"value="8F-A3-5"name="8F"/><label for="F8F-A3-5"></label>
			<input type="radio" class="checkform1"id="F8F-A3-6"value="8F-A3-6"name="8F"/><label for="F8F-A3-6"></label>
			<input type="radio" class="checkform1"id="F8F-A3-7"value="8F-A3-7"name="8F"/><label for="F8F-A3-7"></label>
			<input type="radio" class="checkform1"id="F8F-A3-8"value="8F-A3-8"name="8F"/><label for="F8F-A3-8"></label>
			<input type="radio" class="checkform1"id="F8F-A3-9"value="8F-A3-9"name="8F"/><label for="F8F-A3-9"></label>			
			<input type="radio" class="checkform1"id="F8F-A3-10"value="8F-A3-A10"name="8F"/><label for="F8F-A3-10"></label>
		</div>
		<div class="horizon" id="check_A4">
			<input type="radio" class="checkform1"id="F8F-A4-1"value="8F-A4-1"name="8F"/><label for="F8F-A4-1"></label>
			<input type="radio" class="checkform1"id="F8F-A4-2"value="8F-A4-2"name="8F"/><label for="F8F-A4-2"></label>
			<input type="radio" class="checkform1"id="F8F-A4-3"value="8F-A4-3"name="8F"/><label for="F8F-A4-3"></label>
			<input type="radio" class="checkform1"id="F8F-A4-4"value="8F-A4-4"name="8F"/><label for="F8F-A4-4"></label>
			<input type="radio" class="checkform1"id="F8F-A4-5"value="8F-A4-5"name="8F"/><label for="F8F-A4-5"></label>
			<input type="radio" class="checkform1"id="F8F-A4-6"value="8F-A4-6"name="8F"/><label for="F8F-A4-6"></label>
			<input type="radio" class="checkform1"id="F8F-A4-7"value="8F-A4-7"name="8F"/><label for="F8F-A4-7"></label>
			<input type="radio" class="checkform1"id="F8F-A4-8"value="8F-A4-8"name="8F"/><label for="F8F-A4-8"></label>
			<input type="radio" class="checkform1"id="F8F-A4-9"value="8F-A4-9"name="8F"/><label for="F8F-A4-9"></label>			
			<input type="radio" class="checkform1"id="F8F-A4-10"value="8F-A4-A10"name="8F"/><label for="F8F-A4-10"></label>
		</div>
		<div class="horizon" id="check_A5" style="">
			<input type="radio" class="checkform1"id="F8F-A5-1"value="8F-A5-1"name="8F"/><label for="F8F-A5-1"></label>
			<input type="radio" class="checkform1"id="F8F-A5-2"value="8F-A5-2"name="8F"/><label for="F8F-A5-2"></label>
			<input type="radio" class="checkform1"id="F8F-A5-3"value="8F-A5-3"name="8F"/><label for="F8F-A5-3"></label>
			<input type="radio" class="checkform1"id="F8F-A5-4"value="8F-A5-4"name="8F"/><label for="F8F-A5-4"></label>
			<input type="radio" class="checkform1"id="F8F-A5-5"value="8F-A5-5"name="8F"/><label for="F8F-A5-5"></label>
			<input type="radio" class="checkform1"id="F8F-A5-6"value="8F-A5-6"name="8F"/><label for="F8F-A5-6"></label>
			<input type="radio" class="checkform1"id="F8F-A5-7"value="8F-A5-7"name="8F"/><label for="F8F-A5-7"></label>
			<input type="radio" class="checkform1"id="F8F-A5-8"value="8F-A5-8"name="8F"/><label for="F8F-A5-8"></label>
			<input type="radio" class="checkform1"id="F8F-A5-9"value="8F-A5-9"name="8F"/><label for="F8F-A5-9"></label>			
			<input type="radio" class="checkform1"id="F8F-A5-10"value="8F-A5-A10"name="8F"/><label for="F8F-A5-10"></label>
		</div>
		<div class="horizon" id="check_A6">
			<input type="radio" class="checkform1"id="F8F-A6-1"value="8F-A6-1"name="8F"/><label for="F8F-A6-1"></label>
			<input type="radio" class="checkform1"id="F8F-A6-2"value="8F-A6-2"name="8F"/><label for="F8F-A6-2"></label>
			<input type="radio" class="checkform1"id="F8F-A6-3"value="8F-A6-3"name="8F"/><label for="F8F-A6-3"></label>
			<input type="radio" class="checkform1"id="F8F-A6-4"value="8F-A6-4"name="8F"/><label for="F8F-A6-4"></label>
			<input type="radio" class="checkform1"id="F8F-A6-5"value="8F-A6-5"name="8F"/><label for="F8F-A6-5"></label>
			<input type="radio" class="checkform1"id="F8F-A6-6"value="8F-A6-6"name="8F"/><label for="F8F-A6-6"></label>
			<input type="radio" class="checkform1"id="F8F-A6-7"value="8F-A6-7"name="8F"/><label for="F8F-A6-7"></label>
			<input type="radio" class="checkform1"id="F8F-A6-8"value="8F-A6-8"name="8F"/><label for="F8F-A6-8"></label>
			<input type="radio" class="checkform1"id="F8F-A6-9"value="8F-A6-9"name="8F"/><label for="F8F-A6-9"></label>			
			<input type="radio" class="checkform1"id="F8F-A6-10"value="8F-A6-A10"name="8F"/><label for="F8F-A6-10"></label>
		</div>
		<div class="horizon" id="check_A7">
			<input type="radio" class="checkform1"id="F8F-A7-1"value="8F-A7-1"name="8F"/><label for="F8F-A7-1"></label>
			<input type="radio" class="checkform1"id="F8F-A7-2"value="8F-A7-2"name="8F"/><label for="F8F-A7-2"></label>
			<input type="radio" class="checkform1"id="F8F-A7-3"value="8F-A7-3"name="8F"/><label for="F8F-A7-3"></label>
			<input type="radio" class="checkform1"id="F8F-A7-4"value="8F-A7-4"name="8F"/><label for="F8F-A7-4"></label>
			<input type="radio" class="checkform1"id="F8F-A7-5"value="8F-A7-5"name="8F"/><label for="F8F-A7-5"></label>
			<input type="radio" class="checkform1"id="F8F-A7-6"value="8F-A7-6"name="8F"/><label for="F8F-A7-6"></label>
			<input type="radio" class="checkform1"id="F8F-A7-7"value="8F-A7-7"name="8F"/><label for="F8F-A7-7"></label>
			<input type="radio" class="checkform1"id="F8F-A7-8"value="8F-A7-8"name="8F"/><label for="F8F-A7-8"></label>
			<input type="radio" class="checkform1"id="F8F-A7-9"value="8F-A7-9"name="8F"/><label for="F8F-A7-9"></label>			
			<input type="radio" class="checkform1"id="F8F-A7-10"value="8F-A7-A10"name="8F"/><label for="F8F-A7-10"></label>
			<input type="radio" class="checkform1"id="F8F-A7-11"value="8F-A7-A11"name="8F"/><label for="F8F-A7-11"></label>
			<input type="radio" class="checkform1"id="F8F-A7-12"value="8F-A7-A12"name="8F"/><label for="F8F-A7-12"></label>
		</div>
		<div class="horizon" id="check_A8" style="vertical-align:middle; float:left;"/>
			<input type="radio" class="checkform1"id="F8F-A8-1"value="8F-A8-1" name="8F"/><label for="8F-A8-1"></label>
			<input type="radio" class="checkform1"id="F8F-A8-2"value="8F-A8-2"name="8F"/><label for="8F-A8-2"></label>
		</div>
		
			<div id="reserve" style="border:0px solid red;">
				<input id="reserve_but" type="submit" value="예약" onClick="select_func();">
			</div>
       
		
	</form>
</div>
		<hr style="clear:both; border-top: 1px solid #4D669E;"></hr>

</body>
</html>
<?php
  $select_query="SELECT lot,lot_status,p_time FROM parking_lots where lot like '8F%' ";
  $result_set=mysqli_query($conn, $select_query);
  $row=mysqli_fetch_row($result_set);
  $loc=$row[0];
  
  if($row[1]=='reserve'){
	  $dt2 = date("Y-m-d h:i:s",strtotime ("+1 minutes", strtotime($row[2])));
		 if(date("Y-m-d h:i:s") >= $dt2){
			 $query1="UPDATE parking_lots SET lot_status='idle', p_time=NULL WHERE lot='$loc'";
			 mysqli_query($conn, $query1);
		 }
  }
  
  while ($row = mysqli_fetch_row($result_set)){
	$loc=$row[0];
	 if($row[1]=='reserve'){
		 $dt2 = date("Y-m-d h:i:s",strtotime ("+1 minutes", strtotime($row[2])));
		 if(date("Y-m-d h:i:s") >= $dt2){
			 $query1="UPDATE parking_lots SET lot_status='idle', p_time=NULL WHERE lot='$loc'";
			 mysqli_query($conn, $query1);
		 }
	 }
   }
   
   $select_query2="SELECT num, location, t FROM pl";
   $result2=mysqli_query($conn, $select_query2);
   $getDT=mysqli_fetch_row($result2);
   $getdistance=$getDT[2];
   
   $select_query2="SELECT num, location, t FROM pl";
   $result2=mysqli_query($conn, $select_query2);
   $getDT=mysqli_fetch_row($result2);
   $parking=$getDT[1];
   
   $select_query2="SELECT barcodenum FROM barcodenote";
	$result2=mysqli_query($conn,$select_query2);
	$barcode1=mysqli_fetch_row($result2);
	$barcode2=$barcode1[0];
   
   if($getdistance<=10){
		$lines = $barcode2;
	   if ($lines != null){
		   if($lines==$parking){
			   //소리 OFF
			$query1="UPDATE parking_lots SET lot_status='parked' WHERE lot='$getDT[1]'";
			mysqli_query($conn, $query1);//DB내용을 parked로 바꿔야함 -> 자동으로 빨강색
		    $query2="UPDATE parking_lots SET distance='$getdistance' WHERE lot='$getDT[1]'";
			mysqli_query($conn, $query2);//DB의 distance를 변경		
		   }
		   else{
			   //소리 ON , 바코드가 올바르지 않음
			   echo ("<script language=javascript>play();</script>");
		   }
	   }
		else{
			//소리 ON , 바코드를 찍지 않았음
			echo ("<script language=javascript>play();</script>");
		}
   }//->차가 있는 상태에서도 소리가 꺼지도록 하기 위해
	else{
		$result_set=mysqli_query($conn, $select_query);
		$row=mysqli_fetch_row($result_set);
		$loc=$row[0];
		$status="";
		if($loc==$getDT[1]){
			$status=$row[1];
			if($status=='parked'){
				$query1="UPDATE parking_lots SET lot_Status='idle', p_time=NULL, distance='$getdistance' WHERE lot='$getDT[1]'";
				mysqli_query($conn, $query1);
			}
		}
		while($row=mysqli_fetch_row($result_set)){
			$loc=$row[0];
			if($loc==$getDT[1]){
				$status=$row[1];
				if($status=='parked'){
					$query1="UPDATE parking_lots SET lot_Status='idle', p_time=NULL, distance='$getdistance' WHERE lot='$getDT[1]'";
				mysqli_query($conn, $query1);
				}
			}
		}//->빨간색으로 변했다가 거리가 멀어지면 초록색으로 원상복구 되어야함(주차된 차량 나감)
	}
	mysqli_close($conn);
   ?>