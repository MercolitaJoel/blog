$.noConflict();

$(function(){
    //tooltip
    ("[data-toggle='tooltip']").hover(function(){
        $(this).tooltip();
    })

    //comment-form
    $(".comment-form").submit(function(e){
        e.preventDefault();
    })

    //submit button default disabled

    $("#submit-comment").click(function(e){
        e.preventDefault();

        $.ajax(
            {
                url:$(this).parent().attr('action'),
                method:'POST',
                data:{},
                success: function(data){
                    alert(result);
                }
            }
        );

    })
})