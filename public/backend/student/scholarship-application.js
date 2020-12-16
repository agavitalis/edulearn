$(document).ready(function() {

    const API_publicKey = "FLWPUBK_TEST-6ed373149166c784cf560090702de235-X";

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "user@example.com",
            amount: 2000,
            customer_phone: "234099940409",
            currency: "NGN",
            txref: "rave-123456",
            meta: [
                {
                    metaname: "flightID",
                    metavalue: "AP1234"
                }
            ],
            onclose: function() {},
            callback: function(response) {
                var txref = response.data.txRef; // collect txRef returned and pass to a server page to complete status check.
                console.log(
                    "This is the response returned after a charge",
                    response
                );
                if (
                    response.data.chargeResponseCode == "00" ||
                    response.data.chargeResponseCode == "0"
                ) {
                    // redirect to a success page
                } else {
                    // redirect to a failure page.
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }

    $(".apply").click(function() {
        let first_name = $("#first_name").val();
        let last_name = $("#last_name").val();
        let email = $("#email").val();
        let phone = $("#phone").val();
        let category = $('select[name="category"]').val();
        let school_name = $("#school_name").val();
        let level = $("#level").val();
        let exp_year_of_graduation = $("#exp_year_of_graduation").val();
        let country = $("#country").val();
        let state_of_orgin = $("#state_of_orgin").val();
        let lga = $("#lga").val();
        let address = $("#address").val();

        if (
            first_name == "" ||
            last_name == "" ||
            email == "" ||
            phone == "" ||
            category == "" ||
            school_name == "" ||
            level == "" ||
            exp_year_of_graduation == "" ||
            country == "" ||
            state_of_orgin == "" ||
            lga == "" ||
            address == ""
        ) {
            alert("Please fill all fileds");
        }else{
            payWithRave();
        }
        
    });
});
