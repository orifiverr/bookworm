<?php
﻿// -*- encoding : utf-8 -*-
try
{
    $email = strip_tags($_POST['email']);
    $name = strip_tags($_POST['name']);
    $phone = strip_tags($_POST['phone']);
    
    // validation
    $email = trim($email);
    
    if (empty($email)) throw new Exception('עליך לציין אימייל');       
    
    if (!check_email_address($email)) throw new Exception('כתובת מייל לא חוקית');
    
    switch ($_POST['version'])
    {
        case "normal":           
            $message = '
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style="direction:rtl;">
<p>שלום רב,</p>
<p>תודה על פנייתך אלינו.</p>
<p>למטה נמצא הקישור להורדת תוכנת תולעת ספרים להתנסות. יש להכנס לקישור. באתר שנפתח יש ללחוץ על הקובץ - setup.exe להורדת התוכנה למחשב. התהליך אורך מספר דקות. לאחר מכן יש ללחוץ על הקובץ - setup.exe בצד ימין למטה, ועל run להתקנת התוכנה.</p>
<p>
לכניסה לתוכנה יש ללחוץ בחלון הפתיחה על <b>אישור</b>. ניתן להכנס 10 פעמים <b>ללא קוד פתיחה</b>. קוד פתיחה קבוע נמסר לאחר רכישת התוכנה. מומלץ להיעזר בהסברים הנילווים לכל מסך פעילות, הנפתחים בלחיצה על כפתור העזרה (?). 
</p>
<p>
<a href="https://www.transferbigfiles.com/6e7359ef-ad77-4f88-b37b-7ab695c4d1bc/9qs4Nxpj-2wVDomRPNATeg2">קישור להורדה</a>
</p>
<span>בברכה,</span><br/>
<span>צוות שובל תקשורת שיווקית ומחשוב</span><br/>
<span>04-8312730 ; 052-3387927</span><br/>
<span>ימים א\'-ה\' 09:00-17:30</span>
</body>
</html>                
                ';
            $subject = "קישור להורדת תוכנת תולעת ספרים לשיפור הקריאה בעברית";
            break;
        
        case "relig":
            $message = '
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style="direction:rtl;">
<p>שלום רב,</p>
<p>תודה על פנייתך אלינו.</p>
<p>למטה נמצא הקישור להורדת תוכנת תולעת ספרים להתנסות. יש להכנס לקישור. באתר שנפתח יש ללחוץ על הקובץ - setup.exe להורדת התוכנה למחשב. התהליך אורך מספר דקות. לאחר מכן יש ללחוץ על הקובץ - setup.exe בצד ימין למטה, ועל run להתקנת התוכנה.</p>
<p>
לכניסה לתוכנה יש ללחוץ בחלון הפתיחה על <b>אישור</b>. ניתן להכנס 10 פעמים <b>ללא קוד פתיחה</b>. קוד פתיחה קבוע נמסר לאחר רכישת התוכנה. מומלץ להיעזר בהסברים הנילווים לכל מסך פעילות, הנפתחים בלחיצה על כפתור העזרה (?). 
</p>
<p>
<a href=" https://www.transferbigfiles.com/9ecd5457-6af6-4a14-b7ac-7dbc72d8e8dd/8f8ug5keqsG34yne1hYtqA2">קישור להורדה</a>
</p>
<span>בברכה,</span><br/>
<span>צוות שובל תקשורת שיווקית ומחשוב</span><br/>
<span>04-8312730 ; 052-3387927</span><br/>
<span>ימים א\'-ה\' 09:00-17:30</span>
</body>
</html>                
                ';
            $subject = "קישור להורדת תוכנת תולעת ספרים לשיפור הקריאה בעברית";
            break;
        
        case "english":
            $message = '
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style="direction:rtl;">
<p>שלום רב,</p>
<p>תודה על פנייתך אלינו.</p>
<p>
למטה נמצא הקישור להורדת תוכנת Bookworm להתנסות. יש להכנס לקישור. באתר שיפתח יש ללחוץ על הקובץ - setup.exe להורדת התוכנה למחשב. התהליך אורך מספר דקות. לאחר מכן יש ללחוץ על הקובץ - setup.exe בצד ימין למטה, ועל run להתקנת התוכנה.
</p>
<p>
לכניסה לתוכנה יש ללחוץ בחלון הפתיחה על <b>ok</b> . ניתן להכנס 10 פעמים <b>ללא קוד פתיחה</b>. קוד פתיחה קבוע נמסר לאחר רכישת התוכנה. מומלץ להיעזר בהסברים הנילווים לכל מסך פעילות, הנפתחים בלחיצה על כפתור העזרה (?). 
לקבלת תמיכה ולרכישה יש לפנות לטל\' הר"מ.
</p>
<p>
<a href="https://www.transferbigfiles.com/74896362-8163-4ff8-bf73-6d9f57445111/ump2OJbHvOS0Mg-48Cw7jg2">קישור להורדה</a>
</p>
<span>בברכה,</span><br/>
<span>צוות שובל תקשורת שיווקית ומחשוב</span><br/>
<span>04-8312730 ; 052-3387927</span><br/>
<span>ימים א\'-ה\' 09:00-17:30</span>
</body>
</html>                        
                ';
            $subject = "קישור להורדת תוכנת Bookworm לשיפור הקריאה באנגלית";
            break;
        
        default:
            throw new Exception('משהו השתבש');
    }    
    
    $success = sendHTMLemail($email, $subject, 'info@shoval.co.il', $message);
    
    $adminMessage = '
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body> 
    <p>' . $email . '</p>
    <p>' . $name . '</p>
    <p>' . $phone . '</p>        
    <p>' . $_POST['version'] . '</p>        
</body>
</html>
        ';
    
    sendHTMLemail('info@shoval.co.il','טופס הורדה מולא','info@shoval.co.il',$adminMessage);
    
    if ($success)
    {
        echo '<html>
            <head>            
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <style>
                body {
                    direction:rtl;
                    font-family:Arial;
                }
                .message {
                    font-size: 1.1em;
                }
            </style>
            </head>
            <body>
            <h3>תודה.</h3>
            <p class="message">הקישור ישלח לכתובת הדוא"ל שלך בדקות הקרובות.</p>
            <!-- Google Code for &#1508;&#1504;&#1497;&#1497;&#1514; &#1500;&#1511;&#1493;&#1495; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 975851224;
var google_conversion_language = "iw";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "E7aICOikrQIQ2J2p0QM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/975851224/?label=E7aICOikrQIQ2J2p0QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

        </body></html>';

    }
    else 
        throw new Exception('משהו השתבש');
}
catch (Exception $e)
{
    echo '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></head><body style="direction:rtl;"><p style="font-size:1.1em;">' . $e->getMessage() . '</p>' .  '<p style="font-size:1.1em;"><a href="http://www.shoval.co.il/image/users/115447/ftp/my_files/form-demo.html">נסה שוב</a></p></body></html>';
}

