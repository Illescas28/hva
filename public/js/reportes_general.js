(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.generalreport = function(data){
        var _this = $(this);
        var plugin = _this.data('generalreport');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.generalreport(this, data);
            
            _this.data('generalreport', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.generalreport = function(container, options){
        
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

       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            console.log('entro');
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );