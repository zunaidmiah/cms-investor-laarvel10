$(document).ready(function(){
$.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/admin/newscenter/getannouncements',
        method: 'post',
        dataType: 'json',
        data: {

        },
        success: function(data) {
for (var i = 0; i < data.length; i++) {

}
        },
        error: function(error) {

        }
    });
});