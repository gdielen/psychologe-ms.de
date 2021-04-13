
										<form id="mailformular" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="mailformular"">
											<table class="bg_weiss rand_schwarz" width="100%" border="0" cellspacing="0" cellpadding="2">
												<tr>
													<td class="bg_hellgrau" width="10"> </td>
													<td class="bg_hellgrau" colspan="4"><font size="2"><strong>Mail-Formular</strong></font></td>
													<td class="bg_hellgrau" align="right"> <font size="2"><strong></strong></font></td>
													<td class="bg_hellgrau" width="10"> </td>
												</tr>
												<tr>
													<td width="10"> </td>
													<td colspan="2"> </td>
													<td width="7"> </td>
													<td colspan="2"> </td>
													<td width="10"> </td>
												</tr>
												<tr>
													<td width="10"> </td>
													<td class="bg_mittelgrau" colspan="3"><strong>Absender</strong></td>
													<td class="bg_mittelgrau"><strong>Nachricht</strong></td>
													<td class="bg_mittelgrau"> </td>
													<td width="10"> </td>
												</tr>
												<tr>
													<td width="10"> </td>
													<td class="bg_hellgrau">Vorname</td>
													<td class="bg_hellgrau"><input class="w150" type="text" name="vorname" value="<?php if (isset($_SESSION['vorname'])) echo $_SESSION['vorname'] ; ?>" size="20" maxlength="30" tabindex="1"></td>
													<td class="bg_hellgrau" width="7"> </td>
													<td class="bg_hellgrau">Betreff</td>
													<td class="bg_hellgrau"><input class="w200" type="text" name="betreff" value="Ehemalige GSG Düsseldorf - Mail-Formular" size="25" maxlength="120" tabindex="5"></td>
													<td width="10"> </td>
												</tr>
												<tr>
													<td width="10"> </td>
													<td class="bg_hellgrau">Nachname</td>
													<td class="bg_hellgrau"><input class="w150" type="text" name="name_heute" value="<?php if (isset($_SESSION['name_heute'])) echo $_SESSION['name_heute'] ; ?>" size="20" maxlength="60" tabindex="2"></td>
													<td class="bg_hellgrau" width="7"> </td>
													<td class="bg_hellgrau">Nachricht</td>
													<td class="bg_hellgrau" rowspan="3" valign="top"><textarea class="w200 h68" name="nachricht" rows="4" cols="25" tabindex="6"></textarea></td>
													<td width="10"> </td>
												</tr>
												<tr>
													<td width="10"> </td>
													<td class="bg_hellgrau">Nachname zur Schulzeit</td>
													<td class="bg_hellgrau"><input class="w150" type="text" name="name_damals" value="<?php if (isset($_SESSION['name_damals'])) echo $_SESSION['name_damals'] ; ?>" size="20" maxlength="60" tabindex="3"></td>
													<td class="bg_hellgrau" width="7"> </td>
													<td class="bg_hellgrau"> </td>
													<td width="10"> </td>
												</tr>
												<tr>
													<td width="10"> </td>
													<td class="bg_hellgrau">eMail</td>
													<td class="bg_hellgrau"><input class="w150" type="text" name="email" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'] ; ?>" size="20" maxlength="60" tabindex="4"></td>
													<td class="bg_hellgrau" width="7"> </td>
													<td class="bg_hellgrau"> </td>
													<td width="10"></td>
												</tr>

												<tr>
													<td width="10"> </td>
													<td class="bg_hellgrau" colspan="4">gegen Spam: bitte hier  &quot;<strong>Scholl</strong>&quot;  eintragen: <input class="w30" type="text" name="nospam" value="" size="5" maxlength="6" tabindex="7"></td>
													<td class="bg_hellgrau"><input class="w200" type="submit" name="absenden" value="Nachricht absenden" tabindex="8"></td>
													<td width="10"> </td>
												</tr>
