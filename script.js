$(document).ready(function () {
	var square = $(".square");
	var result_green = $(".result-area-green");
	var result_red = $(".result-area-red");
	var calcBtn = $("#calc-btn");
	var reset = $("#reset");
	var n = $("#rows-and-columns").val();
	// resultArea.hide();
	if(n == "")
	{
		square.hide();
		calcBtn.hide();
		reset.hide();
	}
	else
	{
		square.show();
		calcBtn.show();
		reset.show();
	}

	$("#reset").click(function () {
		result_green.hide();
		result_red.hide();
		square.hide();
		calcBtn.hide();
		reset.hide();
		$("#rows-and-columns").val("");
	})

	$("#okay").click(function () {
		result_green.hide();
		result_red.hide();
		n = $("#rows-and-columns").val();
		if(n == 0)
		{
			square.hide();
		}
		else
		{
			var row = $("<div class='div-border'></div>");
			square.text("");
			for(var i=0;i<n;i++)
			{
				var input = "";
				for(var j=0;j<n;j++)
				{
					input += "<input type='number' name='input"+i+''+j+"' class='inpt' id='input' placeholder='row"+[i+1]+"col"+[j+1]+"' required >";
				}
				row.append(input);
				row.append("<br/>");
			}
			square.append(row);
			square.show();
			calcBtn.show();
			reset.show();
		}
	});
	if(window.showBorder) {
		for(var i=0;i<n;i++)
		{
			$(".inpt[name='input"+i+""+(n-1-i)+"']").addClass("red");
			$(".inpt[name='input"+i+""+i+"']").addClass("green");
		}
	}
});