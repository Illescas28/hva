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
                   }
            );
    
            //Incializamos el select de tipo de movimiento
            $container.find('select[name=cajachica_tipomoviento]').material_select();
            
            //Incializamos el input cantidad
            $container.find('input[name=cajachica_cantidad]').on('keydown',onlyNumbers);
            
    
            //Incializamos evento guardar
            $container.find('#cajachica_guardar').on('click',function(){
                var isValid = validateForm();
                
                /*Si el formulario es valido, guardamos*/
                if(isValid){
                    
                    var movimiento = new Object();
                    //Guardamos nuestros datos 
                    $.each($container.find('input,select'),function(index,element){
                        if($(element).val() != ''){
                            movimiento[$(element).attr('name')] = $(element).val();
                        }
                        
                    });
                    
                    //Hacemos la peticion ajax
                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        async: false,
                        data: movimiento,
                        url:'/cajachica/concepto/movimientos/nuevomovimiento',
                        success: function (data) {
                            console.log(data);
                        }
                        
                    });

                }
            });

       }

       /* 
        * Private methods
        */
       
       var validateForm = function(){
               
            var isValid = true;
            $container.find('p.input-error-show').remove();
            
            if($container.find('select[name=cajachica_tipomoviento]').val() == '' || $container.find('select[name=cajachica_tipomoviento]').val() == null){
                isValid = false;
                $container.find('select[name=cajachica_tipomoviento]').after('<p class="input-error-show"> <i class="tiny mdi-alert-error"></i>Este campo no puede ir vacio</p>'); 
            }
            if($container.find('input[name=cajachica_concepto]').val() == '' ){
                isValid = false;
                $container.find('input[name=cajachica_concepto]').after('<p class="input-error-show"> <i class="tiny mdi-alert-error"></i>Este campo no puede ir vacio</p>'); 
            }
            if($container.find('input[name=cajachica_cantidad]').val() == '' ){
                isValid = false;
                $container.find('input[name=cajachica_cantidad]').after('<p class="input-error-show"> <i class="tiny mdi-alert-error"></i>Este campo no puede ir vacio</p>'); 
            }
            
            return isValid;
                
       };
       
       var onlyNumbers = function(e){
             -1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault();
        }
       
       
       plugin.init();
       
    }
 
})(jQuery)