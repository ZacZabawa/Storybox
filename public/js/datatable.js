$(document).ready( function () {
    $('users').DataTable({
    	"processing": true,
  		"serverSide": true,
  		"ajax": {
    		"url": "/app/Datatables/UsersDataTable.php",
    		"type": "POST"
    	}
    });
} );
