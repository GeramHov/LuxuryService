<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity
 */
class Clients
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_type", type="string", length=255, nullable=true)
     */
    private $activityType;

    /**
     * @var string
     *
     * @ORM\Column(name="job_type", type="string", length=255, nullable=true)
     */
    private $jobType;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=255, nullable=true)
     */
    private $contactName;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_email", type="string", length=255, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_tel", type="string", length=255, nullable=true)
     */
    private $contactTel;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255, nullable=true)
     */
    private $notes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getActivityType(): ?string
    {
        return $this->activityType;
    }

    public function setActivityType(string $activityType): self
    {
        $this->activityType = $activityType;

        return $this;
    }

    public function getJobType(): ?string
    {
        return $this->jobType;
    }

    public function setJobType(string $jobType): self
    {
        $this->jobType = $jobType;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    public function setContactName(string $contactName): self
    {
        $this->contactName = $contactName;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    public function getContactTel(): ?string
    {
        return $this->contactTel;
    }

    public function setContactTel(string $contactTel): self
    {
        $this->contactTel = $contactTel;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }


}
