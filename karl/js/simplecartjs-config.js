simpleCart({
    cartStyle: "table", // Display cart contents as a table.
    currency: "AUD", // Use Australian dollars as the currency.
    shippingFlatRate: 6.99,
cartColumns: [
    // Add image to cart contents table
    {view: function(item, column){
            return "<img src='" + item.get('image') + "' class='product_image_thumbnail'>";
        },
        attr: "image", label: "Product Image"},
    { attr: "name", label: "Name"},
    { attr: "size", label: "Size"},
    { view: "currency", attr: "price", label: "Price"},
    { view: "decrement", label: false},
    { attr: "quantity", label: "Qty"},
    { view: "increment", label: false},
    { view: "currency", attr: "total", label: "SubTotal" },
    { view: "remove", text: "Remove", label: false}
],
    checkout: {
        type: "SendForm" ,
        method: "POST",
        url: "http://saturn.csit.rmit.edu.au/inte2047/Distinguishedfarmers/checkout/processformdata.php"
    },
});

simpleCart.bind('beforeCheckout', function(data){
    data.email_address = document.getElementById("email_address").value;
    data.first_name = document.getElementById("fname").value;
    data.last_name = document.getElementById("lname").value;
    data.street1 = document.getElementById("street_address1").value;
    data.city = document.getElementById("city").value;
    data.postcode = document.getElementById("postal_code").value;
    data.state = document.getElementById("state").value;
    data.country = document.getElementById("country").value;

    data.cc_mastercard = document.getElementById("cc_mastercard").checked;
    data.cc_visa = document.getElementById("cc_visa").checked;
    data.cc_amex = document.getElementById("cc_amex").checked;

    data.ccname = document.getElementById("credit_card_name").value;
    data.ccnumber = document.getElementById("credit_card_number").value;
    data.ccsecuritycode = document.getElementById("credit_card_security_code").value;


});