function sendHTMLemail($to, $subject, $from, $body) { 

if (ereg("(.*)< (.*)>", $from, $regs)) {
	   $from = '=?UTF-8?B?'.base64_encode($regs[1]).'?= < '.$regs[2].'>';
	} else {
	   $from = $from;
	}

    $headers = "From: $from\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $boundary = uniqid("HTMLEMAIL");
    $headers .= "Content-Type: multipart/alternative;".
                "boundary = $boundary\r\n\r\n";
    $headers .= "This is a MIME encoded message.\r\n\r\n";
    $headers .= "--$boundary\r\n".
                "Content-Type: text/plain; UTF-8\r\n".
                "Content-Transfer-Encoding: base64\r\n\r\n";
    $headers .= chunk_split(base64_encode(strip_tags($body)));
    $headers .= "--$boundary\r\n".
                "Content-Type: text/html; charset=UTF-8\r\n".
                "Content-Transfer-Encoding: base64\r\n\r\n";
    $headers .= chunk_split(base64_encode($body)); 

    $result = mail($to,'=?UTF-8?B?'.base64_encode($subject).'?=',"",$headers);
    return $result;
}

function check_email_address($email) {
  // First, we check that there's one @ symbol, 
  // and that the lengths are right.
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    // Email invalid because wrong number of characters 
    // in one section or wrong number of @ symbols.
    return false;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if
(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&
↪'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
$local_array[$i])) {
      return false;
    }
  }
  // Check if domain is IP. If not, 
  // it should be valid domain name
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if
(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|
↪([A-Za-z0-9]+))$",
$domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}

?>
