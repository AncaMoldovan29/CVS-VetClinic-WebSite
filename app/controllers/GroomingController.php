<?php

class GroomingController extends AppController
{
   public function __construct(){
    $this->init();
   }

   public function init(){
    session_start();
    if(isset($_SESSION['user'])){
        $data = [];
        $data['title'] = 'Grooming Client';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'grooming.html');;
        $data['secondPart'] = $this->render(APP_PATH.VIEWS.'grooming2.html');
        $data['text'] = '<p class="text-info">Special Shampoos to choose from:

        Tropiclean Oatmeal and Lavender Whitening Shampoo: Gently removes residue that can make white coats look faded or dull, brings out shine and refreshes color creating a radiant glow without adding or depositing color to coat,no bleach, peroxide, ammonia, or alcohol
        Tropiclean Spa Comfort Oatmeal and Kiwi Shampoo: Comfort Shampoo’s rich combination of nourishing body bath and rich vitamins is designed to leave skin and coat feeling cleansed and smooth. The aromatherapy effects of lavender and the soothing effects of hydrolyzed oatmeal combine to relieve stress and impart comfort.
        Tropiclean Aloe and Coconut Shampoo: Gently cleans while maintaining the skin’s natural moisture.. Conditions without coating hair! Rich in Vitamin E.
        Conditioner:
        
        Tropiclean Spa Conditioner: This after-shampoo conditioner with plant extracts and vitamins promotes hair sheen and capillary conditioning. Spa Nourish Vitamin Conditioner utilizes white ginger, botanical moisturizers and warm vanilla to help repair dry damaged hair. Anti-static agents calm hair while botanical emollients strengthen the coat leaving hair incredibly, revitalized, full and manageable.
        Blueberry Facial: lightly foaming facial cleanser. It has natural exfoliating activity and softly hydrates. The refreshing blend of vanilla and blueberry effectively removes dirt and tear stains, and will not sting eyes. Great for all skin types and all ages of pets.
        
        Nail Buffing with Dremel: Shorten and smooth your dog’s nails with the use of an electric dremel
        
        Toothbrushing:  Your pet’s teeth will be brushed with a special pet toothbrush using enzymatic vanilla mint flavored toothpaste and will go home with their very own toothbrush.
        
        Paw Balm:  Heals dry, chapped, cracked, crusty or bleeding dog noses and softens paws, ORGANIC, all natural, vegan balm made in the USA from carefully selected and crafted ingredients,Fragrance FREE (because dogs do not like scents like we do)</p>';
        echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
    }
    else {
        $data = [];
        $data['title'] = 'Grooming';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'grooming.html');;
        $data['secondPart'] = $this->render(APP_PATH.VIEWS.'grooming2.html');
        $data['text'] = '<p class="text-info">Special Shampoos to choose from:

        Tropiclean Oatmeal and Lavender Whitening Shampoo: Gently removes residue that can make white coats look faded or dull, brings out shine and refreshes color creating a radiant glow without adding or depositing color to coat,no bleach, peroxide, ammonia, or alcohol
        Tropiclean Spa Comfort Oatmeal and Kiwi Shampoo: Comfort Shampoo’s rich combination of nourishing body bath and rich vitamins is designed to leave skin and coat feeling cleansed and smooth. The aromatherapy effects of lavender and the soothing effects of hydrolyzed oatmeal combine to relieve stress and impart comfort.
        Tropiclean Aloe and Coconut Shampoo: Gently cleans while maintaining the skin’s natural moisture.. Conditions without coating hair! Rich in Vitamin E.
        Conditioner:
        
        Tropiclean Spa Conditioner: This after-shampoo conditioner with plant extracts and vitamins promotes hair sheen and capillary conditioning. Spa Nourish Vitamin Conditioner utilizes white ginger, botanical moisturizers and warm vanilla to help repair dry damaged hair. Anti-static agents calm hair while botanical emollients strengthen the coat leaving hair incredibly, revitalized, full and manageable.
        Blueberry Facial: lightly foaming facial cleanser. It has natural exfoliating activity and softly hydrates. The refreshing blend of vanilla and blueberry effectively removes dirt and tear stains, and will not sting eyes. Great for all skin types and all ages of pets.
        
        Nail Buffing with Dremel: Shorten and smooth your dog’s nails with the use of an electric dremel
        
        Toothbrushing:  Your pet’s teeth will be brushed with a special pet toothbrush using enzymatic vanilla mint flavored toothpaste and will go home with their very own toothbrush.
        
        Paw Balm:  Heals dry, chapped, cracked, crusty or bleeding dog noses and softens paws, ORGANIC, all natural, vegan balm made in the USA from carefully selected and crafted ingredients,Fragrance FREE (because dogs do not like scents like we do)</p>';
        echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
    }
}
}