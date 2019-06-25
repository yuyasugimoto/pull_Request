$(function () {
    $(".apply").click(function(){
        
        var update_number = $(this).parents('tr').find('.number').text();
        var assign_user = $(this).parents('tr').find('select[name=assign]').val();
        var assign_year = $(this).parents('tr').find('select[name=year]').val();
        var assign_month = $(this).parents('tr').find('select[name=month]').val();
        var assign_day = $(this).parents('tr').find('select[name=day]').val();

        $.ajax({
           url : "/post/pull-request",
           method: "post",
           data: {
               "request_number": update_number,
               "assign_user": assign_user,
               "assign_day": assign_year + "-" + assign_month + "-" + assign_day
           },
           headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).done(function (data) {
            alert("success");
        });
    });
});