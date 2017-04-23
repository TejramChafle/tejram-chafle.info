<?php

class Welcome_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    function contact($data){

        $to = stripcslashes($data['email']);
        $from = stripslashes('contact@tejram-chafle.info');
        $BCC = stripslashes('tejram_chafle@yahoo.in');
        
        $subject = "Thanks for Contacting me!";
        
        $msg= "<table style='padding:30px'>
                <tr style='background-color:#c6ecd7;'>
                    <td style='padding:25px'>
                    <h4>Dear ".$data['name'].",</h4>
                    <p>Thank you for visiting my web portal and contacting me. I have received your message and certainly contact you soon. <br> 
                    Thank you very much for showing interest in me.<br><br>
                    Regards,<br>
                    Tejram Chafle<br>
                    Visit again at http://tejram-chafle.info<br></p>
                    <br><hr>
                    <table>
                        <tr>
                        <td style='width:50%' align='right'>
                            <b>Mailing Address:</b><br>
                            Flat No. 6<br>
                            Raghu Complex,<br>
                            Dhayari,<br>
                            Pune-411041<br>
                        </td>
                        <td>
                            <hr width='1' size='100'>
                        </td>
                        <td>
                            <p><b>For further queries, </b><br>
                            you can write to me at contact@tejram-chafle.info<br>
                            tejram_chafle@yahoo.in<br>
                            or call me at +91 9730226518</p>
                        </td>
                        </tr>
                    </table>
                </td>
                </tr>
            </table>";

        $header = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $header .= 'From:' . $from . "\r\n";
        $header .= 'Bcc:'.$BCC. "\r\n";

        $mail = mail($to, $subject, $msg, $header);
        
        if($mail == 1){
            $to = stripcslashes('tejram_chafle@yahoo.in');
            $from = stripslashes($data['email']);
            // $BCC = stripslashes('contact@tejram-chafle.info');
            
            $subject = $data['name']." has contacted you";
            
            $msg= "<table style='padding:30px'>
                    <tr style='background-color:#c6ecd7;'>
                        <td style='padding:25px'>
                        <h4>Dear Tejram Chafle,</h4>
                        <p>".$data['name']." has left message for you.<br>
                        Name : ".$data['name']."<br>
                        Email : ".$data['email']."<br>
                        Message : ".$data['message']."<br><br>
                        
                        Thank you<br>
                        Regards,<br>
                        Tejram Chafle<br>
                        Visit again at http://tejram-chafle.info<br></p>
                        <br><hr>
                        <table>
                            <tr>
                            <td style='width:50%' align='right'>
                                <b>Mailing Address:</b><br>
                                Flat No. 6<br>
                                Raghu Complex,<br>
                                Dhayari,<br>
                                Pune-411041<br>
                            </td>
                            <td>
                                <hr width='1' size='100'>
                            </td>
                            <td>
                                <p><b>For further queries, </b><br>
                                you can write to me at contact@tejram-chafle.info<br>
                                tejram_chafle@yahoo.in<br>
                                or call me at +91 9730226518</p>
                            </td>
                            </tr>
                        </table>
                    </td>
                    </tr>
                </table>";

            $header = 'MIME-Version: 1.0' . "\r\n";
            $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $header .= 'From:' . $from . "\r\n";
            // $header .= 'Bcc:'.$BCC. "\r\n";
            // $mail = mail($to, $subject, $msg, $header);
            try {
                echo $mail = mail($to, $subject, $msg, $header);
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
            
        }
        return true;
    }
}

?>

