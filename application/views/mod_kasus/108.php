<script>
$(document).ready(function(){

    $("#AddCol").hide();
	$("#hpsCol").hide();


});
	$('button#AddColl').on('click',function(){
            $('.tg > tbody:last').append('<tr>'+
            '<td class="colisi">'+
                '<select>'+
                    '<option>--Pilih Kab ....</option>'+
                    '<?php
                $kabupaten= $this->db->query('select * from master.m_kabupaten');
                foreach ($kabupaten->result() as $kab) {
                    ?><option value="<?php echo $kab->kd_kab; ?>"><?php echo $kab->nama_kab; ?></option><?php } ?>'+
                '</select>'+
            '</td>'+
            '<td class="colisi">'+
                '<input type="text" id="hiv">'+
            '</td>'+
            '<td class="colisi">'+
            	'<input type="text" id="hiv">'+
        	'</td>'+
        	'<td class="colisi">'+
            	'<input type="text" id="hiv">'+
        	'</td>'+
        	'<td class="colisi">'+
        		'<input type="text" id="hiv">'+
    		'</td>'+
    		'<td class="colisi">'+
        		'<input type="text" id="hiv">'+
    		'</td>'+
    		'<td class="colisi">'+
    			'<input type="text" id="hiv">'+
			'</td>'+
			'<td class="colisi">'+
    		'<input type="text" id="hiv">'+
			'</td>'+
			'<td class="colisi">'+
				'<input type="text" id="hiv">'+
			'</td>'+
            '<td class="colisi">'+
                '<input type="text" id="hiv" style="width:200px;">'+
            '</td>'+
        '</tr>');
	});

        $('button#hpsColl').on('click',function(){
            $('.tg tr:last').remove();
	});
</script>

<table class="tg">
    <tr>
        <th class="colhead" rowspan="4" width="100">Wilayah<br></th>
        <th class="colhead" colspan="4" width="70">Pelaku Berdasaka Tingkat Pendidikan<br></th>
        <th class="colhead" rowspan="4" width="200">Keterangan</th>
    </tr>
    <tr>
    	<th class="colhead" colspan="2" width="70">SD<br></th>
        <th class="colhead" colspan="2" width="70">SLTP<br></th>
        <th class="colhead" colspan="2" width="70">SLTA<br></th>
        <th class="colhead" colspan="2" width="70">SARJANA<br></th>
    </tr>
    <tr>
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
    </tr>
    <tr>
        <td class="colisi">
            <select>
                <option>--Pilih Kab ....</option>
				<?php
                $kabupaten= $this->db->query('select * from master.m_kabupaten');
                foreach ($kabupaten->result() as $kab) {
                    ?><option value="<?php echo $kab->kd_kab; ?>"><?php echo $kab->nama_kab; ?></option><?php } ?>
            </select>
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv" style="width:200px;">
        </td>
    </tr>
</table>
<button id="AddColl" type="button">Tambah</button>

<button id="hpsColl" type="button">Hapus</button>