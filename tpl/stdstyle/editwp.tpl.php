<?php
/***************************************************************************
	*                                         				                                
	*   This program is free software; you can redistribute it and/or modify  	
	*   it under the terms of the GNU General Public License as published by  
	*   the Free Software Foundation; either version 2 of the License, or	    	
	*   (at your option) any later version.
	*   
	*  UTF-8 ąść
	***************************************************************************/


/* 

  Uwaga ponizsz tresc tego pliku jest tylko forma przykladu bazujaca na GC.com a nie gotowym kodem do uzycia !!!

*/

?>

<div class="content2-pagetitle"><img src="tpl/stdstyle/images/blue/compas.png" class="icon32" alt="" />&nbsp;{{waypoints_cache}} &#8211; {cache_name}</div>

<form action="editwp.php" method="post" enctype="application/x-www-form-urlencoded" name="waypoints_form" dir="ltr">
<input type="hidden" name="cacheid" value="{cacheid}"/>
<input type="hidden" name="cacheid" value="{wpid}"/>

	
<table width="70%" class="table" border="0">

	<tr>
		<td class="content-title-noshade">{{wp_type}}:</td>
		<td>
			<select name="type" class="input200">
				{typeoptions}
			</select>
		</td>
	</tr>

	<tr><td class="buffer" colspan="2"></td></tr>
	<tr>
		<td valign="top" class="content-title-noshade">{{coordinates}}:</td>
		<td class="content-title-noshade">
		<fieldset style="border: 1px solid black; width: 65%; height: 32%; background-color: #FAFBDF;">
			<legend>&nbsp; <strong>WGS-84</strong> &nbsp;</legend>&nbsp;&nbsp;&nbsp;
			<select name="latNS" class="input40">
				<option value="N"{selLatN}>N</option>
				<option value="S"{selLatS}>S</option>
			</select>
			&nbsp;<input type="text" name="lat_h" maxlength="2" value="{lat_h}" class="input30" />
			&deg;&nbsp;<input type="text" name="lat_min" maxlength="6" value="{lat_min}" class="input50" />&nbsp;'&nbsp;
			{lat_message}<br />
			&nbsp;&nbsp;&nbsp;
			<select name="lonEW" class="input40">
				<option value="E"{selLonE}>E</option>
				<option value="W"{selLonW}>W</option>
			</select>
			&nbsp;<input type="text" name="lon_h" maxlength="3" value="{lon_h}" class="input30" />
			&deg;&nbsp;<input type="text" name="lon_min" maxlength="6" value="{lon_min}" class="input50" />&nbsp;'&nbsp;
			{lon_message}
			</fieldset>
		</td>
	</tr>
	<tr><td colspan="2"><div class="buffer"></div></td></tr>
	<tr>
		<td vAlign="top" align="left" colSpan="2">{{description}} 
			&nbsp;</td>
	</tr>
	<tr>

		<td vAlign="top" align="left" colSpan="2"><textarea name="description" rows="5" cols="60" id="description">{desc}</textarea></td>
	</tr>
	<tr>
		<td vAlign="top" align="left" colSpan="2"><table border="0" style="width:600px;">
	<tr>
		<td><input id="wps1" type="radio" name="wps1" value="1" checked="checked" /><label for="wps1">{{Show all information for this waypoint, including coordinates}}</label></td>
	</tr><tr>
		<td><input id="wps2" type="radio" name="wps2" value="2" /><label for="wps2">{{Show the details of this waypoint but hide the coordinates}}</label></td>

	</tr><tr>
		<td><input id="wps3" type="radio" name="wps3" value="3" /><label for="wps3">{{Hide this waypoint from view except by the owner or administrator}}</label></td>
	</tr>
	</table>

	<tr>
		<td colspan="2">
			<button type="submit" name="submit" value="delete" style="font-size:14px;width:130px"><b>Usuń</b></button> &nbsp;&nbsp;
			<button type="submit" name="submit" value="submit" style="font-size:14px;width:130px"><b>Zapisz</b></button>
		<br /><br /></td>
	</tr>

</table>
</form>
