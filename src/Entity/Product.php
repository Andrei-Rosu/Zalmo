<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 * @UniqueEntity("title")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     * @Assert\Length(min=3, max=50)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=15, max=65000)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(groups={"insertion"})
     * @Assert\Image(maxSize="2M", minWidth="200", minHeight="200")
     * @var object
     */

    private $image;
    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string")
     */
    private $category;
    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="products")
     * @var User owner
     */

    private $owner;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tag", inversedBy="products", cascade="persist")
     * @var Collection
     */

    private $tags;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_transaction;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Transaction", cascade={"remove"}, mappedBy="product")
     * @var Collection
     */
    private $transactions;


    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->transactions = new ArrayCollection();
    }

    /**
     * @return User
     */

    public function getOwner(): User
    {
        return $this->owner;
    }

    /**
     * @param User $owner
     * @return Product
     */
    public function setOwner(User $owner): Product
    {
        $this->owner = $owner;
        return $this;
    }



    public function getId()
    {
        return $this->id;
    }

    /**
     * @Groups({"searchable"})
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @Groups({"searchable"})
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return Collection
     * @Groups({"searchable"})
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag($tag)
    {
        if ($this->tags->contains($tag)){
            return;
        }
        $this->tags->add($tag);
        $tag->getProducts()->add($this);
    }


    public function setTags(Collection $tags)
    {
        $this->tags = $tags;
        return $this;
    }




    public function getTransactions()
    {
        return $this->transactions;
    }


    public function setTransactions(Collection $transactions): Product
    {
        $this->transactions = $transactions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getDateTransaction()
    {
        return $this->date_transaction;
    }

    /**
     * @param mixed $date_transaction
     * @return Product
     */
    public function setDateTransaction($date_transaction)
    {
        $this->date_transaction = $date_transaction;
        return $this;
    }









}
