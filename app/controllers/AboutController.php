<?php

class AboutController extends AppController
{
   public function __construct(){
    $this->init();
   }

   public function init(){
    session_start();
    if(isset($_SESSION['user'])){
        $data = [];
        $data['title'] = 'Despre noi Client';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'team.html');
        $data['text'] = '';
        $data['secondPart'] = '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo reprehenderit hic suscipit aliquam veritatis iste, sunt ut, ratione molestiae temporibus inventore consequuntur, nostrum corrupti at quae perspiciatis eligendi dolor maiores.

        Explicabo, voluptatum sed aut temporibus recusandae officia doloribus, nam ullam dignissimos molestias iure aliquam enim a sunt amet! Similique alias tenetur nulla incidunt asperiores a ut voluptatum molestias doloribus possimus?
        
        Maxime, ipsa aspernatur eveniet, explicabo assumenda nemo accusantium, id maiores reprehenderit iste natus? Soluta illum perspiciatis adipisci, rem earum dolore quasi, recusandae voluptas repudiandae saepe voluptate maxime quibusdam excepturi architecto?
        
        Soluta minima assumenda in impedit! Ullam quae et omnis aliquam odio, ipsam, expedita, sit nihil pariatur eligendi ipsum sint quisquam magni velit. Dolores placeat explicabo enim nostrum incidunt, voluptates consequuntur.</p>';
        echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
    }
    else {
        $data = [];
        $data['title'] = 'Despre noi';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'team.html');
        $data['text'] = '';
        $data['secondPart'] = '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo reprehenderit hic suscipit aliquam veritatis iste, sunt ut, ratione molestiae temporibus inventore consequuntur, nostrum corrupti at quae perspiciatis eligendi dolor maiores.

        Explicabo, voluptatum sed aut temporibus recusandae officia doloribus, nam ullam dignissimos molestias iure aliquam enim a sunt amet! Similique alias tenetur nulla incidunt asperiores a ut voluptatum molestias doloribus possimus?
        
        Maxime, ipsa aspernatur eveniet, explicabo assumenda nemo accusantium, id maiores reprehenderit iste natus? Soluta illum perspiciatis adipisci, rem earum dolore quasi, recusandae voluptas repudiandae saepe voluptate maxime quibusdam excepturi architecto?
        
        Soluta minima assumenda in impedit! Ullam quae et omnis aliquam odio, ipsam, expedita, sit nihil pariatur eligendi ipsum sint quisquam magni velit. Dolores placeat explicabo enim nostrum incidunt, voluptates consequuntur.</p>';
        echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
    }
}
}