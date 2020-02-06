<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceLineRepository")
 */
class InvoiceLine
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Invoice", mappedBy="invoiceLine")
     */
    private $invoiceid;

    /**
     * @ORM\Column(type="text")
     */
    private $Comment;

    /**
     * @ORM\Column(type="integer")
     */
    private $Amount;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $Quantity;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $TAX;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $Total;

    public function __construct()
    {
        $this->invoiceid = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Invoice[]
     */
    public function getInvoiceid(): Collection
    {
        return $this->invoiceid;
    }

    public function addInvoiceid(Invoice $invoiceid): self
    {
        if (!$this->invoiceid->contains($invoiceid)) {
            $this->invoiceid[] = $invoiceid;
            $invoiceid->setInvoiceLine($this);
        }

        return $this;
    }

    public function removeInvoiceid(Invoice $invoiceid): self
    {
        if ($this->invoiceid->contains($invoiceid)) {
            $this->invoiceid->removeElement($invoiceid);
            // set the owning side to null (unless already changed)
            if ($invoiceid->getInvoiceLine() === $this) {
                $invoiceid->setInvoiceLine(null);
            }
        }

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->Comment;
    }

    public function setComment(string $Comment): self
    {
        $this->Comment = $Comment;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->Amount;
    }

    public function setAmount(int $Amount): self
    {
        $this->Amount = $Amount;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->Quantity;
    }

    public function setQuantity(string $Quantity): self
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    public function getTAX(): ?string
    {
        return $this->TAX;
    }

    public function setTAX(string $TAX): self
    {
        $this->TAX = $TAX;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->Total;
    }

    public function setTotal(string $Total): self
    {
        $this->Total = $Total;

        return $this;
    }
}
