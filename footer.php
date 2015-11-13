				</td></tr>
			  </table>
			  <br>
			</td>
		  </tr>
		</table>
		
	  </td>
	</tr>
	<tr>
	  <td height="26" style="background: #CCCCCC url('<?php echo $site_path; ?>images/footer.jpg') no-repeat;" align="center" class="footernav">
	    <?php
		  $main_nav[] = array('pagecode'=>'LINKS', 'title'=>'link partners', 'url'=>$site_path.'partners.html');
		  $nav = "";
			foreach($main_nav AS $this_nav) {
			  if($this_nav[pagecode] == $selected) $nav .= "<b>";
			  $nav .= "<a href='".$this_nav[url]."' class='footernav'>".$this_nav[title]."</a>";
			  if($this_nav[pagecode] == $selected) $nav .= "</b>";
			  $nav .= "&nbsp;<font class='mainnavbreak'>|</font>&nbsp;";
			}
			$nav = substr($nav, 0, strlen($nav)-49);
			echo $nav;
		?>
	  </td>
	</tr>
	<tr>
	  <td align="center" class="footer" height="20">
	    Copyright &copy; <a href="<?php echo $site_path; ?>" class="footer"><?php echo $site_name; ?></a> - <a href="http://www.arwscripts.com" target="_blank" class="footer">Joke site script developed by ARWScripts.com</a>
	  </td>
	</tr>
  </table>
 
</td><td width="5" valign="top">&nbsp;</td>
</tr>
</table>
</body>
</html>