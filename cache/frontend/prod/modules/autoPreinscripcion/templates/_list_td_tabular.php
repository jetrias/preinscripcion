<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($preinscripcion->getId(), 'preinscripcion_edit', $preinscripcion) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nacionalidad">
  <?php echo $preinscripcion->getNacionalidad() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_identificacion">
  <?php echo $preinscripcion->getIdentificacion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_pnombre">
  <?php echo $preinscripcion->getPnombre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_snombre">
  <?php echo $preinscripcion->getSnombre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_papellido">
  <?php echo $preinscripcion->getPapellido() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_sapellido">
  <?php echo $preinscripcion->getSapellido() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_genero">
  <?php echo $preinscripcion->getGenero() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fnac">
  <?php echo false !== strtotime($preinscripcion->getFnac()) ? format_date($preinscripcion->getFnac(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_pais_origen_id">
  <?php echo $preinscripcion->getPaisOrigenId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_estado_id">
  <?php echo $preinscripcion->getEstadoId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_municipio_id">
  <?php echo $preinscripcion->getMunicipioId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_parroquia_id">
  <?php echo $preinscripcion->getParroquiaId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_direccion">
  <?php echo $preinscripcion->getDireccion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_telefono">
  <?php echo $preinscripcion->getTelefono() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_correo">
  <?php echo $preinscripcion->getCorreo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_twitter">
  <?php echo $preinscripcion->getTwitter() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_titulo_id">
  <?php echo $preinscripcion->getTituloId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_uni_pre">
  <?php echo $preinscripcion->getUniPre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_mgi">
  <?php echo $preinscripcion->getMgi() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_uni_mgi">
  <?php echo $preinscripcion->getUniMgi() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_otra">
  <?php echo $preinscripcion->getOtra() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_uni_otra">
  <?php echo $preinscripcion->getUniOtra() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_art_8">
  <?php echo $preinscripcion->getArt8() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_pnfa_id">
  <?php echo $preinscripcion->getPnfaId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_otra_especializacion">
  <?php echo $preinscripcion->getOtraEspecializacion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ano_pre">
  <?php echo $preinscripcion->getAnoPre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ano_mgi">
  <?php echo $preinscripcion->getAnoMgi() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ano_otra">
  <?php echo $preinscripcion->getAnoOtra() ?>
</td>
