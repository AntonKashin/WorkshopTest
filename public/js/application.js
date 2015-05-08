$(function() {
	var TimeOut;
	function startRefresh() {
	  clearInterval(TimeOut);
	  TimeOut= setTimeout(startRefresh, 5000);
		if ($(".prevent_refresh").length == 0)
			$('#wrapper').load($(location).attr('href') + ' .container');
	}
	TimeOut= setTimeout(startRefresh, 5000);
});
