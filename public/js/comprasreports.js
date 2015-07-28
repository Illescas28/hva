(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.comprasreports = function(data){
        var _this = $(this);
        var plugin = _this.data('comprasreports');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.comprasreports(this, data);
            
            _this.data('comprasreports', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.comprasreports = function(container, options){
        
        var plugin = this;
        
        /* 
        * Default Values
        */ 
       
       var defaults = {
           
       };
       
       /* 
        * Important Components
        */ 
        var $container = $(container);
        var $table = $container.find('table');
        
        var settings;
        
        /*
        * Private methods
        */

        var filter = function(){
            
            $container.find('tbody').children('tr').show();
            var selected = $("select#proveedor_filter").multipleSelect('getSelects');
            $container.find('td.proveedor_nombre').filter(function (index) {
                if ($.inArray($(this).attr('id'), selected) == -1) {
                    $(this).closest('tr').hide();
                }
            });
            
            var from = $container.find('#fecha_filter_from').val();
            var to = $container.find('#fecha_filter_to').val();
            
            if(from != '' && to == ''){
               
               $container.find('tbody').children('tr').show();
               
                from = $container.find('#fecha_filter_from').datepicker( "getDate" );
                to = $container.find('#fecha_filter_to').datepicker( "getDate" );
                
                var selected =  $("select#proveedor_filter").multipleSelect('getSelects');
                $container.find('td.proveedor_nombre').filter(function(index){
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
                
                var selected =  $("select#proveedor_filter").multipleSelect('getSelects');
                $container.find('td.proveedor_nombre').filter(function(index){
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
            
            calcularTotalMonto();
            
        }
        
        calcularTotalMonto = function(){
            $container.find('#row_report').remove();
            $row_report = $('<tr id="row_report" class="green lighten-5"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>');
            $td_report = $row_report.find('td').eq(2);
            
            var total = 0;
            $container.find('tbody').children('tr:visible').filter(function(index){
                total = (total + accounting.unformat($(this).find('td').eq(2).text()));
            });
            
            $td_report.text(accounting.formatMoney(total));
            
            $container.find('tbody').append($row_report);
            
            
        }
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            //Inicializamos el componente autcomplete de conceptos
           $.getJSON(
                '/catalogos/proveedor/getproveedores',
                function(data){

                    $.each(data,function(index,element){
                        //Inicilizamos el filtro de los conceptos
                         $container.find('select#proveedor_filter').append('<option value="'+element.value+'">'+element.label+'</option>');
                    });

                    $("select#proveedor_filter").multipleSelect({
                         selectAll:true,
                         allSelected:'Todos los proveedores',
                         selectAllText:'Todos los proveedores',
                         onClick : filter,
                         onCheckAll:filter,
                         onUncheckAll:filter,
                     });

                     $("select#proveedor_filter").multipleSelect("checkAll");

                }
            );
            
            //Inicializamos los calendarios
            $container.find('#fecha_filter_from').datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                onClose: function(dateText, inst){
                    filter();
                }
            });
            $container.find('#fecha_filter_to').datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                onClose: function(dateText, inst){
                    filter();
                }
            });
    
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
        
        
       
    }
    
    
    
})( jQuery );