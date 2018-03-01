$(function() { 
	var $titlep = $("#previewTitle");

	$("#titletext").keyup(function() {
	    $titlep.val(this.value);
	    
        if(this.value == ""){
	    	$titlep.val("Default");
	    }
	});

	$("#cover").change(function() {
        
        $('#previewCover').error(function() {
            alert('Image link invalid');

            $("#previewCover").attr("src", "assets/preview.png");
            });

            $("#previewCover").attr("src", this.value);

            if (this.value == ""){
                $("#previewCover").attr("src", "assets/preview.png");
        }
    });

    $("#datepicker").change(function() {
    	var mydate = this.value;
    	console.log(mydate);
    	var str = Date.parse(mydate).toString("MMM d");

    	console.log(str);

        $("#previewDate").val("Date Added: " + str);

        if(this.value == ""){
        	$("#previewDate").val("Date Added: Month Day");
        }

        console.log("test");

        var newDate = Date.parse(mydate).toString("yyyy-MM-dd");

        console.log(newDate);

        $("#datepicker").val(newDate);
        console.log("Updated succesfully");


    });

    $("#rating").change(function() {
        if(this.value > 5 || this.value == 0){
            alert("Please only rate between 1-5");
            $("#rating").val("");
        }

        for(var i = 0; i < this.value; i++){

            var image = "#rating"+ i;
            var src = 'assets/star.png';

            $(image).attr('src', src);
        }

        if(this.value < 5){
            for(var x = this.value; x < 5; x++){

                var image2 = "#rating" + x;
                var src2 = "assets/not-star.png";
                $(image2).attr('src', src2);
            }
        }
        
        if(this.value == ""){
            for(var i = 0; i < 5; i++){

                var image = "#rating"+ i;
                var src = 'assets/not-star.png';

                $(image).attr('src', src);
            }
        }

    });

});











