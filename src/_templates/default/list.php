	
    <?php
    /**
	// Sorting of items
	$_img = "&nbsp;<IMG width=\"10\" height=\"10\" border=\"0\" align=\"ABSMIDDLE\" src=\"_img/";
	if($GLOBALS["srt"]=="yes") {
		$_srt = "no";	$_img .= "_arrowup.gif\" ALT=\"^\">";
	} else {
		$_srt = "yes";	$_img .= "_arrowdown.gif\" ALT=\"v\">";
	}
    */
    ?>
	
<?php require qx_var_template_dir() . "/toolbar.php" ?>

<table>
<form name="control_form" method="post" action="<?php qx_link("post") ?>" >
<input type="hidden" name="do_action" />
<input type="hidden" name="first" value="y" />
	<thead>
	    <tr>
         <td colspan="7">&nbsp;</td>
         </tr>
         <tr>
             <td width="2%" class="header">
                <input type="checkbox" name="toggleallc" onclick="javascript:toggleall(this);">
            </td>
	        <td width="44%" class="header"><?php qx_msg("namehader")?></td>
        	<td width="10%" class="header"><?php qx_msg("sizeheader")?></td>
	        <td width="16%" class="header"><?php qx_msg("typeheader")?></td>
	        <td width="16%" class="header"><?php qx_msg("modifheader")?></td>
	        <td width="16%" class="header"><?php qx_msg("permheader")?></td>
	        <td width="16%" class="header"><?php qx_msg("actionheader")?></td>
        </tr>
    </thead>
    <tbody>
		
        <?php global $qx_files; ?>
        <?php foreach ($qx_files as $filename => $fattributes) { ?> 
        <tr>
            <td><?php //FIXME checkbox ?>&nbsp;</td>
            <td>
                <?php if (isset($fattributes["link"])) echo "<a href=\"" . $fattributes["link"] . "\">"; ?>
                 <?php echo $fattributes["name"] ?></td>
                <?php if (isset($fattributes["link"])) echo "</a>"; ?>
            <td><?php echo $fattributes["size"] ?></td>
            <td><?php echo $fattributes["type"] ?></td>
            <td><?php echo $fattributes["modified_s"] ?></td>
            <td><?php echo $fattributes["permissions_s"] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
        <?php
        /**
             foreach $
	// make & print Table using lists
	print_table($dir, make_list($dir_list, $file_list));

	// print number of items & total filesize
	echo "<TR><TD colspan=\"7\"><HR></TD></TR><TR>\n<TD class=\"header\"></TD>";
	echo "<TD class=\"header\">".$num_items." ".$GLOBALS["messages"]["miscitems"]." (";
    $free=parse_file_size(diskfreespace(get_abs_dir($dir)));
	echo $GLOBALS["messages"]["miscfree"].": ".$free.")</TD>\n";
	echo "<TD class=\"header\">".parse_file_size($tot_file_size)."</TD>\n";

    echo "<TD class=\"header\" colspan=4></TD>";

	echo "</TR>\n<TR><TD colspan=\"7\"><HR></TD></TR></FORM></TABLE>\n";
	
?><script language="JavaScript1.2" type="text/javascript">
<!--
	// Uncheck all items (to avoid problems with new items)
	var ml = document.selform;
	var len = ml.elements.length;
	for(var i=0; i<len; ++i) {
		var e = ml.elements[i];
		if(e.name == "selitems[]" && e.checked == true) {
			e.checked=false;
		}
	}
// -->
*/
?>
