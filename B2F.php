<?php
$conn = mysqli_connect('localhost','root','1234', 'finalproject');
$descript = "SELECT lot_status,p_time FROM parking_lots where lot like 'B2F%' ";
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
		   <meta http-equiv="refresh" content="5">
            <title>지하 2층</title>

			<script>
				var select_func = function(){
					var select_btn = document.getElementsByClassName('checkform1');
					var select_value; // 여기에 선택된 radio 버튼의 값이 담기게 된다.
					for(var i=0; i<select_btn.length; i++) {
					    if(select_btn[i].checked) {
					        select_value = select_btn[i].value;
					        //alert(select_value);
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
	            		overflow: hidden;
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
	            		background-image:url('B2F1024.jpg');
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

            	#check #check_A1{position : relative; top : 85px; left : 5px; }
            	#check #check_A2{position : relative; top : 89.8px; left : 5px;}
            	#check #check_A3{position : relative; top : 94.6px; left : 5px;}
            	#check #check_A4{position : relative; top : 99.4px; left : 5px;}
            	#check #check_A5{position : relative; top : 104.2px; left : 5px;}

            	#check #check_B1{position : relative; top : -34.5px; left : 52px;}
            	#check #check_B2{position : relative; top : -29.7px; left : 52px;}
            	#check #check_B3{position : relative; top : -24.9px; left : 52px;}
            	#check #check_B4{position : relative; top : -20.1px; left : 52px;}
            	#check #check_B5{position : relative; top : -15.3px; left : 52px;}

				#check #check_C1{position : relative; top : -163px; left : 79px;}
				#check #check_C2{position : relative; top : -158.2px; left : 79px;}
				#check #check_C3{position : relative; top : -153.4px; left : 79px;}
				#check #check_C4{position : relative; top : -148.6px; left : 79px;}
				#check #check_C5{position : relative; top : -143.8px; left : 79px;}

				#check #check_D1{position : relative; top : -290.5px; left : 133Px;}
				#check #check_D2{position : relative; top : -286px; left : 133Px;}
				#check #check_D3{position : relative; top : -279.25px; left : 133Px;}
				#check #check_D4{position : relative; top : -269px; left : 133Px;}
				#check #check_D5{position : relative; top : -264.5px; left : 133Px;}

				#check #check_E1{position : relative; top : -410.5px; left : 154px;}
				#check #check_E2{position : relative; top : -406px; left : 154px;}
				#check #check_E3{position : relative; top : -399.25px; left : 154px;}
				#check #check_E4{position : relative; top : -389px; left : 154px;}
				#check #check_E5{position : relative; top : -384.5px; left : 154px;}

				#check #check_F1{position : relative; top : -531px; left : 203px;}
				#check #check_F2{position : relative; top : -526.5px; left : 203px;}
				#check #check_F3{position : relative; top : -519.75px; left : 203px;}
				#check #check_F4{position : relative; top : -509.5px; left : 203px;}
				#check #check_F5{position : relative; top : -505px; left : 203px;}
				#check #check_F6{position : relative; top : -499px; left : 203px;}

				#check #check_G1{position : relative; top : -683px; left : 224px;}
				#check #check_G2{position : relative; top : -678.5px; left : 224px;}
				#check #check_G3{position : relative; top : -671.75px; left : 224px;}
				#check #check_G4{position : relative; top : -661.5px; left : 224px;}
				#check #check_G5{position : relative; top : -657px; left : 224px;}
				#check #check_G6{position : relative; top : -651px; left : 224px;}



				#check .checkform .vertical input[type="radio"] {display: none;}

				#check .checkform .vertical input[type="radio"] + label 
				{
					display: inline-block; width:8px; height: 22px; 
					background:url('idle.png');
					cursor: pointer; border-radius: 3px;float: right;
				}
				
				#check.checkform .vertical:after {display:block; clear:both; content:"";}
				

				#check .checkform .vertical input[type="radio"]:checked + label 
				{
				background:url(reserved.png) no-repeat center/8px 22px; float: right
				}

            	#check .checkform .horizon input[type="radio"] {display: none;}

				
				#check .checkform .horizon #B2F-A1-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[0]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A1-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-A1-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[1]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A1-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-A1-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[2]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A1-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A2-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[3]?>');	
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A2-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A2-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[4]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A2-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A2-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[5]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A2-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A3-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[6]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A3-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A3-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[7]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A3-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A3-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[8]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A3-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A4-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[9]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A4-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A4-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[10]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A4-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A4-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[11]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A4-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A5-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[12]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A5-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A5-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[13]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A5-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-A5-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[14]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A5-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B1-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[15]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-A2-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B1-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[16]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B1-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B1-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[17]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B1-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B2-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[18]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B2-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B2-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[19]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B2-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B2-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[20]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B2-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B3-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[21]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B3-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B3-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[22]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B3-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B3-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[23]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B3-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B4-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[24]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B4-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B4-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[25]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B4-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B4-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[26]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B4-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B5-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[27]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B5-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B5-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[28]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B5-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B5-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[29]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B5-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-B5-4 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[30]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-B5-4:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C1-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[31]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C1-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C1-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[32]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C1-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C1-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[33]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C1-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C2-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[34]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C2-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C2-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[35]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C2-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C2-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[36]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C2-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C3-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[37]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C3-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C3-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[38]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C3-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C3-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[39]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C3-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C4-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[40]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C4-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C4-2+ label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[41]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C4-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C4-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[42]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C4-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C5-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[43]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C5-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C5-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[44]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C5-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C5-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[45]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C5-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-C5-4 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[46]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-C5-4:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D1-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[47]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D1-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D1-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[48]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D1-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D1-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[49]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D1-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D2-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[50]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D2-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D2-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[51]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D2-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D2-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[52]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D2-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D3-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[53]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D3-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D3-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[54]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D3-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D4-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[55]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D4-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D4-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[56]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D4-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D4-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[57]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D4-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D5-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[58]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D5-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D5-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[59]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D5-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D5-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[60]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D5-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-D5-4 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[61]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-D5-4:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E1-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[62]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E1-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E1-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[63]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E1-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E1-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[64]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E1-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E2-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[65]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E2-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E2-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[66]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E2-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E2-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[67]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E2-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E3-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[68]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E3-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E3-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[69]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E3-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E4-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[70]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E4-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E4-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[71]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E4-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E4-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[72]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E4-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E5-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[73]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E5-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E5-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[74]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E5-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E5-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[75]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E5-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-E5-4 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[76]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-E5-4:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}	
				#check .checkform .horizon #B2F-F1-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[77]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F1-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F1-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[78]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F1-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F1-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[79]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F1-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F2-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[80]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F2-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F2-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[81]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F2-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F2-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[82]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F2-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F3-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[83]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F3-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F3-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[84]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F3-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F4-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[85]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F4-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F4-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[86]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F4-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F4-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[87]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F4-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F5-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[88]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F5-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F5-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[89]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F5-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F5-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[90]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F5-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F5-4 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[91]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F5-4:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F6-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[92]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F6-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F6-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[93]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F6-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F6-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[94]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F6-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-F6-4 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[95]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-F6-4:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G1-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[96]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G1-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G1-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[97]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G1-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G1-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[98]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G1-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G2-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[99]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G2-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G2-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[100]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G2-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G2-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[101]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G2-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G3-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[102]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G3-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G3-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[103]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G3-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G4-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[104]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G4-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G4-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[105]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G4-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G4-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[106]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G4-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G5-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[107]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G5-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G5-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[108]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G5-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G5-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[109]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G5-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G5-4 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[110]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G5-4:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G6-1 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[111]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G6-1:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G6-2 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[112]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G6-2:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G6-3 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[113]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G6-3:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}
				#check .checkform .horizon #B2F-G6-4 + label {
					display: inline-block; width:22px; height: 8px;
					background:url('<?php echo $status_V[114]?>');
					cursor: pointer; border-radius: 3px;float: right;
					}
				#check .checkform .horizon #B2F-G6-4:checked + label{background:url(reserved2.png) no-repeat center/22px 8px; float: right	}


	           		#select
	           		{
	           			float : right; 
	           			width : 10%;
	            		height: 100%;
	           		}

	           		#status
	           		{

	           			background-image:url('status_line1024.png');
	           			background-repeat: no-repeat;
	           			height:90%; 
	           			position : relative;
	           			left : 10%;
	           			top : 30%;
	           		}
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
      	<div id="sector" style="border:0px solid red;">
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
			
			<div id="parking_location">
			<form action="B2F_parking_situation.php" method="post">
			주차할 위치 : <input style="border:1px dashed #233B4D" type="text" name="location" size="12" autocomplete="off"><br/>
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
			<form action="barcodesave_B2F.php" method="post">
			바코드 인식내용 : <input style="border:1px dashed #233B4D" type="text" name="barcodenote" size="12" autocomplete="off"><br/>
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
	<form class="checkform" method="POST" action="B2F_reserve.php" >
	
		<div class = "horizon" id="check_A1">
			<input type="radio" class="checkform1"id="B2F-A1-1"value="B2F-A1-1"name="B2F"/><label for="B2F-A1-1"></label>
			<input type="radio" class="checkform1"id="B2F-A1-2"value="B2F-A1-2"name="B2F"/><label for="B2F-A1-2"></label>
			<input type="radio" class="checkform1"id="B2F-A1-3"value="B2F-A1-3"name="B2F"/><label for="B2F-A1-3"></label>
		</div>

		<div class = "horizon" id="check_A2">
			<input type="radio" class="checkform1"id="B2F-A2-1"value="B2F-A2-1"name="B2F"/><label for="B2F-A2-1"></label>
			<input type="radio" class="checkform1"id="B2F-A2-2"value="B2F-A2-2"name="B2F"/><label for="B2F-A2-2"></label>
			<input type="radio" class="checkform1"id="B2F-A2-3"value="B2F-A2-3"name="B2F"/><label for="B2F-A2-3"></label>
		</div>

		<div class = "horizon" id="check_A3">
			<input type="radio" class="checkform1"id="B2F-A3-1"value="B2F-A3-1"name="B2F"/><label for="B2F-A3-1"></label>
			<input type="radio" class="checkform1"id="B2F-A3-2"value="B2F-A3-2"name="B2F"/><label for="B2F-A3-2"></label>
			<input type="radio" class="checkform1"id="B2F-A3-3"value="B2F-A3-3"name="B2F"/><label for="B2F-A3-3"></label>
		</div>

		<div class = "horizon" id="check_A4">
			<input type="radio" class="checkform1"id="B2F-A4-1"value="B2F-A4-1"name="B2F"/><label for="B2F-A4-1"></label>
			<input type="radio" class="checkform1"id="B2F-A4-2"value="B2F-A4-2"name="B2F"/><label for="B2F-A4-2"></label>
			<input type="radio" class="checkform1"id="B2F-A4-3"value="B2F-A4-3"name="B2F"/><label for="B2F-A4-3"></label>
		</div>
		<div class = "horizon" id="check_A5">
			<input type="radio" class="checkform1"id="B2F-A5-1"value="B2F-A5-1"name="B2F"/><label for="B2F-A5-1"></label>
			<input type="radio" class="checkform1"id="B2F-A5-2"value="B2F-A5-2"name="B2F"/><label for="B2F-A5-2"></label>
			<input type="radio" class="checkform1"id="B2F-A5-3"value="B2F-A5-3"name="B2F"/><label for="B2F-A5-3"></label>
		</div>

		<div class = "horizon" id="check_B1">
			<input type="radio" class="checkform1"id="B2F-B1-1"value="B2F-B1-1"name="B2F"/><label for="B2F-B1-1"></label>
			<input type="radio" class="checkform1"id="B2F-B1-2"value="B2F-B1-2"name="B2F"/><label for="B2F-B1-2"></label>
			<input type="radio" class="checkform1"id="B2F-B1-3"value="B2F-B1-3"name="B2F"/><label for="B2F-B1-3"></label>
		</div>
		<div class = "horizon" id="check_B2">
			<input type="radio" class="checkform1"id="B2F-B2-1"value="B2F-B2-1"name="B2F"/><label for="B2F-B2-1"></label>
			<input type="radio" class="checkform1"id="B2F-B2-2"value="B2F-B2-2"name="B2F"/><label for="B2F-B2-2"></label>
			<input type="radio" class="checkform1"id="B2F-B2-3"value="B2F-B2-3"name="B2F"/><label for="B2F-B2-3"></label>
		</div>
		<div class = "horizon" id="check_B3">
			<input type="radio" class="checkform1"id="B2F-B3-1"value="B2F-B3-1"name="B2F"/><label for="B2F-B3-1"></label>
			<input type="radio" class="checkform1"id="B2F-B3-2"value="B2F-B3-2"name="B2F"/><label for="B2F-B3-2"></label>
			<input type="radio" class="checkform1"id="B2F-B3-3"value="B2F-B3-3"name="B2F"/><label for="B2F-B3-3"></label>
		</div>
		<div class = "horizon" id="check_B4">
			<input type="radio" class="checkform1"id="B2F-B4-1"value="B2F-B4-1"name="B2F"/><label for="B2F-B4-1"></label>
			<input type="radio" class="checkform1"id="B2F-B4-2"value="B2F-B4-2"name="B2F"/><label for="B2F-B4-2"></label>
			<input type="radio" class="checkform1"id="B2F-B4-3"value="B2F-B4-3"name="B2F"/><label for="B2F-B4-3"></label>
		</div>
		<div class = "horizon" id="check_B5">
			<input type="radio" class="checkform1"id="B2F-B5-1"value="B2F-B5-1"name="B2F"/><label for="B2F-B5-1"></label>
			<input type="radio" class="checkform1"id="B2F-B5-2"value="B2F-B5-2"name="B2F"/><label for="B2F-B5-2"></label>
			<input type="radio" class="checkform1"id="B2F-B5-3"value="B2F-B5-3"name="B2F"/><label for="B2F-B5-2"></label>
			<input type="radio" class="checkform1"id="B2F-B5-4"value="B2F-B5-4"name="B2F"/><label for="B2F-B5-2"></label>
		</div>


		<div class = "horizon" id="check_C1">
			<input type="radio" class="checkform1"id="B2F-C1-1"value="B2F-C1-1"name="B2F"/><label for="B2F-C1-1"></label>
			<input type="radio" class="checkform1"id="B2F-C1-2"value="B2F-C1-2"name="B2F"/><label for="B2F-C1-2"></label>
			<input type="radio" class="checkform1"id="B2F-C1-3"value="B2F-C1-3"name="B2F"/><label for="B2F-C1-3"></label>
		</div>
		<div class = "horizon" id="check_C2">
			<input type="radio" class="checkform1"id="B2F-C2-1"value="B2F-C2-1"name="B2F"/><label for="B2F-C2-1"></label>
			<input type="radio" class="checkform1"id="B2F-C2-2"value="B2F-C2-2"name="B2F"/><label for="B2F-C2-2"></label>
			<input type="radio" class="checkform1"id="B2F-C2-3"value="B2F-C2-3"name="B2F"/><label for="B2F-C2-3"></label>
		</div>
		<div class = "horizon" id="check_C3">
			<input type="radio" class="checkform1"id="B2F-C3-1"value="B2F-C3-1"name="B2F"/><label for="B2F-C3-1"></label>
			<input type="radio" class="checkform1"id="B2F-C3-2"value="B2F-C3-2"name="B2F"/><label for="B2F-C3-2"></label>
			<input type="radio" class="checkform1"id="B2F-C3-3"value="B2F-C3-3"name="B2F"/><label for="B2F-C3-3"></label>
		</div>
		<div class = "horizon" id="check_C4">
			<input type="radio" class="checkform1"id="B2F-C4-1"value="B2F-C4-1"name="B2F"/><label for="B2F-C4-1"></label>
			<input type="radio" class="checkform1"id="B2F-C4-2"value="B2F-C4-2"name="B2F"/><label for="B2F-C4-2"></label>
			<input type="radio" class="checkform1"id="B2F-C4-3"value="B2F-C4-3"name="B2F"/><label for="B2F-C4-3"></label>
		</div>
		<div class = "horizon" id="check_C5">
			<input type="radio" class="checkform1"id="B2F-C5-1"value="B2F-C5-1"name="B2F"/><label for="B2F-C5-1"></label>
			<input type="radio" class="checkform1"id="B2F-C5-2"value="B2F-C5-2"name="B2F"/><label for="B2F-C5-2"></label>
			<input type="radio" class="checkform1"id="B2F-C5-3"value="B2F-C5-3"name="B2F"/><label for="B2F-C5-3"></label>
			<input type="radio" class="checkform1"id="B2F-C5-4"value="B2F-C5-4"name="B2F"/><label for="B2F-C5-4"></label>
		</div>

		<div class = "horizon" id="check_D1">
			<input type="radio" class="checkform1"id="B2F-D1-1"value="B2F-D1-1"name="B2F"/><label for="B2F-D1-1"></label>
			<input type="radio" class="checkform1"id="B2F-D1-2"value="B2F-D1-2"name="B2F"/><label for="B2F-D1-2"></label>
			<input type="radio" class="checkform1"id="B2F-D1-3"value="B2F-D1-3"name="B2F"/><label for="B2F-D1-3"></label>
		</div>
		<div class = "horizon" id="check_D2">
			<input type="radio" class="checkform1"id="B2F-D2-1"value="B2F-D2-1"name="B2F"/><label for="B2F-D2-1"></label>
			<input type="radio" class="checkform1"id="B2F-D2-2"value="B2F-D2-2"name="B2F"/><label for="B2F-D2-2"></label>
			<input type="radio" class="checkform1"id="B2F-D2-3"value="B2F-D2-3"name="B2F"/><label for="B2F-D2-3"></label>
		</div>
		<div class = "horizon" id="check_D3">
			<input type="radio" class="checkform1"id="B2F-D3-1"value="B2F-D3-1"name="B2F"/><label for="B2F-D3-1"></label>
			<input type="radio" class="checkform1"id="B2F-D3-2"value="B2F-D3-2"name="B2F"/><label for="B2F-D3-2"></label>
		</div>
		<div class = "horizon" id="check_D4">
			<input type="radio" class="checkform1"id="B2F-D4-1"value="B2F-D4-1"name="B2F"/><label for="B2F-D4-1"></label>
			<input type="radio" class="checkform1"id="B2F-D4-2"value="B2F-D4-2"name="B2F"/><label for="B2F-D4-2"></label>
			<input type="radio" class="checkform1"id="B2F-D4-3"value="B2F-D4-3"name="B2F"/><label for="B2F-D4-3"></label>
		</div>
		<div class = "horizon" id="check_D5">
			<input type="radio" class="checkform1"id="B2F-D5-1"value="B2F-D5-1"name="B2F"/><label for="B2F-D5-1"></label>
			<input type="radio" class="checkform1"id="B2F-D5-2"value="B2F-D5-2"name="B2F"/><label for="B2F-D5-2"></label>
			<input type="radio" class="checkform1"id="B2F-D5-3"value="B2F-D5-3"name="B2F"/><label for="B2F-D5-3"></label>
			<input type="radio" class="checkform1"id="B2F-D5-4"value="B2F-D5-4"name="B2F"/><label for="B2F-D5-4"></label>
		</div>
		
		<div class = "horizon" id="check_E1">
			<input type="radio" class="checkform1"id="B2F-E1-1"value="B2F-E1-1"name="B2F"/><label for="B2F-E1-1"></label>
			<input type="radio" class="checkform1"id="B2F-E1-2"value="B2F-E1-2"name="B2F"/><label for="B2F-E1-2"></label>
			<input type="radio" class="checkform1"id="B2F-E1-3"value="B2F-E1-3"name="B2F"/><label for="B2F-E1-3"></label>
		</div>
		<div class = "horizon" id="check_E2">
			<input type="radio" class="checkform1"id="B2F-E2-1"value="B2F-E2-1"name="B2F"/><label for="B2F-E2-1"></label>
			<input type="radio" class="checkform1"id="B2F-E2-2"value="B2F-E2-2"name="B2F"/><label for="B2F-E2-2"></label>
			<input type="radio" class="checkform1"id="B2F-E2-3"value="B2F-E2-3"name="B2F"/><label for="B2F-E2-3"></label>
		</div>
		<div class = "horizon" id="check_E3">
			<input type="radio" class="checkform1"id="B2F-E3-1"value="B2F-E3-1"name="B2F"/><label for="B2F-E3-1"></label>
			<input type="radio" class="checkform1"id="B2F-E3-2"value="B2F-E3-2"name="B2F"/><label for="B2F-E3-2"></label>
		</div>
		<div class = "horizon" id="check_E4">
			<input type="radio" class="checkform1"id="B2F-E4-1"value="B2F-E4-1"name="B2F"/><label for="B2F-E4-1"></label>
			<input type="radio" class="checkform1"id="B2F-E4-2"value="B2F-E4-2"name="B2F"/><label for="B2F-E4-2"></label>
			<input type="radio" class="checkform1"id="B2F-E4-3"value="B2F-E4-3"name="B2F"/><label for="B2F-E4-3"></label>
		</div>
		<div class = "horizon" id="check_E5">
			<input type="radio" class="checkform1"id="B2F-E5-1"value="B2F-E5-1"name="B2F"/><label for="B2F-E5-1"></label>
			<input type="radio" class="checkform1"id="B2F-E5-2"value="B2F-E5-2"name="B2F"/><label for="B2F-E5-2"></label>
			<input type="radio" class="checkform1"id="B2F-E5-3"value="B2F-E5-3"name="B2F"/><label for="B2F-E5-3"></label>
			<input type="radio" class="checkform1"id="B2F-E5-4"value="B2F-E5-4"name="B2F"/><label for="B2F-E5-4"></label>
		</div>

		<div class = "horizon" id="check_F1">
			<input type="radio" class="checkform1"id="B2F-F1-1"value="B2F-F1-1"name="B2F"/><label for="B2F-F1-1"></label>
			<input type="radio" class="checkform1"id="B2F-F1-2"value="B2F-F1-2"name="B2F"/><label for="B2F-F1-2"></label>
			<input type="radio" class="checkform1"id="B2F-F1-3"value="B2F-F1-3"name="B2F"/><label for="B2F-F1-3"></label>
		</div>
		<div class = "horizon" id="check_F2">
			<input type="radio" class="checkform1"id="B2F-F2-1"value="B2F-F2-1"name="B2F"/><label for="B2F-F2-1"></label>
			<input type="radio" class="checkform1"id="B2F-F2-2"value="B2F-F2-2"name="B2F"/><label for="B2F-F2-2"></label>
			<input type="radio" class="checkform1"id="B2F-F2-3"value="B2F-F2-3"name="B2F"/><label for="B2F-F2-3"></label>
		</div>
		<div class = "horizon" id="check_F3">
			<input type="radio" class="checkform1"id="B2F-F3-1"value="B2F-F3-1"name="B2F"/><label for="B2F-E3-1"></label>
			<input type="radio" class="checkform1"id="B2F-F3-2"value="B2F-F3-2"name="B2F"/><label for="B2F-F3-2"></label>
		</div>
		<div class = "horizon" id="check_F4">
			<input type="radio" class="checkform1"id="B2F-F4-1"value="B2F-F4-1"name="B2F"/><label for="B2F-F4-1"></label>
			<input type="radio" class="checkform1"id="B2F-F4-2"value="B2F-F4-2"name="B2F"/><label for="B2F-F4-2"></label>
			<input type="radio" class="checkform1"id="B2F-F4-3"value="B2F-F4-3"name="B2F"/><label for="B2F-F4-3"></label>
		</div>
		<div class = "horizon" id="check_F5">
			<input type="radio" class="checkform1"id="B2F-F5-1"value="B2F-F5-1"name="B2F"/><label for="B2F-F5-1"></label>
			<input type="radio" class="checkform1"id="B2F-F5-2"value="B2F-F5-2"name="B2F"/><label for="B2F-F5-2"></label>
			<input type="radio" class="checkform1"id="B2F-F5-3"value="B2F-F5-3"name="B2F"/><label for="B2F-F5-3"></label>
			<input type="radio" class="checkform1"id="B2F-F5-4"value="B2F-F5-4"name="B2F"/><label for="B2F-F5-4"></label>
		</div>
		<div class = "horizon" id="check_F6">
			<input type="radio" class="checkform1"id="B2F-F6-1"value="B2F-F6-1"name="B2F"/><label for="B2F-F6-1"></label>
			<input type="radio" class="checkform1"id="B2F-F6-2"value="B2F-F6-2"name="B2F"/><label for="B2F-F6-2"></label>
			<input type="radio" class="checkform1"id="B2F-F6-3"value="B2F-F6-3"name="B2F"/><label for="B2F-F6-3"></label>
			<input type="radio" class="checkform1"id="B2F-F6-4"value="B2F-F6-4"name="B2F"/><label for="B2F-F6-4"></label>
		</div>


		<div class = "horizon" id="check_G1">
			<input type="radio" class="checkform1"id="B2F-G1-1"value="B2F-G1-1"name="B2F"/><label for="B2F-G1-1"></label>
			<input type="radio" class="checkform1"id="B2F-G1-2"value="B2F-G1-2"name="B2F"/><label for="B2F-G1-2"></label>
			<input type="radio" class="checkform1"id="B2F-G1-3"value="B2F-G1-3"name="B2F"/><label for="B2F-G1-3"></label>
		</div>
		<div class = "horizon" id="check_G2">
			<input type="radio" class="checkform1"id="B2F-G2-1"value="B2F-G2-1"name="B2F"/><label for="B2F-G2-1"></label>
			<input type="radio" class="checkform1"id="B2F-G2-2"value="B2F-G2-2"name="B2F"/><label for="B2F-G2-2"></label>
			<input type="radio" class="checkform1"id="B2F-G2-3"value="B2F-G2-3"name="B2F"/><label for="B2F-G2-3"></label>
		</div>
		<div class = "horizon" id="check_G3">
			<input type="radio" class="checkform1"id="B2F-G3-1"value="B2F-G3-1"name="B2F"/><label for="B2F-G3-1"></label>
			<input type="radio" class="checkform1"id="B2F-G3-2"value="B2F-G3-2"name="B2F"/><label for="B2F-G3-2"></label>
		</div>
		<div class = "horizon" id="check_G4">
			<input type="radio" class="checkform1"id="B2F-G4-1"value="B2F-G4-1"name="B2F"/><label for="B2F-G4-1"></label>
			<input type="radio" class="checkform1"id="B2F-G4-2"value="B2F-G4-2"name="B2F"/><label for="B2F-G4-2"></label>
			<input type="radio" class="checkform1"id="B2F-G4-3"value="B2F-G4-3"name="B2F"/><label for="B2F-G4-3"></label>
		</div>
		<div class = "horizon" id="check_G5">
			<input type="radio" class="checkform1"id="B2F-G5-1"value="B2F-G5-1"name="B2F"/><label for="B2F-G5-1"></label>
			<input type="radio" class="checkform1"id="B2F-G5-2"value="B2F-G5-2"name="B2F"/><label for="B2F-G5-2"></label>
			<input type="radio" class="checkform1"id="B2F-G5-3"value="B2F-G5-3"name="B2F"/><label for="B2F-G5-3"></label>
			<input type="radio" class="checkform1"id="B2F-G5-4"value="B2F-G5-4"name="B2F"/><label for="B2F-G5-4"></label>
		</div>
		<div class = "horizon" id="check_G6">
			<input type="radio" class="checkform1"id="B2F-G6-1"value="B2F-G6-1"name="B2F"/><label for="B2F-G6-1"></label>
			<input type="radio" class="checkform1"id="B2F-G6-2"value="B2F-G6-2"name="B2F"/><label for="B2F-G6-2"></label>
			<input type="radio" class="checkform1"id="B2F-G6-3"value="B2F-G6-3"name="B2F"/><label for="B2F-G6-3"></label>
			<input type="radio" class="checkform1"id="B2F-G6-4"value="B2F-G6-4"name="B2F"/><label for="B2F-G6-4"></label>
		</div>
		
		<div id="select" style="border:1px solid red;">
			<div id="reserve" style="border:0px solid red;">
				<input id="reserve_but" type="submit" value="예약" onClick="select_func()">
			</div>
        </div>
	</form>
</div>
      </body>
</html>
<?php
  $select_query="SELECT lot,lot_status,p_time FROM parking_lots where lot like 'B2F%' ";
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
		$select_query="SELECT lot,lot_status,p_time FROM parking_lots where lot like 'B2F%' ";
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
		}
		if($status=='parked'){
			$query1="UPDATE parking_lots SET lot_Status='idle', p_time=NULL, distance='$getdistance' WHERE lot='$getDT[1]'";
			mysqli_query($conn, $query1);
		}//->빨간색으로 변했다가 거리가 멀어지면 초록색으로 원상복구 되어야함(주차된 차량 나감)
	}
   ?>