<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRepository")
 */
class Invoice
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $InvoiceId;

    /**
     * @ORM\Column(type="date")
     */
    private $InvoiceDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $InvoiceNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $ClientId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvoiceId(): ?int
    {
        return $this->InvoiceId;
    }

    public function setInvoiceId(int $InvoiceId): self
    {
        $this->InvoiceId = $InvoiceId;

        return $this;
    }

    public function getInvoiceDate(): ?\DateTimeInterface
    {
        return $this->InvoiceDate;
    }

    public function setInvoiceDate(\DateTimeInterface $InvoiceDate): self
    {
        $this->InvoiceDate = $InvoiceDate;

        return $this;
    }

    public function getInvoiceNumber(): ?int
    {
        return $this->InvoiceNumber;
    }

    public function setInvoiceNumber(int $InvoiceNumber): self
    {
        $this->InvoiceNumber = $InvoiceNumber;

        return $this;
    }

    public function getClientId(): ?int
    {
        return $this->ClientId;
    }

    public function setClientId(int $ClientId): self
    {
        $this->ClientId = $ClientId;

        return $this;
    }
}
