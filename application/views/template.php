<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
<meta name="description" content="Strategic game for Scouts" /> 
<meta name="author" content="Martin Mensik" /> 
<meta name="copyright" content="Copyright 2012 Matin Mensik" />
<meta name="language" content="en-us" /> 
<link href="<?= url::base();?>style/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?= url::base(); ?>scripts/jquery.js"></script>  
<script src="<?= url::base(); ?>js/highcharts.js" type="text/javascript"></script>
<title>Mesta</title> 
</head>

<script>
	function init() {
		$("tr:odd").addClass("odd");
		$("tr:even").addClass("even");
		
	}
</script>


<body onload="init()">
    <div class="main">
    	
    	<div class="menu">
    		<div>
    			<?= $menu ?>
    		</div>
    	</div>
    	
    	<div class="content">
        	<?= $content ?>
        </div>
        
        <div class="foot">
        	<?= $foot ?>
    	</div>
        
    </div>
</body>
</html>
