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
	
	//approveEvents: string, string, string, string, date, string, int, string -> table row
	//purpose: given a pending event request, generates the html to create a table row
	function approveEvents( $id, $contact, $type, $phone, $date, $email, $guests, $comments ) {
		return "<tr>
					<th scope=\"row\">$id</th>
					<td>$contact</td>
					<td>$type</td>
					<td>$phone</td>
					<td>$date</td>
					<td>$email</td>
					<td>$guests</td>
					<td>$comments</td>
					<td><a href=\"events-manage-handle.php?id=$id\" class=\"btn btn-primary\">Manage</a></td>
				</tr>";
	}
	
	//currentEvents: string, date, date, string, string -> table row
	//creates a table row for existing events
	function currentEvents( $id, $contact, $type, $phone, $date, $email, $guests, $comments ) {
		return "<tr>
					<th scope=\"row\">$id</th>
					<td>$contact</td>
					<td>$type</td>
					<td>$phone</td>
					<td>$date</td>
					<td>$email</td>
					<td>$guests</td>
					<td>$comments</td>
					<td><a href=\"events-current.php?id=$id\" class=\"btn btn-primary\">Manage</a></td>
				</tr>";
	}
	
	//specialCards: string, string, decimal, string -> html
	//creates card html for specials
	function specialCards ( $name, $type, $price, $description, $url ) {
		return "<div class=\"card col-sm mr-3 pl-0 mt-3\" style=\"width: 18 rem;\">
					<div class=\"row no-gutters\">
						<div class=\"col-auto\">
							<img src=\"$url\" class=\"img-fluid\" height=\"300px\" width=\"300px\">
						</div>
						<div class=\"col\">
							<div class=\"card-block px-2\">
								<h4 class=\"card-title\">$name</h4>
								<p class=\"card-text\">$description</p>
							</div>
						</div>
					</div>
				</div>";				
	}
	
	//specialManage:  string, string, decimal, string -> html
	//create the html for the management page of specials
	function specialManage ( $name, $type, $price, $description, $url ) {
		return "<tr>
					<th scope=\"row\">$name</th>
					<td>$type</td>
					<td>$price</td>
					<td>$description</td>
					<td>$url</td>
					<td><a href=\"specials-manage-handle.php?name=$name\" class=\"btn btn-primary\">Manage</a></td>
				</tr>";
	}
?>