function validateForm() {
    var title = document.forms["myForm"]["title"].value;
    var rating = document.forms["myForm"]["rating"].value;
    var intRating = parseInt(rating);
    var cover = document.forms["myForm"]["cover"].value;
    var date = document.forms["myForm"]["date"].value;
    if (title == null || title == "") {
        alert("Title must be filled out");
        return false;
    }else if (rating == null || rating == "" || intRating > 5 ) {
        alert("Rating must be filled out and be between 1-5");
        return false;
    }else if (cover == null || cover == "") {
        alert("Cover must be filled out");
        return false;
    }else if (date == null || date == "") {
        alert("Date must be filled out");
        return false;
    }
}