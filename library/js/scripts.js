$(document).ready(function(){
	$(".advancesearchoption .advancesearchbtn").click(function(){
		if($(".advance-search").is(":visible")){
			$(".advance-search").slideUp( "slow", function() {
			$(".advancesearchoption a").css("color","#747474");
			$(".advancesearchoption").css("border-bottom","#e1e1e1 solid 1px");
			
			});
			
		}else{
			$(".advancesearchoption a").css("color","#fff");
		$(".advance-search").slideDown( "slow", function() {
	
			$(".advancesearchoption").css("border-bottom","3px solid #E4A01E");
});
			
		}
	return false;
	})
$(".mdlinkcon .titleclick").append("<span></span>")
$(".mdlinkcon .titleclick").click(function(){
$(".mdlinkcon .titleclick").removeClass("active")

$(".mdlinkcon .view").next(".box").css("display","none")
var sibelem = $(this).addClass("active").next(".box")
if(sibelem.is(":hidden")){
$(".mdlinkcon .box,.mdlinkcon .view").hide()
	$(this).addClass("active").next(".box").stop(false,true).slideDown()
	
	$(this).siblings(".view").css("display","block")
	
	}else{
		$(this).removeClass("active").next(".box").stop(false,true).slideUp()
	$(this).siblings(".view").css("display","none")
		}
	
	return false;
})
$(".mdlinkcon .view").click(function(){
var sibelem = $(this).addClass("active").next(".box")
if(sibelem.is(":hidden")){
	$(this).addClass("active").next(".box").slideDown()
	$(this).siblings(".view").css("display","block")
	}else{
		$(this).removeClass("active").next(".box").slideUp()
	$(this).siblings(".view").css("display","none")
		}
	
	return false;
})
 $( "#priceslide" ).slider({
range: true,
min: 0,
max: 500,
values: [ 75, 300 ],
slide: function( event, ui ) {
$( ".max" ).text( "$" + ui.values[ 0 ]  ).append("<span></span>")
$( ".min" ).text( "$" + ui.values[ 1 ] ).append("<span></span>")
}
});


$("#priceslide .ui-slider-handle:first").addClass("amount01")
$("#priceslide .amount01").append("<span class='max pop'></span>")
$("#priceslide .ui-slider-handle").append("<span class='min pop'></span>")
$(".sidebar .titleclick a,.sidebar .view ").append("<span ></span>")
$(" .gallery-view .thumbs ul li").append("<div class='indicator' ></div>")

 $( ".max" ).text( "$" + $( "#priceslide" ).slider( "values", 0 ) ).append("<span></span>")
 $( ".min" ).text( "$" + $( "#priceslide" ).slider( "values", 1 ) ).append("<span></span>")
 
 /*Combobox*/
 $(".selectbox,.selectdef,.thisweekend").selectBox();

 $('.mdlinkcon input[type=checkbox], .menusearch input[type=checkbox]').each(function(){
	$(this).checkbox({
					className: 'jquery-switch',
					checkedClass: 'jquery-switch-on'
				});
 })

 	$(".homefactscol input[type=text]").Watermark("e.g. 'pool,' 'office,' or 'fireplace.' ","#b4b4b4");
 	$(".sidebar .searchwid input[type=text]").Watermark("Search"	,"#a1a1a1");
	
/*Galley View*/

$(".gallery-view .thumbs li").click(function(){
$(".gallery-view .thumbs li").removeClass("active")
	$(this).addClass("active");
	$(".illustrateimg img").hide()
	var indexcount = $(".gallery-view .thumbs li").index(this);
	$(".illustrateimg img").eq(indexcount ).stop(false,true).fadeIn("slow");
	return false;
})
	
}); //document.ready()


