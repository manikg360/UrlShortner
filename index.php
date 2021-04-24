<body>
<center>
<div style="margin-top:180px;">
<h1>Shortning URL</h1>
</div>
</center>
<form action = "view.php" method = "post">

<div class="container">   
<label>Longer URL : </label>
<p><input style="width:500px" class = "custom-search-input" type="url" name="url"  placeholder="Enter url to shorten" required /></p>
<p><input type="submit" class="custom-search-botton" /></p>
</div>
</form>

</body>
<style>
body {    
  background-color: pink;  
} 
button {   
    background-color: #4CAF50;   
    width: 100%;  
	color: orange;   
	padding: 15px;   
	margin: 10px 0px;   
	border: none;   
	cursor: pointer;   
	 }   
form {   
	border: 3px solid #f1f1f1; 
    margin-right : 280px;
	margin-left : 280px;
	max-height:300px;
    } 
 input[type=text]{   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>
