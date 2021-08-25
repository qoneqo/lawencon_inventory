$(".item-purchase-banner").remove();
// $('.purchase-banner-active.header-fixed .t-header').css('top', '0')

$(document).ready(function () {
	$(".i-datatable").DataTable({
		// responsive: true,
		searching: false,
		dom: "Bfrtip",
		buttons: ["copy", "csv", "excel", "pdf", "print"],
	});

	$(".datepicker").datepicker({
		dateFormat: "yy-mm-dd",
	});
});
