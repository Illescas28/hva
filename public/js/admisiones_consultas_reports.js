(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.admisionesreports = function(data){
        var _this = $(this);
        var plugin = _this.data('admisionesreports');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.admisionesreports(this, data);
            
            _this.data('admisionesreports', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.admisionesreports = function(container, options){
        
        var plugin = this;
        
        /* 
        * Default Values
        */ 
       
       var defaults = {
           movimientos: new Array(),
           filters:{
               fecha_from:'',
               fecha_to:'',
               hora_from:'',
               hora_to:'',
               tipo: new Array(),
               medico: new Array(),
               paciente: new Array(),
               movimiento: new Array(),
           },
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
       
       var appToJsDate = function(appdate){
           
           date_array = appdate.split('-');
           var dateJS = new Date();
           dateJS.setDate(parseInt(date_array[0]));
           dateJS.setMonth(parseInt(date_array[1]) - 1);
           dateJS.setYear(date_array[2]);
           
           return dateJS;
           
       }

        var filter = function(){
            
            //Cada vez que se entre a esta funcion vamos a tomar todos los valores y vamos hacer el filtrado en la tabla
            var fecha_from = $container
            
            console.log(settings.filters);
            //console.log(settings.filters);
        }
        
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            //console.log(settings);
            
            //Inicializamos el componente autcomplete de conceptos
           $.getJSON(
                '/pacientes/getpacientes',
                function(data){
                    $.each(data,function(index,element){
                        //Inicilizamos el filtro de los conceptos
                         $container.find('select#paciente_filter').append('<option value="'+element.value+'">'+element.label+'</option>');
                    });

                    $("select#paciente_filter").multipleSelect({
                         selectAll:true,
                         filter: true,
                         allSelected:'Todos los pacientes',
                         selectAllText:'Todos los pacientes',
                         onClick : function(){
                            settings.filters.paciente = $("select#paciente_filter").multipleSelect('getSelects','text');
                         },
                         onCheckAll: function(){
                            settings.filters.paciente = $("select#paciente_filter").multipleSelect('getSelects','text');
                         },
                         onUncheckAll:function(){
                            settings.filters.paciente = $("select#paciente_filter").multipleSelect('getSelects','text');
                         },
                     });

                     $("select#paciente_filter").multipleSelect("checkAll");

                }
            );
    
           
           $.getJSON(
                '/catalogos/medico/getmedicos',
                function(data){

                    $.each(data,function(index,element){
                        //Inicilizamos el filtro de los conceptos
                         $container.find('select#medico_filter').append('<option value="'+element.value+'">'+element.label+'</option>');
                    });

                    $("select#medico_filter").multipleSelect({
                         selectAll:true,
                         filter: true,
                         allSelected:'Todos los medicos',
                         selectAllText:'Todos los medicos',
                         onClick : function(){
                            settings.filters.medico = $("select#medico_filter").multipleSelect('getSelects','text');
                         },
                         onCheckAll: function(){
                            settings.filters.medico = $("select#medico_filter").multipleSelect('getSelects','text');
                         },
                         onUncheckAll:function(){
                            settings.filters.medico = $("select#medico_filter").multipleSelect('getSelects','text');
                         },
                     });

                     $("select#medico_filter").multipleSelect("checkAll");

                }
            );
    
            $("select#tipo_filter").multipleSelect({
                 selectAll:true,
                 filter: true,
                 allSelected:'Todos los tipos',
                 selectAllText:'Todos los tipos',
                 onClick : function(){
                    settings.filters.tipo = $("select#tipo_filter").multipleSelect('getSelects','text');
                 },
                 onCheckAll: function(){
                    settings.filters.tipo = $("select#tipo_filter").multipleSelect('getSelects','text');
                 },
                 onUncheckAll:function(){
                    settings.filters.tipo = $("select#tipo_filter").multipleSelect('getSelects','text');
                 },
             });

             $("select#tipo_filter").multipleSelect("checkAll");
             
             
             $.each(settings.movimientos,function(index,element){
                $container.find('select#movimiento_filter').append('<option value="'+index+'">'+index+'</option>');
             });
             
             $("select#movimiento_filter").multipleSelect({
                 selectAll:true,
                 filter: true,
                 allSelected:'Todos los movimientos',
                 selectAllText:'Todos los movimientos',
                 onClick : function(){
                    settings.filters.movimiento = $("select#movimiento_filter").multipleSelect('getSelects','text');
                 },
                 onCheckAll: function(){
                    settings.filters.movimiento = $("select#movimiento_filter").multipleSelect('getSelects','text');
                 },
                 onUncheckAll:function(){
                    settings.filters.movimiento = $("select#movimiento_filter").multipleSelect('getSelects','text');
                 },
             });

             $("select#movimiento_filter").multipleSelect("checkAll");
             
             //Inicializamos la fecha
            container.find('input#fecha_from').pickadate({
                monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                weekdaysLetter: ['D', 'L', 'M', 'MI', 'J', 'V', 'S'],
                today: 'Hoy',
                close: 'Cerrar',
                clear: 'Eliminar',
                formatSubmit: 'yyyy-mm-dd',
                format: 'dd-mm-yyyy',
                onSet: function(){
                     var date_from = container.find('input#fecha_from').val();
                     var date_js = appToJsDate(date_from);
                     settings.filters.fecha_from = date_js;
                     
                },
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
                onSet: function(){
                     var date_from = container.find('input#fecha_to').val();
                     var date_js = appToJsDate(date_from);
                     settings.filters.fecha_from = date_js;
                },
            });
            
            container.find('#hora_from,#hora_to').lolliclock({autoclose:true});
            
            container.find('#hora_from').on('change',function(){
                
            });
             

        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
        
        
       
    }
    
    
    
})( jQuery );