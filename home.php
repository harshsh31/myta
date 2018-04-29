<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <style type="text/css">
        	.paragraph1{
        		margin-left: 25px;
        		font-weight: normal;
        	}
        	.paragraph2{
        		margin-left: 50px;
        		font-weight: normal;
        	}
        	.paragraph3{
        		margin-left: 75px;
        		font-weight: normal;
        	}
        	.c{
        		font-weight: bold;
        		size:26sp;
        		color: white;
        	}
        </style>
    </head>

    <body>
        	<div class="col-sm-5 forms-right-icons">
	        	<div>
	        		<p class="c" id="content">Content</p>
	        	</div>
	                        	
            </div>  
                    
                    <div class="col-sm-6 forms-right-icons">
						<div class="row">
							<!-- <div class="col-sm-2 icon"><i class="fa fa-user"></i></div> -->
							<div class="col-sm-10" id="qandans">
								<h3>Questions and Answers</h3>
							</div>
						</div>
                    </div>
                </div>
                    
        	</div>
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Made by Harsh</p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
        <script type="text/javascript">
        	$.getJSON("json.txt",function(json){
        		console.log(json);
        		for(var i=0;i<json.gradesList.length;i++){
	        		var para=document.createElement("P");
	        		var t = document.createTextNode("" + (i+1) + ") " + json.gradesList[i].name);      // Create a text node
					para.appendChild(t); 
					para.setAttribute("id",""+i);
					para.setAttribute("class","paragraph1");
					document.getElementById("content").appendChild(para);
					for(var j=0;j<json.gradesList[i].subjectList.length;j++){
						var para=document.createElement("P");
		        		var t = document.createTextNode("" + (j+1) + ") " + json.gradesList[i].subjectList[j].name);      // Create a text node
						para.appendChild(t); 
						para.setAttribute("class","paragraph2");
						document.getElementById(i).appendChild(para);
						for(var k=0;k<json.gradesList[i].subjectList[j].chapterList.length;k++){
							var para=document.createElement("P");
			        		var t = document.createTextNode("" + (k+1) + ") " + json.gradesList[i].subjectList[j].chapterList[k].name);      // Create a text node
							para.appendChild(t); 
							para.setAttribute("class","paragraph3");
							document.getElementById(i).appendChild(para);
							if(i==0 && j==0 && k==0){
								para.setAttribute("style","color: black;");
								for(var l=0;l<json.gradesList[i].subjectList[j].chapterList[k].questionList.length;l++){
									var para=document.createElement("P");
					        		var t = document.createTextNode("Q " + (l+1) + ") " + json.gradesList[i].subjectList[j].chapterList[k].questionList[l].question);      // Create a text node
									para.appendChild(t); 
									para.setAttribute("class","paragraph2");
									document.getElementById("qandans").appendChild(para);
									var para=document.createElement("P");
					        		var t = document.createTextNode("Ans " + (l+1) + ") " + json.gradesList[i].subjectList[j].chapterList[k].questionList[l].answer);      // Create a text node
									para.appendChild(t); 
									para.setAttribute("class","paragraph2");
									document.getElementById("qandans").appendChild(para);
								}
								}
							}
						}
					}
        	});
        </script>
    </body>

</html>