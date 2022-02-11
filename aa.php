<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>PHP Live MySQL Database Search</title>
 <link rel="stylesheet"
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
	
	#b{
		background-color:#FFFFFF;
		position: fixed;
		bottom: 0;
		left:0;
		height:250px;
		width:100%;
		border: 1px solid black;
		overflow:hidden;
		visibility:hidden;
	}
	#k{
		visibility:hidden;
	}

	#b1 {
		width: 30%;
		margin-left:5%;
		float:left;
		margin-top:-58px;

	}
	#b2{
		width: 30%;
		margin-top:-58px;
		float:left; 
	}
	#b3{
		margin-top:-58px;
		width:30%;
		margin-right:5%;
		overflow: hidden; /* if you don't want #second to wrap below #first */
	}
	
	
	.search-box {
			display: -ms-flexbox; 
			display: flex;
			width: 50%;
			margin-bottom: 15px;
			}
	.icon {
			padding: 8px;
			background: dodgerblue;
			color: white;
			min-width: 25px;
			text-align: center;
			}
	
</style>

</head>
<body>
    <div class="search-box">
	<i class="fa fa-search icon"></i>
        <input type="text" autocomplete="off" placeholder="Search country..." />

    </div>

	<div id="b"> 
	 
	 <div id="k">
	 <h2>No Record Found......</h2>
	 </div>
	 
	<div id="b1">
	<center>
	<img id="ab" style="height:180px;width:180px;">
	<h3 id="bb"></h3>
	</center>
	</div>
	
	<div id="b2">
	<center>
	<img id="ab2" style="height:180px;width:180px;">
		<h3 id="bb2"></h3>
		</center>	
	</div>
	
	<div id="b3">
	<center>
	<img id="ab3" style="height:180px;width:180px;">
		<h3 id="bb3"></h3>
	</center>
	</div>
	
	</div>
		

	</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
		
		
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
			
			document.getElementById("b").style.visibility = "visible";	


            $.get("backend.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                //resultDropdown.html(data);
				
				var input = data;
				var fields = input.split('<br/>');
				var it1 = fields[0];
				var it2 = fields[1];
				var it3 = fields[2];
				var it4 = fields[3];
				var it5 = fields[4];
				var it6 = fields[5];
				var it7 = fields[6];
				var it8 = fields[7];
				var it9 = fields[8];
				var it10 = fields[9];
			
			if(it1!="No results...")
			{
			document.getElementById("b1").style.visibility = "visible";
			document.getElementById("b2").style.visibility = "visible";
			document.getElementById("b3").style.visibility = "visible";	
			document.getElementById("k").style.visibility = "hidden";			
						
			
			if(it2!=null && it5!=null && it8!=null)
			{
			

			bb.innerText = it2;
			bb2.innerText = it5;
			bb3.innerText = it8;
			document.getElementById("ab").src = "images/"+it3;
			document.getElementById("ab2").src = "images/"+it6;
			document.getElementById("ab3").src = "images/"+it9;	
			

				$('#b1').click(function () {
					window.location = "prd.php?id="+it4;
				});
				$('#b2').click(function () {
					window.location = "prd.php?id="+it7;
				});
				$('#b3').click(function () {
					window.location = "prd.php?id="+it10;
				});
			}
			else if(it2!=null && it5!=null && it8==null)
			{
		
			bb.innerText = it2;
			bb2.innerText = it5;
			
			document.getElementById("ab").src = "images/"+it3;
			document.getElementById("ab2").src = "images/"+it6;
			document.getElementById("b3").style.visibility = "hidden";	
			
			$('#b1').click(function () {
					window.location = "prd.php?id="+it4;
				});
			$('#b2').click(function () {
					window.location = "prd.php?id="+it7;
				});
				
			}
			else if (it2!=null && it5==null && it8==null)
			{
				bb.innerText = it2;
				document.getElementById("ab").src = "images/"+it3;
				
				document.getElementById("b2").style.visibility = "hidden";
				document.getElementById("b3").style.visibility = "hidden";	
				
				$('#b1').click(function () {
					window.location = "prd.php?id="+it4;
				});
			}
			
			
						
			
			}
			else
			{
			document.getElementById("k").style.visibility = "visible";
			document.getElementById("b1").style.visibility = "hidden";
			document.getElementById("b2").style.visibility = "hidden";
			document.getElementById("b3").style.visibility = "hidden";			
			}
			
			
			document.getElementById("ab").src = "images/"+img;
			//document.getElementById('ab').style.display="inline-block";	
			document.getElementById("ab2").src = "images/"+img2;
			//document.getElementById('ab2').style.display="inline-block";		
			document.getElementById("ab3").src = "images/"+img3;
			//document.getElementById('ab3').style.display="inline-block";	

			
            });
        } else{
			document.getElementById("k").style.visibility = "hidden";
            resultDropdown.empty();
			document.getElementById("b1").style.visibility = "hidden";
			document.getElementById("b2").style.visibility = "hidden";
			document.getElementById("b3").style.visibility = "hidden";
			document.getElementById("b").style.visibility = "hidden";
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>