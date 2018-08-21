// $('.btn-block').on('click',function(){
//             var id=$(this).data('id');
//             alert(id);
    $('.modal-body').html('loading');
       $.ajax({
        type: 'POST',
        url: 'namas.php',
        data:{id: id},
        success: function(data) {
          $('.modal-body').html(data);
        },
        error:function(err){
          alert("error"+JSON.stringify(err));
        }
    })
 });
