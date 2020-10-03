simpleCart({
    checkout: {
        type: "SendForm" ,
        method: "POST",
        url: "http://saturn.csit.rmit.edu.au/∼e46281/inte2047/processFormData.php"
    },
});

simpleCart.bind('beforeCheckout', function(data){
    data.email = document.getElementById("email-address").value;
    data.first_name = document.getElementById("fname").value;
    data.last_name = document.getElementById("lname").value;
    data.street1 = document.getElementById("street_address1").value;
    data.street2 = document.getElementById("street_address2").value;
    data.city = document.getElementById("city").value;
    data.postcode = document.getElementById("postal_code").value;
    data.state = document.getElementById("state").value;
    data.country = document.getElementById("country").value;


});