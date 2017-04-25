$(function(){
	$('#upload').on('click', function() {
		var file = $('#sortpicture').prop('files')[0];
		var fmData = new FormData();
		var data = null;
		fmData.append('file', file);
		$.ajax({
			url: 'upload.php',
			type: 'post',
			contentType: false,
			processData: false,
			data: fmData,
			success: function(_data){
				data = _data;
			},
			error: function (request, message, error) {
				console.log(request, message, error);
				data = null;
			}
		}).done(function () {
			afterdo(data);
		});
	});

	function afterdo(data) {
		$('.ajax-info').html(data);
		$('.ajax-info').show();
	}
});