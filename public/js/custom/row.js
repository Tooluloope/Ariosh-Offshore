$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        

        cols += '<td><input type="text" class="form-control" name="nameOfUniversity' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="degreeObtained' + counter + '"/></td>';
        cols += '<td><input type="date" class="form-control" name="dateGraduated' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
$(document).ready(function () {
    var counter = 0;

    $("#addrow1").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var newRow1 = $("<tr>");
        var cols1 = "";

        cols += '<td scope="col"><select required="required" name="position" id="single" class="form-control form-control-chosen" data-placeholder="Please select..." required><option value=""></option><option value="Alcohol and Drug Test">Alcohol and Drug Test</option><option value="Offshore Safety Permit">Offshore Safety Permit</option><option value="Medical Test">Medical Test</option><option value="Bosiet">Bosiet</option><option value="Tuberculosis Test">Tuberculosis Test</option><option value="Curriculum vitae">Curriculum vitae</option></select></td>';
        cols += '<td scope="col"><input required="required" class="form-control" type="file" name="image" id="image" required></td>';
        cols += '<td scope="col"><input type="date" class="form-control" name="expiryDate' + counter + '" required/></td>';
        cols += '<td scope="col"><input type="button" class="ibtnDel1 btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list1").append(newRow);
        counter++;
    });



    $("table.order-list1").on("click", ".ibtnDel1", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});


function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
