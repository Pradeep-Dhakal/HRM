
$(function () {

    // Start counting from the third row
    var counter = 3;
    $("#insertnewSkill").on("click", function (event) {
        event.preventDefault();

        var newRow = $("<tr>");
        var cols = '';

        // Table columns
        cols += '<th scrope="row">' + counter + '</th>';
        cols +='<td><input type="text" class="form-control" name="name[]" placeholder="Enter Skill/ Experience title"></td>';
        cols += '<td><input type="text" class="form-control" name="duration[]" placeholder="total duration"></td>';
        cols += '<td><input type="file" class="form-control" name="documents[]" placeholder="upload your certificate"></td>';
        cols += '<td><button class="btn btn-danger rounded-0" id ="deleteskill"><i class="fa fa-trash"></i></button</td>';

        // Insert the columns inside a row
        newRow.append(cols);

        // Insert the row inside a table
        $("table").append(newRow);

        // Increase counter after each row insertion
        counter++;
    });

    // Remove row when delete btn is clicked
    $("table").on("click", "#deleteskill", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
});
