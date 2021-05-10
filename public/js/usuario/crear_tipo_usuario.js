$(document).ready(function ()
{

    $("#cliente_particular").hide();
    $("#cliente_empresa").hide();
            $('#tipo_cliente').hide();
            $('#taller_asociado').hide();

    $('#t_usuario').on('change', function()
    {
        // console.log(this.value);
        // var
        var id_tipousuario = this.value;

        // SI ES ADMIN
        if (id_tipousuario == 1)
        {

            $("#cliente_empresa").hide();
            $("#cliente_particular").show('slow');
            $('#tipo_cliente').hide('slow');
            $('#taller_asociado').hide('slow');





            // TIPO CLIENTE - NO APLICA
            $("#t_cliente").val("3");

            if ($("#t_cliente").is(":checked"))
            {
                $('#t_cliente').prop('readonly', false);
            }
            else
            {
                $('#t_cliente').prop('readonly', 'readonly');
            }

            // TALLER ASOCIADO - NO APLICA
            $("#t_asociado").val("1");

            if ($("#t_asociado").is(":checked")) {
                $('#t_asociado').prop('readonly', false);
            }
            else
            {
                $('#t_asociado').prop('readonly', 'readonly');
            }
        }
        // SI ES SUPERVISOR
        else if (id_tipousuario == 2)
        {

            $("#cliente_particular").show('slow');
            $('#tipo_cliente').hide();
            $("#taller_asociado").show('slow');


            // TIPO CLIENTE - NO APLICA
            $("#t_cliente").val("3");

            if ($("#t_cliente").is(":checked")) {
                $('#t_cliente').prop('readonly', false);
            }
            else {
                $('#t_cliente').prop('readonly', 'readonly');
            }

            if ($('#t_asociado').prop('readonly'))
            {
                $("#t_asociado").val("0");
                $('#t_asociado').prop('readonly', false);
            }

        }
        // SI ES CLIENTE
        else if (id_tipousuario == 3)
        {
            $("#cliente_empresa").hide();
            $("#cliente_particular").show('slow');
            $("#tipo_cliente").show('slow');
            $("#taller_asociado").hide('slow');



            $("#t_asociado").val("1");

            if ($('#t_cliente').prop('readonly'))
            {
                $("#t_cliente").val("0");
                $('#t_cliente').prop('readonly', false);
            }

            if ($("#t_asociado").is(":checked"))
            {
                $('#t_asociado').prop('readonly', false);
            }
            else
            {
                $('#t_asociado').prop('readonly', 'readonly');
            }

        }
        else
        {
            $("#cliente_empresa").hide('slow');
            $("#cliente_particular").hide('slow');
            $('#tipo_cliente').hide('slow');
            $('#taller_asociado').hide('slow');

            if ($('#t_cliente').prop('readonly'))
            {
                $("#t_cliente").val("0");
                $('#t_cliente').prop('readonly', false);
            }

            if ($('#t_asociado').prop('readonly'))
            {
                $("#t_asociado").val("0");
                $('#t_asociado').prop('readonly', false);
            }
        }
        // FIN IF TIPO USUARIO




    });


    $('#t_cliente').on('change', function()
    {
        var id_tipocliente = this.value;

        // SI ES EMPRESA
        if (id_tipocliente == 1)
        {
            $("#cliente_particular").hide();
            $("#cliente_empresa").show('slow');
        }
        // SI ES PARTICULAR
        else if (id_tipocliente == 2)
        {
            $("#cliente_empresa").hide();
            $("#cliente_particular").show('slow');
        }
        else
        {
            $("#cliente_empresa").hide('slow');
            $("#cliente_particular").hide('slow');
        }

    });


});

