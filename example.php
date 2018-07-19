<script type="text/javascript">
function example(str)
{
	var abc=null;
	
	//browser set
	if(window.XMLHttpRequest)  /* for all browser*/
	{
		abc = new XMLHttpRequest();
	}
	else if(window.ActiveXObject) /* for IE */
	{
		abc = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	//ajax logic with open page
	abc.open("GET",str+".php",true);
	abc.send();
	
	//set XMLHTTPRequest object property
	
	abc.onreadystatechange=function()
	{
		if(abc.readyState==4)
		{
			document.getElementById("example-display").innerHTML=abc.responseText;
		}
	
	}

}
</script>
<?php
$example = "active";
include("database.php");
include("header.php");?>
<!-- EXAMPLE -->
<div class="example-section">
	<div class="container">
		<div style="float:left; width:100%;" class="gallery-bor">
			
			<div class="gallery-grids">
				<div class="example-sidemenu">
					<ul>
						<?php
						$select_example = mysqli_query($con, "select * from langauge order by langauge ASC");
						while($row_example = mysqli_fetch_array($select_example)){
						?>
						<a onclick="example('example_stud/example?page=<?php echo $row_example['langauge'].'&id=id';?>')"><li><?php echo $row_example['langauge'];?> EXAMPLE</li></a>
                        <?php
						}
						?>
					</ul>
				</div>
				<div class="example-display" id="example-display">
					<?php //include("example_stud/php_example.php"); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //portfolio -->
<?php include("footer.php")?>