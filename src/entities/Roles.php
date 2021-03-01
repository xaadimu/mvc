<?php
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;
   
   /**
   * @ORM\Entity @ORM\Table(name="roles")  **/

   class Roles 
   {
    /**
   * @ORM\Id @ORM\Column(type="decimal") @ORM\GeneratedValue  **/

   private $id;
   /** @ORM\Column(type="string")**/
   private $nom;
       /**
        * Many Roles have Many Users.
        * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
        */
   private $users;
     

   public function __construct()
   {
 $this->users = new ArrayCollection();
   
   }
   public function getID()
   {
   return $this->id;
   }
    public function setId($id)
   {
      $this->id = $id; 
   }
   public function getNom()
   {
   return $this->nom;
   }
    public function setNom($nom)
   {
      $this->nom = $nom; 
   }

   public function getUsers()
   {
   return $this->users;
   }
    public function setUsers($users)
   {
      $this->users = $users; 
   }
   
   }








?>