/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function ($) {
    $( "#ui-datepicker-div" ).removeClass( "ui-helper-hidden-accessible" );
    jQuery("input, textarea").keyup(function () {
        this.value = this.value.toUpperCase();
    });
    $('.solo-numero').keyup(function (){
        this.value = (this.value + '').replace(/[^0-9]/g, '');
      });
    jQuery("#tabs").tabs();
    jQuery("div.error").show("slow");
    //mgi
    if ($('select[name="preinscripcion[mgi]"]').val() == '' || $('select[name="preinscripcion[mgi]"]').val() == 'NO') {
        $('div.sf_admin_form_field_uni_mgi').hide();
        $('div.sf_admin_form_field_ano_mgi').hide();
    }
    if ($('select[name="preinscripcion[mgi]"]').val() == 'SI') {
        $('div.sf_admin_form_field_uni_mgi').show();
        $('div.sf_admin_form_field_ano_mgi').show();
    }
    $("#preinscripcion_mgi").change(function() {
        if ($('select[name="preinscripcion[mgi]"]').val() == '' || $('select[name="preinscripcion[mgi]"]').val() == 'NO') {
             $('div.sf_admin_form_field_uni_mgi').hide("slow");
             $('div.sf_admin_form_field_ano_mgi').hide("slow");

         }
         if ($('select[name="preinscripcion[mgi]"]').val() == 'SI') {
             $('div.sf_admin_form_field_uni_mgi').show("slow");
             $('div.sf_admin_form_field_ano_mgi').show("slow");
         }
    });
    //otra
    if ($('select[name="preinscripcion[otra]"]').val() == '' || $('select[name="preinscripcion[otra]"]').val() == 'NO') {
        $('div.sf_admin_form_field_uni_otra').hide();
        $('div.sf_admin_form_field_ano_otra').hide();
    }
    if ($('select[name="preinscripcion[otra]"]').val() == 'SI') {
        $('div.sf_admin_form_field_uni_otra').show();
        $('div.sf_admin_form_field_ano_otra').show();
    }
    $("#preinscripcion_otra").change(function() {
        if ($('select[name="preinscripcion[otra]"]').val() == '' || $('select[name="preinscripcion[otra]"]').val() == 'NO') {
             $('div.sf_admin_form_field_uni_otra').hide("slow");
             $('div.sf_admin_form_field_ano_otra').hide("slow");

         }
         if ($('select[name="preinscripcion[otra]"]').val() == 'SI') {
             $('div.sf_admin_form_field_uni_otra').show("slow");
             $('div.sf_admin_form_field_ano_otra').show("slow");
         }
    });
    
});

