<?php

namespace App\Entity;

use App\Repository\FotografieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FotografieRepository::class)
 */
class Fotografie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

   /** 
    * @ORM\Column(type="text", length=255)
    */
    private $imie;
}
