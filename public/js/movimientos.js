(function($){
 

    $.fn.movimientos = function( data ) {
        
        var _this = $(this);
        plugin = _this.data('movimientos');
        if (!plugin) {
            plugin = new $.movimientos(this, data);
            _this.data('movimientos', plugin);
            return plugin;
        }
    }
    
    $.movimientos = function(container, options){
        
        var plugin = this;
        
        /* 
        * Important Components
        */
       
       var $container = $(container);
       
       /* 
        * Important Variables
        */
       
       var conceptos;
       
       /* 
        * Public methods
        */
       
       
       plugin.init = function(){
           //Inicialiazamos la fecha
           var Objfecha = new Date();
           var fecha = Objfecha.getDate() + '/' + (Objfecha.getMonth() + 1) +'/' + Objfecha.getFullYear();
           
           $container.find('input[name=cajachica_fecha]').val(fecha);
           
           //Inicializamos el componente autcomplete de conceptos
           $.getJSON(
                   '/cajachica/movimientos/getconceptos',
                   function(data){
                       conceptos = data;
                       $container.find('input[name=cajachica_concepto]').autocomplete({
                            source:conceptos,
                            select: function( event, ui ) {
                                 $container.find('input[name=idconcepto]').val(ui.item.value);
                                 $(this).val(ui.item.label);
                                 event.preventDefault();
                            }
                       });
                       
                       $.each(conceptos,function(index,element){
                           //Inicilizamos el filtro de los conceptos
                            $container.find('select#concepto_filter').append('<option value="'+element.value+'">'+element.label+'</option>');
                       });
                       
                       $("select#concepto_filter").multipleSelect({
                            selectAll:true,
                            allSelected:'Todos los conceptos',
                            selectAllText:'Todos los conceptos',
                            onClick : filterByDate,
                            onCheckAll:filterByDate,
                            onUncheckAll:filterByDate,
                        });

                        $("select#concepto_filter").multipleSelect("checkAll");
                       
                   }
            );
    
            //Inicializamos los calendarios
                    $container.find('#fecha_filter_from').datepicker({
                        dateFormat: 'dd-mm-yy',
                        changeMonth: true,
                        changeYear: true,
                        onClose: function(dateText, inst){
                            filterByDate();
                        }
                    });
                    $container.find('#fecha_filter_to').datepicker({
                        dateFormat: 'dd-mm-yy',
                        changeMonth: true,
                        changeYear: true,
                        onClose: function(dateText, inst){
                            filterByDate();
                        }
                    });
    
            //Incializamos el select de tipo de movimiento
            $container.find('select[name=cajachica_tipomoviento]').material_select();
            
            //Incializamos el input cantidad
            $container.find('input[name=cajachica_cantidad]').on('keydown',onlyNumbers);
      
            //Incializamos evento guardar
            $container.find('#cajachica_guardar').on('click',function(){
                var isValid = validateForm($container);
                
                /*Si el formulario es valido, guardamos*/
                if(isValid){
                    
                    var movimiento = new Object();
                    //Guardamos nuestros datos 
                    $.each($container.find('input,select'),function(index,element){
                        movimiento[$(element).attr('name')] = $(element).val();                        
                    });
                    
                    //Hacemos la peticion ajax
                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        async: false,
                        data: movimiento,
                        url:'/cajachica/movimientos/nuevomovimiento ',
                        success: function (response) {
                            if(response.response == true){
                                var tr = $('<tr>').attr('id',response.data.id).attr('data-time',response.data.fecha_js);
                                tr.append('<td>'+response.data.fecha+'</td>');
                                tr.append('<td class="caja_concepto" id='+$('input[name=idconcepto]').val()+'>'+$container.find('input[name=cajachica_concepto]').val()+'</td>');
                                if($container.find('select[name=cajachica_tipomoviento]').val() == 'cargo'){
                                    tr.append('<td>'+accounting.formatMoney($container.find('input[name=cajachica_cantidad]').val())+'</td>');
                                    tr.append('<td class="movmiento_vacio" > ---- </td>');
                                }else{
                                    tr.append('<td class="movmiento_vacio" > ---- </td>');
                                    tr.append('<td>'+accounting.formatMoney($container.find('input[name=cajachica_cantidad]').val())+'</td>');      
                                }
                                tr.append('<td>'+$container.find('input[name=cajachica_comprobante]').val()+'</td>');
                                tr.append('<td>'+$container.find('input[name=cajachica_pacientedoctor]').val()+'</td>');
                                tr.append('<td>'+$container.find('input[name=cajachica_nota]').val()+'</td>');
                                var td_opciones = $('<td>');
                                td_opciones.append('<a class="tooltipped" href="#" data-tooltip="Editar" data-position="right"><i class="tiny mdi-action-assignment"></i></a>');
                                td_opciones.append('<a style="margin-left: 10px;" class="tooltipped modal-trigger" href="#delete-modal-8" data-tooltip="Eliminar" data-position="right"><i class="tiny mdi-action-delete"></i></a>');
                                
                                //Adjuntamos el evento eliminar movmiento
                                td_opciones.find('i.mdi-action-delete').on('click',function(){
                                    var id = response.data.id;
                                    eliminarMovmiento(id);
                                });
                                
                                //Adjuntamos el evento eliminar movmiento
                                td_opciones.find('i.mdi-action-assignment').on('click',function(){
                                    var id = response.data.id;
                                    editarMovimiento(id);
                                });
                                
                                tr.append(td_opciones);
                                
                                //Mostramos el mensaje de exito
                                $('#movmiento_mensaje').show();
                                
                                //Insertamos la fila
                                $container.find('tbody').append(tr);
                                
                                //Recalculamos el balance;
                                var cantidad = parseFloat($container.find('input[name=cajachica_cantidad]').val());

                                var current_balance = accounting.unformat($container.find('#balance').text());
                                
                                if($container.find('select[name=cajachica_tipomoviento]').val() == 'cargo'){
                                    var new_balance = current_balance + cantidad
                                }else{
                                    var new_balance = current_balance - cantidad ;
                                }
                                
                                $container.find('#balance').text(accounting.formatMoney(new_balance));

                                $container.find('input:not(input[name=cajachica_fecha]):not(input.select-dropdown)').val('');
                                
                                calcularTotalIngresosEgresos();
                                
                            }
                        }
                        
                    });

                }
            });
            
            //Evento de cerrar de notificacion
            $('#movmiento_mensaje a').on('click',function(){
                $('#movmiento_mensaje').hide();
            });
            $('#movmiento_mensaje_eliminar a').on('click',function(){
                $('#movmiento_mensaje_eliminar').hide();
            });
            
            $('#movmiento_mensaje_editar a').on('click',function(){
                $('#movmiento_mensaje_editar').hide();
            });
            
            //Evento eliminar movimiento
            $container.find('i.mdi-action-delete').on('click',function(){
                var id = $(this).closest('tr').attr('id');
                eliminarMovmiento(id);
            });
            
            //Evento eliminar movimiento
            $container.find('i.mdi-action-assignment').on('click',function(){
                var id = $(this).closest('tr').attr('id');
                editarMovimiento(id);
            });
       }

       /* 
        * Private methods
        */
       
       calcularTotalIngresosEgresos = function(){
            
            $container.find('#row_report').remove();
            $row_report = $('<tr id="row_report" class="green lighten-5"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>');
            $td_ingresos = $row_report.find('td').eq(2);
            $td_egresos = $row_report.find('td').eq(3);
            
            
            var totalIngresos = 0;
            var totalEgresos = 0;
            $container.find('tbody').children('tr:visible').filter(function(index){
                totalIngresos = (totalIngresos + accounting.unformat($(this).find('td').eq(2).text()));
                totalEgresos = (totalEgresos + accounting.unformat($(this).find('td').eq(3).text()));
            });
            
             $td_ingresos.text(accounting.formatMoney(totalIngresos));
             $td_egresos.text(accounting.formatMoney(totalEgresos));
            
            $container.find('tbody').after($row_report);
            
            
        }
       
       var filterByConcepto = function(){
           var selected =  $("select#concepto_filter").multipleSelect('getSelects');
           $container.find('tbody').children('tr').hide();
           $container.find('tbody').children('tr').filter(function(index){
               if($.inArray($(this).attr('id'),selected) >= 0){
                   $(this).show();
               } 
           });  
       }
       
       var validateForm = function($parent){
               
            var isValid = true;
            $parent.find('p.input-error-show').remove();
            
            if($parent.find('select[name=cajachica_tipomoviento]').val() == '' || $parent.find('select[name=cajachica_tipomoviento]').val() == null){
                isValid = false;
                $parent.find('select[name=cajachica_tipomoviento]').after('<p class="input-error-show"> <i class="tiny mdi-alert-error"></i>Este campo no puede ir vacio</p>'); 
            }
            if($parent.find('input[name=cajachica_concepto]').val() == '' ){
                isValid = false;
                $parent.find('input[name=cajachica_concepto]').after('<p class="input-error-show"> <i class="tiny mdi-alert-error"></i>Este campo no puede ir vacio</p>'); 
            }
            if($parent.find('input[name=cajachica_cantidad]').val() == '' ){
                isValid = false;
                $parent.find('input[name=cajachica_cantidad]').after('<p class="input-error-show"> <i class="tiny mdi-alert-error"></i>Este campo no puede ir vacio</p>'); 
            }
            
            return isValid;
                
       };
       
       
       var onlyNumbers = function(e){
             -1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault();
        }
        
        
        var filterByDate = function(){
            
           $container.find('tbody').children('tr').show();
           var selected =  $("select#concepto_filter").multipleSelect('getSelects');
           
            $container.find('td.caja_concepto').filter(function(index){
                if($.inArray($(this).attr('id'),selected) == -1){
                     $(this).closest('tr').hide();
                 }
            });
           
           var from = $container.find('#fecha_filter_from').val();
           var to = $container.find('#fecha_filter_to').val();

           //Si almenos colocaron el filtro from
           if(from != '' && to == ''){
               
               $container.find('tbody').children('tr').show();
               
                from = $container.find('#fecha_filter_from').datepicker( "getDate" );
                to = $container.find('#fecha_filter_to').datepicker( "getDate" );
                
                var selected =  $("select#concepto_filter").multipleSelect('getSelects');
                $container.find('td.caja_concepto').filter(function(index){
                    if($.inArray($(this).attr('id'),selected) == -1){
                         $(this).closest('tr').hide();
                     }
                });
                
                
                $container.find('tbody').children('tr:visible').filter(function(index){
                    var datejs = new Date($(this).find('td:first-child').attr('data-time'));
                    if(datejs.getTime() < from.getTime()){
                        $(this).hide();
                    }
                });
            }else if(from != '' && to != ''){
                $container.find('tbody').children('tr').show();
                
                from = $container.find('#fecha_filter_from').datepicker( "getDate" );
                to = $container.find('#fecha_filter_to').datepicker( "getDate" );
                
                var selected =  $("select#concepto_filter").multipleSelect('getSelects');
                $container.find('td.caja_concepto').filter(function(index){
                    if($.inArray($(this).attr('id'),selected) == -1){
                         $(this).closest('tr').hide();
                     }
                });
                
                $container.find('tbody').children('tr:visible').filter(function(index){
                    var datejs = new Date($(this).find('td:first-child').attr('data-time'));
                    if(datejs.getTime() >= from.getTime() && datejs.getTime() <= to.getTime()){
                        $(this).show();
                    }else{
                        $(this).hide();
                    }
                });
            }
                
                calcularTotalIngresosEgresos();
        }
        
        var eliminarMovmiento = function(id){
           
           $.ajax({
            async:false,
            method:'GET',
            url:'/cajachica/movimientos/eliminarmovmiento',
            success: function (modalHTML) {
                var source = $('<div id="active_modal">' + modalHTML + '</div>');
                $container.find('table').after(source);
                //Evento eliminar
                source.find('a.eliminar').on('click',function(){
                    $.ajax({
                        dataType: 'json',
                        async:false,
                        method:'POST',
                        data:{id:id},
                        url:'/cajachica/movimientos/eliminarmovmiento',
                        success:function(data){
                            if(data.response == true){
                                $('#active_modal').children('.modal').closeModal();
                                $container.find('#balance').text(accounting.formatMoney(data.data.new_balance));
                                //Eliminamos el row
                                $('#active_modal').remove();
                                $container.find('tr#'+id).remove();
                                $('#movmiento_mensaje_eliminar').show();
                            }
                        }
                    });
                });
                $('#active_modal').children('.modal').openModal();
            }
            
        });
        
        
       }
       
       
       var editarMovimiento = function(id){
           $.ajax({
                async:false,
                method:'GET',
                url:'/cajachica/movimientos/editarmovmiento',
                data:{id:id},
                success: function (modalHTML) {
                    var source = $('<div id="active_modal">' + modalHTML + '</div>');
                    $container.after(source);
                    //Inicializamos el evento guardar
                    source.find('a.guardar').on('click',function(){
                        
                        var isValid = validateForm(source);
                        
                        if(isValid){

                            var movimiento = new Object();
                            //Guardamos nuestros datos 
                            $.each(source.find('input,select'),function(index,element){
                                movimiento[$(element).attr('name')] = $(element).val();                        
                            });

                            //Hacemos la peticion ajax
                            $.ajax({
                                type: 'POST',
                                dataType: 'json',
                                async: false,
                                data: movimiento,
                                url:'/cajachica/movimientos/editarmovmiento',
                                success: function(data) {
                                    if(data.response == true){
                                        //Cerramos el modal
                                        $('#active_modal').children('.modal').closeModal();
                                        //Actualizamos nuestro row
                                        $container.find('tr#'+data.caja.idcajachica).children('td').eq(0).text(data.caja.cajachica_fecha).attr('data-time',data.caja.caja_fecha_js);
                                        $container.find('tr#'+data.caja.idcajachica).children('td').eq(1).text(data.caja.conceptocajachica_nombre).attr('id',data.caja.idconceptocajachica);
                                        if(data.caja.cajachica_tipomovimiento == 'cargo'){
                                             $container.find('tr#'+data.caja.idcajachica).children('td').eq(2).removeClass('movmiento_vacio').text(accounting.formatMoney(data.caja.cajachica_cantidad));
                                             $container.find('tr#'+data.caja.idcajachica).children('td').eq(3).addClass('movmiento_vacio').text(' ---- ');
                                        }else{
                                             $container.find('tr#'+data.caja.idcajachica).children('td').eq(2).addClass('movmiento_vacio').text(' ---- ');
                                            $container.find('tr#'+data.caja.idcajachica).children('td').eq(3).removeClass('movmiento_vacio').text(accounting.formatMoney(data.caja.cajachica_cantidad));  
                                        }
                                        $container.find('tr#'+data.caja.idcajachica).children('td').eq(4).text(data.caja.cajachica_comprobante);
                                        $container.find('tr#'+data.caja.idcajachica).children('td').eq(5).text(data.caja.cajachica_pacientedoctor);
                                        $container.find('tr#'+data.caja.idcajachica).children('td').eq(6).text(data.caja.cajachica_nota);

                                         $container.find('#balance').text(accounting.formatMoney(data.caja.new_balance));
                                        //Eliminamos el row
                                        $('#active_modal').remove();
                                        $('#movmiento_mensaje_editar').show();
                                    }
                                }
                            });
                        }

                    });
                }
           });
           $('#active_modal').children('.modal').openModal();
       }
       
       
       plugin.init();
       
    }
 
})(jQuery)