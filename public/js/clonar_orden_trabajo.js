$(document).ready(function()
{

    // 2


        $('#clonar_descipcion_trabajo_realizado').click(function(){
        
         // Create clone of <div class='input-form'>
         var newel = $('.cloned-row-descripcion:last').clone(true);
        
         // Add after last <div class='cloned-row-descripcion'>
         $(newel).insertAfter(".cloned-row-descripcion:last");
        });
       
        $('.txt').focus(function(){
         $(this).css('border-color','red');
        });
        
        $('.txt').focusout(function(){
         $(this).css('border-color','initial');
        });


        $('#clonar_descipcion_trabajo_realizado').click(function(){
        
        // Create clone of <div class='input-form'>
        var newel = $('.cloned-row-descripcion:last').clone(true);
        
        // Add after last <div class='cloned-row-descripcion'>
        $(newel).insertAfter(".cloned-row-descripcion:last");
        });
        


    // $('#clonar_descipcion_trabajo_realizado').click(function()
    // {
    //     // Create clone of <div class='input-form'>
    //     var newel = $('.cloned-row-descripcion:last').clone();
    
    //     // Add after last <div class='input-form'>
    //     $(newel).insertAfter(".cloned-row-descripcion:last").find('input').val("");
    // });

    // 3
    $('#clonar_repuestos').click(function()
    {
        // Create clone of <div class='input-form'>
        var newel = $('.cloned-row-repuestos:last').clone();
    
        // Add after last <div class='input-form'>
        $(newel).insertAfter(".cloned-row-repuestos:last").find('input').val("");
    });

    // 4
    $('#clonar_insumos').click(function()
    {
        // Create clone of <div class='input-form'>
        var newel = $('.cloned-row-insumos:last').clone();
    
        // Add after last <div class='input-form'>
        $(newel).insertAfter(".cloned-row-insumos:last").find('input').val("");
    });

    // 5
    $('#clonar_fluidos').click(function()
    {
        // Create clone of <div class='input-form'>
        var newel = $('.cloned-row-fluidos:last').clone();
    
        // Add after last <div class='input-form'>
        $(newel).insertAfter(".cloned-row-fluidos:last").find('input').val("");;
    });

    // 6
    $('#clonar_servicios').click(function()
    {
        // Create clone of <div class='input-form'>
        var newel = $('.cloned-row-servicios:last').clone();
    
        // Add after last <div class='input-form'>
        $(newel).insertAfter(".cloned-row-servicios:last").find('input').val("");
    });


    
});