<?php
include 'conecta.php';



include"/var/www/newdesconsol/phpmailer/class.phpmailer.php";
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;

$mail->Username = "durval@pinho.com.br";
$mail->Password = "fcb2512ead";//minha senha

$mail->From = "durval@pinho.com.br";
$mail->FromName = "Durval";
$mail->Subject = 'PREVISÃO DE CHEGADA';




$mail->Body .= "<table width='100%' border='0' cellspacing='0'><tr>
    <td width='20%'><font size=4>PREVISÃO DE CHEGADA DE NAVIO</td>
    </tr>"."</table>";

$mail->Body .= "<table width='100%' border='1' cellspacing='0'><tr>
    <td width='10%'><font size=1>REGISTRO</td>
    <td width='15%'><font size=1>NAVIO</td>
    <td width='15%'><font size=1>MBL </td>
    <td width='10%'><font size=1> ETD </td>
    <td width='10%'><font size=1>AGENTE</td>
    <td width='10%'><font size=1>POD</td>
    <td width='13%'><font size=1>CE HBL</td>
    <td width='10%'><font size=1>ETA</td>	
    </tr>"."</table>";

$query = "select *  from mbls where atracado = '0000-00-00'"; 


$busca = mysql_query($query);
$num_clientes = mysql_num_rows($busca);



for($i=0;$i<$num_clientes;$i++){
$resultado = mysql_fetch_array($busca);
$navio = $resultado['navio'];




$mail->Body .= "<table width='100%' border='1' cellspacing='0'>
    <td width='10%'><font size=1>$navio</td>
       
    
  </tr>"."</table>";

}


$mail->AltBody = "fim";

$mail->AddAddress("durval@pinho.com.br");

# $mail->AddAddress("caroline.lira@pinho.com.br");
# $mail->AddAddress("cleverson@pinho.com.br");

if(!$mail->Send())
{
echo "não foi";
}
else
{
echo "foi";
}
?>
