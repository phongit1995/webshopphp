
// $(document).ready(function () {
// 	$.get('/skin', function (data) {
// 		$('.tim-theo-trang-phuc').typeahead({source: data,});
// 	}, "json");
// 	$.get('/champion', function (data) {
// 		$('.tim-theo-tuong').typeahead({source: data})
// 	}, "json");
// });
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

$(document).ready(function() {
		console.log(getUrlParameter('tim-theo-rank'));

		if(getUrlParameter('tim-theo-rank') !== undefined) $("select[data-filter='tim-theo-rank']").val(getUrlParameter('tim-theo-rank'));
        if(getUrlParameter('tim-theo-khung') !== undefined) $("select[data-filter='tim-theo-khung']").val(getUrlParameter('tim-theo-khung'));
        if(getUrlParameter('tim-theo-gia') !== undefined) $("select[data-filter='tim-theo-gia']").val(getUrlParameter('tim-theo-gia'));
        if(getUrlParameter('tim-theo-tuong') !== undefined) $("input[data-filter='tim-theo-tuong']").val(getUrlParameter('tim-theo-tuong'));
        if(getUrlParameter('tim-theo-trang-phuc') !== undefined) $("input[data-filter='tim-theo-trang-phuc']").val(getUrlParameter('tim-theo-trang-phuc'));
        if(getUrlParameter('tim-theo-bac-ngoc') !== undefined) $("select[data-filter='tim-theo-bac-ngoc']").val(getUrlParameter('tim-theo-bac-ngoc'));
        if(getUrlParameter('tim-theo-tuong-ip-tt') !== undefined) $("select[data-filter='tim-theo-tuong-ip-tt']").val(getUrlParameter('tim-theo-tuong-ip-tt'));
	
	

  
});

