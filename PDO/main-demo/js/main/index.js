$(document).ready(() => {
  $('#add-button').click(() => {
    $('#user-form')[0].reset();
    $('.modal-title').text("Add User");
    $('#action').val("Add");
    $('#operation').val("Add");
    $('#user_upload_image').html('');
  })
});

var dataTable = $('#user-data').DataTable({
  "processing": true,
  "serverSide": true,
  "order": [],
  "ajax": {
    url: "fetch.php",
    method: "POST"
  },
  "columnDefs":[
    {
    "target": [],
    "orderable": false
    }
  ]
});
