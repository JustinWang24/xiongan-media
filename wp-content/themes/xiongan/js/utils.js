jQuery(document).ready(function(){
    jQuery('.feature-news-trigger').on('click',function(e){
        e.preventDefault();
        console.log(jQuery(this).data('goto'));
    });
});