$(document).ready(function () {

    $('#productType').on('change', function () {
        $(".dynamic").hide();
        $("#" + $(this).val()).fadeIn(700);
    }).change();

    $('#sku').blur(function () {
        $("#errorSku").hide();
        $.fn.skuCheck();
    });
    $.fn.skuCheck = function () {
        var sku = $("#sku").val();
        if (sku == "") {
            $("#errorSku").fadeIn().text("Sku required.");
           // $("input#sku").focus();
            return false;
        } else if (!/[a-zA-Z0-9]+$/.test(sku)) {
            $("#errorSku").fadeIn().text("Only alphanumeric string are allowed.");
            //$("input#sku").focus();
            return false;
        }
        $.ajax({
            type: "POST",
            url: "skuCheck.php",
            data: {
                sku: sku
            },
            success: function (data) {

                if (data != '0') {
                    //$("input#sku").focus();
                    $("#errorSku").fadeIn().text("Sku is taken.");

                    //$('#submit').attr({'disabled':true,'title':'remove errors'});
                    return false;
                }

            }

        });
    }

    $("#name").blur(function () {
        $("#errorName").hide();
        $.fn.nameCheck();
    });
    $.fn.nameCheck = function () {
        var name = $("#name").val();
        if (name == "") {
            $("#errorName").fadeIn().text("Name required");
            //$("input#name").focus();
            return false;
        } else if (!/^[a-zA-Z\s]+$/.test(name)) {
            $("#errorName").fadeIn().text("Only alphabets and whitespace are allowed.");
            //$("input#name").focus();
            return false;
        }
    }

    $('#price').blur(function () {
        $("#errorPrice").hide();
        $.fn.priceCheck();

    });
    $.fn.priceCheck = function () {
        var price = $("#price").val();
        if (price == "") {
            $("#errorPrice").fadeIn().text("Price required");
            //$("input#price").focus();
            return false;
        } else if (!/[0-9]/.test(price)) {
            $("#errorPrice").fadeIn().text("Only integer value");
            //$("input#price").focus();
            return false;
        }

    }
    $("#productType").blur(function () {
        $("#errorType").hide();
        $("#errorSize").hide();
        $("#errorWeight").hide();
        $("#errorHeight").hide();
        $("#errorWidth").hide();
        $("#errorLength").hide();
        $.fn.typeCheck();
    });
    $.fn.typeCheck = function () {
        var type = $("#productType").val();
        var size = $("#size").val();
        var weight = $("#weight").val();
        var height = $("#height").val();
        var width = $("#width").val();
        var length = $("#length").val();
        if (type == null) {
            $("#errorType").fadeIn().text("Type required");
            //$("input#productType").focus();
            return false;
        }
        if (type == "DVD") {
            if (size == "") {
                $("#errorSize").fadeIn().text("Size required");
                //$("input#size").focus();
                return false;
            } else if (!/[0-9]/.test(size)) {
                $("#errorSize").fadeIn().text("Only integer");
                //$("input#size").focus();
                return false;
            }
        }
        if (type == "Book") {
            if (weight == "") {
                $("#errorWeight").fadeIn().text("Weight required");
                //$("input#weight").focus();
                return false;
            } else if (!/[0-9]/.test(weight)) {
                $("#errorWeight").fadeIn().text("Only integer");
                //$("input#weight").focus();
                return false;
            }
        }
        if (type == "Furniture") {
            if (height == "") {
                $("#errorHeight").fadeIn().text("Height required");
                //$("input#height").focus();
                return false;
            } else if (!/[0-9]/.test(height)) {
                $("#errorHeight").fadeIn().text("Only integer");
                //$("input#height").focus();
                return false;
            }
            if (width == "") {
                $("#errorWidth").fadeIn().text("Width required");
                //$("input#width").focus();
                return false;
            } else if (!/[0-9]/.test(width)) {
                $("#errorWidth").fadeIn().text("Only integer");
                //$("input#width").focus();
                return false;
            }
            if (length == "") {
                $("#errorLength").fadeIn().text("Length required");
                //$("input#length").focus();
                return false;
            } else if (!/[0-9]/.test(length)) {
                $("#errorLength").fadeIn().text("Only integer");
                //$("input#length").focus();
                return false;
            }
        }
    }

    $("form").submit(function (event) {
        event.preventDefault();
        $(".error").hide();
        $.fn.skuCheck();
        $.fn.nameCheck();
        $.fn.priceCheck();
        $.fn.typeCheck();
        var sku = $("#sku").val();
        var name = $("#name").val();
        var price = $("#price").val();
        var type = $("#productType").val();
        var size = $("#size").val();
        var weight = $("#weight").val();
        var height = $("#height").val();
        var width = $("#width").val();
        var length = $("#length").val();


        // ajax
        $.ajax({
            type: "POST",
            url: "productInput.php",
            data: {
                sku: sku, name: name, price: price, type: type, size: size, weight: weight, height: height, width: width, length: length
            },
            success: function (data) {
                if (sku != "" && name != "" && price != "" && type != "" && data == '0') {
                    window.location.href = 'index.php';
                }

            }

        });

        return false;
    });
});

