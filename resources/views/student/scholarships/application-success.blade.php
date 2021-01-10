<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Edulearn Scholarship Recipts">
    <meta name="keywords" content="scholarship">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
    <title>Edulearn| Recipts</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: work-Sans, sans-serif;
            background-color: #f6f7fb;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        p {
            margin: 15px 0;
        }

        h5 {
            color: #444;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #fafafa;
            box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);
        }

        .title {
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail,
        .order-detail th,
        .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
        }

        .footer-social-icon tr td img {
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>

<body style="margin: 20px auto;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" style="padding: 0 30px;background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%;">
        <tbody>
            <tr>
                <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td><img src="../../backend/img/student.png" alt="" style="margin-bottom: 30px;"></td>
                            </tr>
                            <tr>
                                <td><img src="../../backend/img/success.png" alt=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="title">Application Successful</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Your Scholarship application for {{$application->scholarship->name}} Scheme was successfully processed. Below is your application details:</p>
                                    <h2 class="title">Ref Number: {{$application->transaction_ref}}</h2>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="border-top:1px solid #777;height:1px;margin-top: 30px;"></div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>
                                    <h2 class="title">Application Details</h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
                        <tbody>
                            <tr align="left">
                                <th>SCHEME</th>
                                <th style="padding-left: 15px;">CATEGORY</th>
                                <th>START</th>
                                <th>END </th>
                            </tr>
                            <tr>
                                <td>
                                    <h3 style="padding:5px;">{{$application->scholarship->name}}</h3>
                                </td>
                                <td valign="center" style="padding:5px;">
                                    {{$application->scholarship->category}}
                                </td>
                                <td valign="center" style="padding:5px;">
                                    {{$application->scholarship->start_date}}
                                </td>
                                <td valign="center" style="padding:5px;">
                                    {{$application->scholarship->end_date}}
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">Application Fee:</td>
                                <td class="price" colspan="3" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b>NGN {{$application->scholarship->application_fee}}.00</b></td>
                            </tr>

                            <tr>
                                <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">TOTAL PAID :</td>
                                <td class="price" colspan="3" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b>NGN {{$application->scholarship->application_fee}}.00</b></td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" cellspacing="0" border="0" align="left" style="width: 100%;margin-top: 30px;    margin-bottom: 30px;">
                        <tbody>
                            <tr>
                                <td style="font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px;width: 100%;">
                                    <h5 style="font-size: 16px; font-weight: 500;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">FUTHER INSTRUCTIONS</h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">Go to your dashboard, Click on My Application Menu, then kindly select this Scholarship and write the exams attached to it. <br>Winners of this Scholarship will be determined based on exams and other necessary criteria. Good Luck! </p>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="main-bg-light text-center top-0 button-div" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
            <tr>
                <td style="padding: 30px;">

                    <div style="border-top: 1px solid #ddd; margin: 20px auto 0;"></div>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px auto 0;">
                        <tbody>
                            <tr>
                                <td style="font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px;width: 50%;">
                                </td>
                                <td style="font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px;width: 50%;">
                                    <a href="/student/my_applications" type="button" style="font-size:16px;padding:.5em; background-color:#F6F7FB; border: 1px solid black; color: #000">Go to My Applications</a>
                                    <button onClick="printRecipt()" type="button" style="font-size:16px; padding:.5em">Print</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>
<script>
    function printRecipt() {
        
        var elem = document.querySelector('.button-div');
        // set the display to none
        elem.style.display = 'none';
        //then print
        window.print()
       
    }
</script>

</html>