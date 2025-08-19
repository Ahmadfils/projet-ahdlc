<!DOCTYPE html>
   <html lang="fr">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url(images/img11.jpg);
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .email-container {
            background-color: #ffffff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header img {
            width: 100%;
            max-width: 600px;
            height: 250px;
            border-radius: 8px 8px 0 0;
        }
        .email-body {
            padding: 20px;
        }
        .email-body h1 {
            font-size: 24px;
            color: #333;
        }
        .email-body p {
            font-size: 16px;
            color: #666;
            line-height: 1.5;
        }

        .paragraphe {
            text-align: justify
        }
        .email-footer {
            margin-top: 20px;
            font-size: 14px;
            color: #999;
        }

        
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100%;
                padding: 10px;
            }
            .email-body {
                padding: 10px;
            }
            .email-body h1 {
                font-size: 20px;
            }
            .email-body p {
                font-size: 14px;
            }
        }
    </style>
   </head>
   <body>

    <div class="email-container">
        <div class="email-header">
            <img src="<?php url('public/images/logo.png'); ?> " alt="logo AHDLC">
        </div>
        <div class="email-body">
            <h2>Merci de vous être abonné !</h2>
            <p>
                Bonjour cher visiteur,
            </p>
            <p class="paragraphe">
                Nous vous remercions chaleureusement de vous être abonné à notre site web! Nous sommes ravis de vous compter parmi nos membres et nous espérons que vous apprécierez tout le contenu et les services que nous mettons à votre disposition.
            </p>
            <p class="paragraphe">
                Si vous avez des questions ou des suggestions, n\'hésitez pas à nous contacter. Nous sommes toujours là pour vous aider !
            </p>
            <p>
                Merci encore et à très bientôt sur <a href="">AHDLC</a>
            </p>
        </div>
        <div class="email-footer">
            <p>&copy; <span><?php echo $data['year']; ?> </span> AHDLC. Tous droits réservés.</p>
        </div>
       </div>
     </body>
    </html>