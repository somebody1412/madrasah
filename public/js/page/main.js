function showLoader(){
    $('.page-loader').fadeIn('slow');
}

function hideLoader(){
    $('.page-loader').fadeOut('slow');
}


$(document).ready(function(){

    //localization
    // $('.language-select').change(function(){
    //     showLoader();
    //     location.href=$(this).val();
    // });

    //Page loader
    $('.page-loader').fadeOut('slow');

})
