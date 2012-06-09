<html>
<style>
.links {font-family:castellar;
	text-shadow: 5px 5px 5px #3D0500;
	display: block;
	padding: 0.2em 1em 0 1em;
	background: #54aabb;
	border: 2px solid #9966ff;
}
.links :link {color:#4D0003;}      /* unvisited link */
.links :visited {color:#D92030;}  /* visited link */
.links :hover {color:#AD0006;}  /* mouse over link */
.links :active {color:#A0FF61;}  /* selected link */ 
.sel {border:1px solid pink;}
</style>
</html>

<?php

class meny{
	

//meny3 2d
function HTMLmeny($menu){
	$html= null;
	foreach($menu as $key=>$val) {
		
	$html .= " <a class ='sel' href = '{$val['href']}' title='{$val['title']}'>{$val['text']}</a>\n";
	}
	return "\n<nav class ='links'>\n$html</nav>\n";
}
	
}
