var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    

     mix.sass('mixer.scss','public/css');
     mix.sass('creative_template_mixer.scss','public/css'); 

     
    mix.scripts([
        'Plug-jquery-1.11.3.min.js',        
       /* 'Plug-bootstrap-notify.min.js',        
        'Plug-bootstrap.min.js',
        'Plug-smooth_scroll.js',
        'Plug-wow.js',
        'Plug-jquery.waypoints.min.js',
        'Plug-inview.min.js',
        'Plug-chosen.jquery.js',
        'Plug-ImageSelect.jquery.js',
        'Plug-jquery.maxcharwarning.min.js',
        'Plug-barraprogreso.js',
        'Plug-rating-plugin.js',
        'Plug-bxSlider.js',
        'Plug-jquery.tooltip.min.js',
        'Plug-validator-Boostrap.js',
        'Plug-texarea-Te_v1.js',
        'Plug-bootstrap-fileinput v4.3.7.js',
        'Plug-slippry.js',
        'Plug-image-dropdown.js',
        'ekko-lightbox.js',*/
        'Plug-slippry.js',
        'Template_creative/jquery.js',
        'Template_creative/bootstrap.bundle.js',
        'Template_creative/jquery.easing.js',        
        'Template_creative/scrollreveal.js',
        'Template_creative/jquery.magnific-popup.js',
        'Template_creative/creative.js',
         'Template_creative/jquery.easing.compatibility.js',
        'inicio.js',
        /*'mis-animations.js',
        'mis-funciones_personalizadas.js',
        'mis-funciones_personalizadas_para_GoogleAnalitics.js',        
        'mis-muestra_barra_de_carga.js',
        'mis-selects.js',
        'mis-validaciones.js',
        'mis-errores_personalizados.js',        
        'mis-scrollA.js',
        'Plug-VentanasModals.js',
        'mis-ventanas_modals.js',
        'Plug-EasyAutoComplete.js',
        'Plug-Scroll-Too.js',
        'mis-disparador_De_Form.js',
        
        'mis-tooltips.js',
        'mis-flechitas-autopocicionadas.js',
        'mis-botones_para_adjuntar.js',
        'mis-textareas.js',
        'mis-file_input.js',*/
        'mis-sliders.js',
        'fin.js']);


    elixir(function(mix) {
            mix.version(['css/mixer.css', 'css/creative_template_mixer.css', 'js/all.js']); 
    });

    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/build/fonts/bootstrap');
});
