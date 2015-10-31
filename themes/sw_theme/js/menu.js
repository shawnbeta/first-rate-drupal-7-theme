jQuery(document).ready(function(){

    jQuery('.swMenuToggler').click(function(e){
        var navWrapper = jQuery('.navWrapper');
        var mask = jQuery('.mask');
        var topPosition = jQuery('body').scrollTop();
        e.preventDefault();
        jQuery('mask').css({ display: 'block'});

        if( navWrapper.css('display') == 'none' ){
            mask.css({ display: 'block'});
            navWrapper.css({ display: 'block', top: topPosition});
        }else{
            mask.css({ display: 'none'});
            navWrapper.css({ display: 'none'});
        }

    });



});

