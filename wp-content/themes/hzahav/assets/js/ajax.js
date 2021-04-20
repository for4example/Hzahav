$(document).ready(function(){

$('.misha_loadmore').click(function(){
 
    var button = $(this),
        data = {
        'action': 'loadmore',
        'query': posts, // that's how we get params from wp_localize_script() function
        'page' : current_page
    };
    // console.log(data);
    $.ajax({ // you can also use $.post here
        url : ajaxurl, // AJAX handler
        data : data,
        type : 'POST',
        beforeSend : function ( xhr ) {
            button.val('Loading...'); // change the button text, you can also add a preloader image
        },
        success : function( data ){
            if( data ) { 
                $('.project-content__blocks').append( data );
                button.val( 'More posts' ); // insert new posts
               current_page++;

                if ( current_page == max_page ) 
                    button.remove(); // if last page, remove the button

                // you can also fire the "post-load" event here if you use a plugin that requires it
                // $( document.body ).trigger( 'post-load' );
            } else {
                button.remove(); // if no data, remove the button as well
            }
        },
        error: function( jqXHR, status, errorThrown ){
            console.log( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
          }
    });
});
});