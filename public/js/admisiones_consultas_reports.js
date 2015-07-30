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
           
           var date_array = appdate.split('-');
           var dateJS = new Date();
           dateJS.setDate(parseInt(date_array[0]));
           dateJS.setMonth(parseInt(date_array[1]) - 1);
           dateJS.setYear(date_array[2]);
           dateJS.setHours(0,0,0);
           
           return dateJS;
           
       }
       
       var appToJsTime = function(apptime){
            var hours = Number(apptime.match(/^(\d+)/)[1]);
            var minutes = Number(apptime.match(/:(\d+)/)[1]);
            var AMPM = apptime.match(/\s(.*)$/)[1];
            if(AMPM == "PM" && hours<12) hours = hours+12;
            if(AMPM == "AM" && hours==12) hours = hours-12;
            var sHours = hours.toString();
            var sMinutes = minutes.toString();
            if(hours<10) sHours = "0" + sHours;
            if(minutes<10) sMinutes = "0" + sMinutes;
            
            var date = new Date();
            date.setDate(1);
            date.setMonth(0);
            date.setYear(1990);
            date.setHours(sHours,sMinutes,0);
            return date;
           
       }

        var filter = function(){

            $table.find('tbody').children('tr').show();
            //Filtrado fecha_from
            if(settings.filters.fecha_from !== ''){
                
                $table.find('tbody').children('tr:visible').filter(function(){
                    var tr_date = $(this).find('td').eq(0).text();
                    tr_date = appToJsDate(tr_date);
                    
                    if(settings.filters.fecha_from.getTime() > tr_date.getTime()){
                        $(this).hide();
                    }
                }); 
            }
            //Filtrado fecha_to
            if(settings.filters.fecha_to !== ''){
                filterDate = settings.filters.fecha_to;
                var filterDay = settings.filters.fecha_to.getDate() + 1;
                filterDate.setDate(settings.filters.fecha_to.getDate() + 1);
                $table.find('tbody').children('tr:visible').filter(function(){
                    var tr_date = $(this).find('td').eq(0).text();
                    tr_date = appToJsDate(tr_date);
                    //console.log(filterDate);
                    if(settings.filters.fecha_to < tr_date.getTime()){
                        $(this).hide();
                    }
                });
            }
            
            //Filtrado hora_from
            if(settings.filters.hora_from !== ''){
                $table.find('tbody').children('tr:visible').filter(function(){
                    var tr_time = $(this).find('td').eq(1).text();
                    tr_time = appToJsTime(tr_time);
                    console.log(tr_time);
                    if(settings.filters.hora_from > tr_time.getTime()){
                        $(this).hide();
                    }
                });
            }
            //Filtrado hora_to
            if(settings.filters.hora_to !== ''){
                $table.find('tbody').children('tr:visible').filter(function(){
                    var tr_time = $(this).find('td').eq(1).text();
                    tr_time = appToJsTime(tr_time);
                    console.log(tr_time);
                    if(settings.filters.hora_to < tr_time.getTime()){
                        $(this).hide();
                    }
                });
            }
            //Filtrado tipo
            if(settings.filters.tipo.length > 0){
                $table.find('tbody').children('tr:visible').filter(function(){
                     var tr_tipo = $(this).find('td').eq(5).text();    
                     if($.inArray(tr_tipo,settings.filters.tipo) == -1){
                        $(this).hide();   
                     }
                });  
            }
            //Filtrado medico
            if(settings.filters.medico.length > 0){
                $table.find('tbody').children('tr:visible').filter(function(){
                     var tr_medico = $(this).find('td').eq(4).text();    
                     if($.inArray(' '+tr_medico,settings.filters.medico) == -1){
                        $(this).hide();   
                     }
                });  
            }
            //Filtrado paciente
            if(settings.filters.paciente.length > 0){
                $table.find('tbody').children('tr:visible').filter(function(){
                     var tr_paciente = $(this).find('td').eq(3).text();    
                     if($.inArray(' '+tr_paciente,settings.filters.paciente) == -1){
                        $(this).hide();   
                     }
                });  
            }
            //Filtrado paciente
            if(settings.filters.movimiento.length > 0){
                $table.find('tbody').children('tr:visible').filter(function(){
                     var tr_movimiento = $(this).find('td').eq(2).text();    
                     if($.inArray(' '+tr_movimiento,settings.filters.movimiento) == -1){
                        $(this).hide();   
                     }
                });  
            }
            
            
            
          
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
                            filter();
                         },
                         onCheckAll: function(){
                            settings.filters.paciente = $("select#paciente_filter").multipleSelect('getSelects','text');
                            filter();
                         },
                         onUncheckAll:function(){
                            settings.filters.paciente = $("select#paciente_filter").multipleSelect('getSelects','text');
                            filter();
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
                            filter();
                         },
                         onCheckAll: function(){
                            settings.filters.medico = $("select#medico_filter").multipleSelect('getSelects','text');
                            filter();
                         },
                         onUncheckAll:function(){
                            settings.filters.medico = $("select#medico_filter").multipleSelect('getSelects','text');
                            filter();
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
                    settings.filters.tipo = $("select#tipo_filter").multipleSelect('getSelects');
                    filter();
                 },
                 onCheckAll: function(){
                    settings.filters.tipo = $("select#tipo_filter").multipleSelect('getSelects');
                    filter();
                 },
                 onUncheckAll:function(){
                    settings.filters.tipo = $("select#tipo_filter").multipleSelect('getSelects');
                    filter();
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
                    filter();
                 },
                 onCheckAll: function(){
                    settings.filters.movimiento = $("select#movimiento_filter").multipleSelect('getSelects','text');
                    filter();
                 },
                 onUncheckAll:function(){
                    settings.filters.movimiento = $("select#movimiento_filter").multipleSelect('getSelects','text');
                    filter(); 
                    
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
                     filter();
                     
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
                     settings.filters.fecha_to = date_js;
                     filter();
                },
            });
            
            container.find('#hora_from,#hora_to').lolliclock({autoclose:true});
            
            container.find('#hora_from').on('change',function(){
                    var hora_from = $(this).val();
                    var hora_from_js = appToJsTime(hora_from);
                    settings.filters.hora_from = hora_from_js;
                    filter();
            });
            
            container.find('#hora_to').on('change',function(){
                    var hora_to = $(this).val();
                    var hora_to_js = appToJsTime(hora_to);
                    settings.filters.hora_to = hora_to_js;
                    filter();
            });
             
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
        
        
       
    }
    
    
    
})( jQuery );