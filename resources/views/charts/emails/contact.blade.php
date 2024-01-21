<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Media News:: Email Layout</title>
        <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">
            <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700,400italic,700italic' rel='stylesheet' type='text/css'>
                    <style type="text/css"><!--
                        
                        a {
                            color: #b8312f;text-decoration: none;outline: none;
                        }

                        a:hover {
                            color: #3a87ad;
                            text-decoration: none;
                        }


                        --></style>
                    </head>
                    <body style="font-family: 'Open Sans', sans-serif;
                            font-size: 16px;
                            line-height:26px;
                            color: #777;
                            background-color: #eee;
                            height: 100%;">
                        <p>Dear Sir/Madam,<br>
You have received an enquiry from your website.
Please see below:</p>
  
                        <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>Name:</td><td>{{ $Name }}</td>
                                
                            </tr>
                            <tr>
                                <td>Email:</td><td>{{ $Email }}</td>
                            </tr>
                              <tr>
                                <td>Address:</td><td>{{ $Address }}</td>
                            </tr>
                            <tr>
                                <td>City:</td><td>{{ $City }}</td>
                            </tr>
                           
                             <tr>
                                <td>State:</td><td>{{ $State }}</td>
                            </tr>
                             <tr>
                                <td>Country:</td><td>{{ $DDLCountry }}</td>
                            </tr>
                            <tr>
                                <td>Postal Code:</td><td>{{ $PostalCode }}</td>
                            </tr>
                            <tr><td></td></tr>
                             <tr>
                                <td>Phone:</td><td>{{ $Phone }}</td>
                            </tr>
                             <tr><td></td></tr>
                            <tr>
                                <td>Subject:</td><td>{{ $subject }}</td>
                            </tr>
                           
                             <tr>
                                <td>Message:</td><td>{{ $message1 }}</td>
                            </tr>
                             <tr><td></td></tr> 
                        </table>
                        Thank you and have a nice day! <br>
                            Best regards,<br>
                                Online Enquiry Form<br>
                                    www.fareastholdingsbhd.com<br>
                    </body>
                    </html>
