<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
                                                <title>Online Store</title>
</head>

<body>


<h1> MY To-Do List </h1>
<input type="text" placeholder="New item" />
<button id="add">Add</button>
<ol id="mylist"></ol>

$(function)) {
$("#add").on("click", function() {
    var val = $("input").val();
    if(val!== '') {
        var elem = $("<li></li>").text(val);
            $(elem).append("<button class='rem'>X</button>");
                $("#mylist").append(elem);
                $("input").val("");
                $(".rem").on("click" ,function() {
                $(this).parent().remove();
                });

    }
});
});
</body>

</html>




