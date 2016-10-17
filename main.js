(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();
        
        
        
        /*==========================================================================================
        ============================ THIS PLUGIN USED ALL.HTML FILE ================================
        ============================================================================================*/
        $(function () {
            jQuery.scrollUp();
        });
        
        /*==========================================================================================
        ==================== THIS PLUGIN USED ABOUT.HTML(LINE NO : 116) ============================
        ============================================================================================*/
        jQuery('.skillbar').each(function(){
            jQuery(this).find('.skillbar-bar').animate({
                width:jQuery(this).attr('data-percent')
            },4000);
        });
        
    });
    

    jQuery(window).load(function(){

        
    });


}(jQuery));	