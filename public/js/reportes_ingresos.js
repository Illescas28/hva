(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.ingresosreports = function(data){
        var _this = $(this);
        var plugin = _this.data('ingresosreports');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.ingresosreports(this, data);
            
            _this.data('ingresosreports', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.ingresosreports = function(container, options){
        
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
        
        calcularTotalIngresos = function(){
            $table.find('#row_report').remove();
            $row_report = $('<tr id="row_report" class="green lighten-5"><td></td><td></td></tr>');
            $td_report = $row_report.find('td').eq(1);
            
            var total = 0;
            $table.find('tbody').children('tr:visible').filter(function(index){

                total = (total + accounting.unformat($(this).find('td').eq(1).text()));
            });
            
            $td_report.text(accounting.formatMoney(total));
            
            $table.find('tbody').append($row_report);
            
            
        }

       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            //Inicializamos la fecha
            container.find('input#fecha_from').pickadate({
                monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                weekdaysLetter: ['D', 'L', 'M', 'MI', 'J', 'V', 'S'],
                today: 'Hoy',
                close: 'Cerrar',
                clear: 'Eliminar',
                formatSubmit: 'yyyy-mm-dd',

            });
            
            container.find('input#fecha_to').pickadate({
                monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                weekdaysLetter: ['D', 'L', 'M', 'MI', 'J', 'V', 'S'],
                today: 'Hoy',
                close: 'Cerrar',
                clear: 'Eliminar',
                formatSubmit: 'yyyy-mm-dd',
                format: 'dd-mm-yyyy',

            });
            
            
            //El evento generar reporte
            $container.find('#generar_reporte').on('click',function(){
                
            });
            
            calcularTotalIngresos();
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );