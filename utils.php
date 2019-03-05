<?php
	/* Foxhound tech
	
	Utility functions for reuse in Sharkey's Website Redesign.
	
	Author: James Kolts
	
	*/
	error_reporting(e_all);
	
	
	//Menuify: string, int, string -> string
	//Purpose: given $title, $price, and $description returns the html code to create a menu item
	//Count variable is used to allow for proper closing of tags
	$menuCount = 0;
	function menuify( $title, $price, $description, $count ) {
		//global $menuCount;
		$result = "";
		/*
		if ($menuCount % 2 === 0) {
			$result .= "<div class=\"row\">";
		}
		*/
		
		$result .= "<div class=\"col-sm\">
						<div class=\"card-body\">
							<h5 class=\"card-title\">$title $$price</h5>
							<h6 class=\"card-text\">$description</h6>
						</div>
					</div>";
		
		/*
		$menuCount += 1;		
		if ($menuCount % 2 === 0 && $menuCount !== $count) {
			$result .= "</div>";
		}
		if ($menuCount === $count) {
			$result .= "</div>";
			$menuCount = 0;
		}
		*/
		
		return $result;
	}
	
	
	//editTable: string, int, string -> table row
	//purpose: given a $header, $title, $price, and $description generates the html to create a table  row
	function editTable( $header, $title, $type, $price, $description ) {
		return "<tr>
					<th scope=\"row\">$header</th>
					<td>$title</td>
					<td>$type</td>
					<td>$$price</td>
					<td>$description</td>
					<td><a href=\"edit-food.php?name=$title\" class=\"btn btn-primary\">Edit</a></td>
				</tr>";
	}
?>