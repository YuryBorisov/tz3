$(document).ready(function () {

    $(document).on('click', '.user-id', function(){
        var t = $(this);
        if(t.attr('status') == 'off'){
            t.attr('status', 'on');
            $.post('/parents', {id: $(this).attr('p-i')}, function (data) {
                if(data.response.status == 'success'){
                    if(data.response.data.length > 0){
                        var html = '';
                        data.response.data.forEach(function (i) {
                            html +=  '<tr class="item" id-pp="'+i.id+'">'+
                                '<td status="off" class="user-id" p-i="'+i.id+'">'+i.id+'</td>'+
                                '<td>'+i.firstname+' '+i.lastname+'</td>'+
                                '<td>'+i.email+'</td>'+
                                '<td>'+i.count+'</td>'+
                                '</tr>';
                        });
                        t.parents('.item').after(html);
                    }else{
                        alert('Пусто');
                    }
                }
            }, 'json');
        }
    });

});