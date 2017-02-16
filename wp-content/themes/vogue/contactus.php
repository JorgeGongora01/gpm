<?php 
       
    $fue_enviado = false;
    if(count($_POST) > 0){
      
         require $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/vogue/PHPMailer/PHPMailerAutoload.php';
         
         $mail = new PHPMailer();
         $mail->isSMTP();                                      // Set mailer to use SMTP
         $mail->Host = 'mail.oneclick.com.mx';  // Specify main and backup SMTP servers
         $mail->SMTPAuth = true;                               // Enable SMTP authentication
         $mail->Username = 'jorge.gongora@oneclick.com.mx';                 // SMTP username
         $mail->Password = 'Jorge1234';                           // SMTP password
         //$mail->SMTPSecure = 'none';                            // Enable TLS encryption, `ssl` also accepted
         $mail->Port = 25;                                    // TCP port to connect to

        $mail->setFrom('jorge.gongora@oneclick.com.mx', 'Contacto Sitio Web GPM');
        $mail->addAddress('daniel.castanedo@oneclick.com.mx');     // Add a recipient

        $mail->isHTML(true);                                  
        $body = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/vogue/basic.html');
        $body = str_replace("@@nombre",$_POST['nombre'],$body);
        $body = str_replace("@@email",$_POST['email'],$body);
        $body = str_replace("@@asunto",$_POST['asunto'],$body);
        $body = str_replace("@@mensaje",$_POST['mensaje'],$body);
        
        
        $mail->Subject = 'Contacto Sitio Web GPM';
        $mail->Body    = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $fue_enviado = true;
        }
      
    }
   
 ?>
<div class="row">
  
  <div class="col-md-6">
    
    <div class="row">
      <div class="col-md-12">
        <p><br><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp; Av. Guadalupe No. 5830, Residencial Plaza Guadalupe,<br>&nbsp; &nbsp; &nbsp;&nbsp;Zapopan, Jalisco CP 45030.
        </p>
      </div>
      <div class="col-md-12">
         <p><br><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp; Email: gpm_uniformes@hotmail.com<br>
        </p>
      </div>
     <div class="col-md-12">
       <p><br><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp; Teléfono oficina: (33) 1657 1123
        </p>
     </div>
     <div class="col-md-12">
       <p><br><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Teléfono celular: 33 1174 3529 ó 33 1066 1456
        </p>
     </div>
        
    </div>
  </div>
  <div class="col-md-6">
    
    <form class="form-horizontal" action="/contact-us" method="post">
    <!-- Nombre -->
    <div class="form-group">
    <label for="name" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
        <?php if($fue_enviado) :?>
        <div class="alert alert-success" role="alert">Mensaje enviado correctamente</div>
     <?php endif;?>
     
    </div>
  </div>
    <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nombre:</label>
    <div class="col-sm-10">
        
      <input type="text" class="form-control" id="InputName2" placeholder="Tu nombre" name="nombre">
    </div>
  </div>
  <!-- Email -->
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
  </div>
  <!-- Asunto -->
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Asunto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputAsunto" placeholder="Asunto" name="asunto">
    </div>
  </div>
  <!-- Comentario -->
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Comentario: </label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" name="mensaje"></textarea>
    </div>
  </div>
  <!-- Boton -->
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" style="width:100%">Enviar</button>
    </div>
  </div>
</form>
 
  </div>
</div>