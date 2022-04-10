<?php

class ContactController extends AppController
{
   public function __construct(){
    $this->init();
   }

   public function init(){
    session_start();
    if(isset($_SESSION['user'])){
        $data = [];
        $data['title'] = 'Contact Client';
        $data['firstPart'] = '
        <div class="m-auto col-5 text-info mb-5">
        <br>
        <br>
        <br>
        <h2>CONTACT:</h2>
        <h3>Strada Vasile Lupu nr.23 ,Cluj-Napoca ,Cluj, Romania.</h3>
        <h3>Tel:0745561008</h3>
        <p>centruvetspecialitate@cvs.ro</p>
        <br>

        </div>
        
        <div class="container col-4 mt-5">
        
        <table class="table table-info table-striped">
            <thead>
              <tr>
               
                <th scope="col">Luni-Vineri</th>
                <th scope="col">Sambata-Duminica</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                
                <td>09:00-21:00</td>
                <td>09:00-16:00</td>
                
              </tr>
             
              
            </tbody>
          </table>
          <br>
        <br>
        <br>
        </div>
        
        <div class="form container mt-5">
        <br>
        <br>
        <br>
        <fieldset>
            <legend class="text-info">Trimite un mesaj:</legend>
    <div class=" mb-3">
      <form action="?page=sendmessage" method="POST">
        <label for="emailm" class="form-label text-info">Email address</label>
        <input type="email" class="form-control" id="emailm" placeholder="nume@example.com" name="emailm">
      </div>
      <div class="mb-3">
        <label for="message" class="form-label text-info">Ce probleme prezinta animalul dumneavoastra?</label>
        <textarea class="form-control" id="message" rows="3" name="message"></textarea>
      </div>
      <button type="submit" class="btn btn-info">Trimite</button>
    </form>
      </fieldset>
    </div>';
        $data['secondPart'] = '';
        $data['text'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.9168924406245!2d23.607015415905806!3d46.76653457913791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490c3a4e5a1ded%3A0x96b8f8101ed49534!2sStrada%20Vasile%20Lupu%2023%2C%20Cluj-Napoca%20400000!5e0!3m2!1sro!2sro!4v1646321023638!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
    
        echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
    }
    else {
        $data = [];
        $data['title'] = 'Contact ';
        $data['firstPart'] = '
        <div class="m-auto col-5 text-info mb-5">
        <br>
        <br>
        <br>
        <h2>CONTACT:</h2>
        <h3>Strada Vasile Lupu nr.23 ,Cluj-Napoca ,Cluj, Romania.</h3>
        <h3>Tel:0745561008</h3>
        <p>centruvetspecialitate@cvs.ro</p>
        <br>

        </div>
        
        <div class="container col-4 mt-5">
        
        <table class="table table-info table-striped">
            <thead>
              <tr>
               
                <th scope="col">Luni-Vineri</th>
                <th scope="col">Sambata-Duminica</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                
                <td>09:00-21:00</td>
                <td>09:00-16:00</td>
                
              </tr>
             
              
            </tbody>
          </table>
          <br>
        <br>
        <br>
        </div>
        
        <div class="form container mt-5 col-5">
        <br>
        <br>
        <br>
        <fieldset>
            <legend class="text-info">Trimite un mesaj:</legend>
    <div class=" mb-3">
      <form action="?page=sendmessage" method="POST">
        <label for="emailm" class="form-label text-info">Email address</label>
        <input type="email" class="form-control" id="emailm" placeholder="nume@example.com" name="emailm">
      </div>
      <div class="mb-3">
        <label for="message" class="form-label text-info">Mesaj:</label>
        <textarea class="form-control" id="message" rows="3" name="message"></textarea>
      </div>
      <button type="submit" class="btn btn-info">Trimite</button>
    </form>
      </fieldset>
    </div>';
        $data['secondPart'] = '';
        $data['text'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.9168924406245!2d23.607015415905806!3d46.76653457913791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490c3a4e5a1ded%3A0x96b8f8101ed49534!2sStrada%20Vasile%20Lupu%2023%2C%20Cluj-Napoca%20400000!5e0!3m2!1sro!2sro!4v1646321023638!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
       
        echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
    }
}
}