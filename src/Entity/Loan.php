<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\Table;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoanRepository")
 * @Table(indexes={@Index(name="search_idx", columns={"status"})})
 */
class Loan
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_start;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_end;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="loans")
     * @var User
     */
    private $loaner;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="loans")
     * @var Product
     */
    private $product;


    public function getId()
    {
        return $this->id;
    }

    public function getDateStart()
    {
        return $this->date_start;
    }

    public function setDateStart(\DateTimeInterface $date_start): self
    {
        $this->date_start = $date_start;

        return $this;
    }

    public function getDateEnd()
    {
        return $this->date_end;
    }

    public function setDateEnd(?\DateTimeInterface $date_end): self
    {
        $this->date_end = $date_end;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }


    public function getLoaner()
    {
        return $this->loaner;
    }


    public function setLoaner(User $loaner)
    {
        $this->loaner = $loaner;
        return $this;
    }


    public function getProduct()
    {
        return $this->product;
    }


    public function setProduct(Product $product)
    {
        $this->product = $product;
        return $this;
    }


}
