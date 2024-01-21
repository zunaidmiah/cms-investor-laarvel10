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
                        <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h2 style="font-size:28px; line-height: 36px; font-family: Arial, sans-serif; color:#333; ">Media News Email Layout</h2></td>
                                            <td align="right"><a href="{{ URL::to('/') }}/email/publishNews?publish={{ $mediaIds }}" style="display: inline-block; margin-bottom: 0; font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 400; text-align: center; vertical-align: middle; border: 1px solid transparent; padding: 6px 12px; font-size: 18px; border-radius: 4px; color: #ffffff; background-color: #b8312f;border-color: #a42c2a;">Publish All</a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>
                                                <div style="clear: both; margin-top: 0px; margin-bottom: 25px; padding: 0px;">
                                                    <div style="padding: 15px; background: #ffffff; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom: 1px solid #e5e5e5;">
                                                        <div style="float: left; font-family: 'Open Sans', Arial, sans serif; font-size: 24px; line-height: 24px; color:#333; margin: 0;  padding: 0;">News Info</div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                    <div style="background: #FFFFFF; padding: 15px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
                                                        <table width="100%" cellpadding="8">
                                                            <tbody>
                                                                <tr bgcolor="#f5f5f5">
                                                                    <td width="140"><span style="font-family: 'Open Sans', sans-serif; font-size: 16px; color:#777;">Status</span></td>
                                                                    <td><div style="display: inline-block; margin-bottom: 0; font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 400; text-align: center; vertical-align: middle; border: 1px solid transparent; padding: 6px 12px; color: #fff; background-color: #f0ad4e; border-color: #eea236">Pending for Approval</div> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="140"><span style="font-family: 'Open Sans', sans-serif; font-size: 16px; color:#777;">To</span></td>
                                                                    <td><a style="font-family: 'Open Sans', sans-serif; font-size: 16px; color: #b8312f;text-decoration: none;outline: none;" href="mailto:hock@webqom.com">hock@webqom.com</a>; <a style="font-family: 'Open Sans', sans-serif; font-size: 16px; color: #b8312f;text-decoration: none;outline: none;" href="mailto:caroline@webqom.com">caroline@webqom.com</a></td>
                                                                </tr>
                                                                <tr bgcolor="#f5f5f5">
                                                                    <td width="140"><span style="font-family: 'Open Sans', sans-serif; font-size: 16px; color:#777;">Cc</span></td>
                                                                    <td><a style="font-family: 'Open Sans', sans-serif; font-size: 16px; color: #b8312f;text-decoration: none;outline: none;" href="mailto:hock@webqom.com">hock@webqom.com</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="140"><span style="font-family: 'Open Sans', sans-serif; font-size: 16px; color:#777;">From</span></td>
                                                                    <td><span style="font-family: 'Open Sans', sans-serif; font-size: 16px; color:#777;">OCK Media News</span></td>
                                                                </tr>
                                                                <tr bgcolor="#f5f5f5">
                                                                    <td width="140"><span style="font-family: 'Open Sans', sans-serif; font-size: 16px; color:#777;">Subject</span></td>
                                                                    <td><span style="font-family: 'Open Sans', sans-serif; font-size: 16px; color:#777;"><strong>Media News:</strong> {{ $source }} (Pending for Approval)</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="140"><span style="font-family: 'Open Sans', sans-serif; font-size: 16px; color:#777;">Date</span></td>
                                                                    <td><span style="font-family: 'Open Sans', sans-serif; font-size: 16px; color:#777;">{{ $maildate }}</span></td>
                                                                </tr>
                                                                <tr bgcolor="#f5f5f5">
                                                                    <td width="140"><span style="font-family: 'Open Sans', sans-serif; font-size: 16px; color:#777;">Source / URL</span></td>
                                                                    <td><span style="font-family: 'Open Sans', sans-serif; font-size: 16px; color:#777;">{{ $source }}</span><br/><!-- <a style="font-family: 'Open Sans', sans-serif; size: 16px; color: #b8312f;text-decoration: none;outline: none;" href="http://www.thestar.com.my" target="_blank">http://www.thestar.com.my</a>--></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @foreach($emailParams as $value)
                                        <tr>
                                            <td>
                                                <div style="clear: both; margin-top: 0px; margin-bottom: 25px; padding: 0px;">
                                                    <div style="padding: 15px; background: #ffffff; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom: 1px solid #e5e5e5;">
                                                        <div style="float: left; font-family: 'Open Sans', Arial, sans serif; font-size: 24px; line-height: 24px; color:#333; margin: 0;  padding: 0;">News Content</div>
                                                        <a href="{{ URL::to('/') }}/email/publishNews?publish={{ $value->id }}" style="display: inline-block; margin-bottom: 0; font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 400; text-align: center; vertical-align: middle; border: 1px solid transparent; padding: 6px 12px; font-size: 18px; border-radius: 4px; color: #ffffff; background-color: #b8312f;border-color: #a42c2a; float:right;">Publish</a>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                    <div style="background: #FFFFFF; padding: 15px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
                                                        <table width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h2 style="color: #cc0000; font-size:28px; line-height: 36px; font-family: Arial, Helvetica, sans-serif; ">{{ $value->title }}</h2>
                                                                        <!--<h5 style="font-size:18px; line-height: 28px; font-family:Arial, Helvetica, sans-serif; color: #403e3d;"></h5>-->
                                                                        <blockquote style="padding: 10px 20px; margin: 0 0 20px; font-size: 17.5px; border-left: 5px solid #eee">
                                                                            <footer><cite title="Source Title"><span style="font-size: 15px; color:#999; font-style: normal; font-family: 'Open Sans', sans-serif;">{{ $value->footer }}</span></cite></footer>
                                                                        </blockquote>
                                                                        <!--<div style="float:left;"><img src="images/img_placeholder.jpg" alt="Insert Image" style="display: block; max-width: 100%; height: auto; margin-right: 15px;"></div>-->
                                                                        <p style="margin:0 0 20px 0; padding: 0; font-weight: 300; font-family: 'Open Sans', sans-serif; font-size: 16px;">{{ $value->content }}</p>
                                                                        <div style="clear:both"></div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div style="clear:both"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td><span style="font-size: 15px; font-weight: 300; font-family: 'Open Sans', sans-serif;">2014 � <a href="http://www.webqom.com" target="_blank" style="color: #b8312f;text-decoration: none;outline: none;">Webqom Technologies Sdn Bhd.</a> Any queries, please contact <a style="font-family: 'Open Sans', sans-serif; font-size: 15px; color: #b8312f;text-decoration: none;outline: none;" href="mailto:support@webqom.com">Webqom Support</a>.</span></td>
                                                        <td align="right"><img src="{{ URL::to('/') }}/admin/images/logo_webqom.png" alt="Webqom Technologies"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table></td>
                            </tr>
                        </table>
                    </body>
                    </html>
