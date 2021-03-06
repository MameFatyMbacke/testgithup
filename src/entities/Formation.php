<?php
use Doctrine\ORM\Mapping as ORM;


 /**
  * @ORM\Entity @ORM\Table(name="formation") 
  **/

class Formation{
    /** @ORM\id @ORM\column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\column(type="string") **/
    private $nom;
    /** @ORM\column(type="string") **/
    private $date;
    /** @ORM\column(type="integer") **/
    private $duree;
    /**
    * Many formation have one lieu. This is the owning side.
    * @ORM\ManyToOne(targetEntity="Lieu", inversedBy="formations")
    * @ORM\JoinColumn(name="lieu_id", referencedColumnName="id")
    */
    private $lieu;

    public function __construct(){

    }
    //Pour id
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    //Pour nom
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    //Pour date 
    public function getDate(){
        return $this->date;
    }
    public function setDate($date){
        $this->date = $date;
    }
    //Pour duree
    public function getDuree(){
        return $this->duree;
    }
    public function setDuree($duree){
        $this->duree = $duree;
    }
    //Pour lieu
    public function getLieu(){
        return $this->lieu;
    }
    public function setLieu($lieu){
        $this->lieu = $lieu;
    }
}

?>