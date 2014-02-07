$(document).on('ready',function(){
	table_bid();
	
	$('button.tambah').on('click',function(){
		tambah();
	});
	
});

$(window).bind("load", function() {
    $('#loading').fadeOut(2000);
});

function table_bid(){
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_base/table_bid",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
        	 	$('#dataTable').html(data);
        }
	});
}

function tambah(){
	$('#tambahBidang').dialog({
		title : 'Form Tambah Data Bidang',
		width : 'auto',
		height : 'auto',
		cache : false,
		show : 'fade',
		hide : 'fade',
	    resizable: false,
	    draggable : false,
	    position: ['center',40],
		modal : true,
		buttons: {
			'Close': function() { $(this).dialog('close'); }
		},
		resizable: false
	});
}