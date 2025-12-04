<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Confirmação de E-mail</title>
    <style type="text/css">
        /* Estilos base para clientes de email */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.4;
            color: #333333;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        
        /* Reset de elementos */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }
        
        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        
        /* Estilos responsivos */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
            }
            
            .header-img {
                height: auto !important;
                width: 100% !important;
            }
            
            .content-block {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #640909;">
    <!-- Layout principal -->
    <table class="mt-3 mb-3" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#640909">
        <tr>
            <td align="center" valign="top">
                <table class="email-container" border="0" cellpadding="0" cellspacing="0" width="600">
                    
                    <!-- Corpo do email -->
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px; border-radius: 8px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center" style="font-size: 24px; font-weight: bold; color: #333333; padding-bottom: 20px;">
                                        Confirmação de E-mail Bem-Sucedida!
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 16px; line-height: 1.6; color: #555555; padding-bottom: 30px;">
                                        Olá {{$user->name}},<br /><br />
                                        Parabéns! Seu endereço de e-mail foi confirmado com sucesso e sua conta está agora ativada.<br /><br />
                                        Você já pode acessar todos os recursos da nossa plataforma utilizando suas credenciais de login.
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding-bottom: 30px;">
                                        <!-- Botão primário -->
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="center" bgcolor="#640909" style="border-radius: 4px;">
                                                    <a href="http://127.0.0.1:8000/valida_email/{{ $user->codigo }}" target="_blank" style="font-size: 16px; color: white; text-decoration: none; padding: 12px 25px; display: inline-block; font-weight: bold;">Confirmar email</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 14px; line-height: 1.6; color: #777777; text-align: center">
                                        Se você não se cadastrou em nosso site, por favor ignore este e-mail.
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