(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.asignacion = function(data){
        var _this = $(this);
        var plugin = _this.data('asignacion');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.asignacion(this, data);
            
            _this.data('asignacion', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.asignacion = function(container, options){
        
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
        
        var settings;
        
        /*
        * Private methods
        */

       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            $container.find('#radioNuevaAdmision p, #radioNuevaConsulta p').on('click',function(){
                $container.find('#agendarCita').hide();
            });
            
            $container.find('#agendarCita p').on('click',function(e){
                e.preventDefault();
                $container.find('#radioNuevaAdmision, #radioNuevaConsulta').hide();
                $(this).find('input').prop('checked',true);
            });
            
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );