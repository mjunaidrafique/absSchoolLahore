<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Admission Email Message</title>
</head>
<body style="margin: 0; padding: 0;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td style="padding: 20px 0 30px 0;">

            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
                <tr>
                    <td  align="center"><h1>Aziz Bhatti Shaheed Cadet High School For Boys</h1></td>
                </tr>
                {{--<tr>--}}
                    {{--<td align="center">--}}
                        {{--<img src="{{asset('images/medal.jpg')}}"  width="120" height="150" style="display: block;float: left" />--}}
                        {{--<img src="{{asset('images/logo.png')}}"  width="300" height="150" style="display: block;float: left" />--}}
                        {{--<img src="{{asset('images/aziz.jpg')}}"  width="120" height="150" style="display: block;float: right" />--}}
                    {{--</td>--}}
                {{--</tr>--}}
                <tr>
                    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                            <tr>
                                <td style="color: #153643; font-family: Arial, sans-serif;">
                                    <h1 style="font-size: 24px; margin: 0;">Respected Principal!</h1>
                                </td>
                            </tr>
                            <tr>
                                <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
                                    <p style="margin: 0;"> My name is {{$name}} and my email address is {{$email_from}} here is my message:</p><br>
                                    <p>{{$body}}</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>