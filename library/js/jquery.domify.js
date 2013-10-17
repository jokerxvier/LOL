(function($) {
		$.fn.domifytabs = function(options){
			var defaults = {
				plugin = ''
			}
			var options = $.extend(defaults, options);
			var base = this;
	
			var indexcount  = 0;
			var parentvar = $(".tabs").children("li")
			this.each(function(){
			
				if(options.plugin == "tabs"){
					parentvar.click(function(){
					 //Declaration
					 thisvar = $(this);
					parentvar.removeClass("active")
					thisvar.addClass("active")
						var indexcount =  thisvar.parent(".tabs").children("li").index(this);
						alert(indexcount)
					 })
					}
				 
			})
		}
})(jQuery);

