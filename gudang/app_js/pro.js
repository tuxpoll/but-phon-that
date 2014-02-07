$(document).on('ready',function(){
	table_ins();
	
	$('button.tambah').on('click',function(){
		tambah();
	});
	
});

$(window).bind("load", function() {
    $('#loading').fadeOut(2000);
});

function table_ins(){
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_base/table_pro",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
        	 	$('#dataTable').html(data);
        }
	});
}

function tambah(){
	$('#tambahPropinsi').dialog({
		title : 'Form Tambah Data Propinsi',
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