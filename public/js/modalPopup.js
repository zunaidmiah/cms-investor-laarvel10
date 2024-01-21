function MyFunction(){
    var count = $("input.chkNumber:checked").length;
    
    if(count>0)
    {
      $('#modal-delete-selected-process').modal('show');
        var checkedValues = $('input.chkNumber:checked').map(function() {
          return this.value;
        }).get().join(',');
  
        $('#deletemultiple input[name=deleteid]').val(checkedValues);
    }
    else 
    {
        html =  '<div id="modal-not-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">';
        html += '<div class="modal-dialog">';
        html += '<div class="modal-content">';
        html += '<div class="modal-header">';
        html += '<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>';
        html += '<h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle" style="color: #428bca;"></i></a> Are you sure you want to delete the selected item(s)? </h4>'
        html += '</div>';
        html += '<div class="modal-body">';
        html += '<div class="alert alert-danger">';
        html += 'Please select at least one item to delete.';
        html += '</div>';
        html += '</div>';  // content
        html += '</div>';  // dialog
        html += '</div>';  // footer
        html += '</div>';  // modalWindow
        $('body').append(html);
        $("#modal-not-selected").modal();
        $("#modal-not-selected").modal('show');
  
        $('#modal-not-selected').on('hidden.bs.modal', function (e) {
            $(this).remove();
        });
  
      // $('#modal-not-selected').modal('show');
    }
  }
  
  
  function getAllChecked(){
    var count = $("input.chkNumber:checked").length;
  }