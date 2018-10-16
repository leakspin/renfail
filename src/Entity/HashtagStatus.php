<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HashtagStatusRepository")
 */
class HashtagStatus
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hashtag;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $last_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $date_tweet;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $update_time;

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

    public function getHashtag(): ?string
    {
        return $this->hashtag;
    }

    public function setHashtag(string $hashtag): self
    {
        $this->hashtag = $hashtag;

        return $this;
    }

    public function getLastId(): ?int
    {
        return $this->last_id;
    }

    public function setLastId(?int $last_id): self
    {
        $this->last_id = $last_id;

        return $this;
    }

    public function getDateTweet(): ?string
    {
        return $this->date_tweet;
    }

    public function setDateTweet(?string $date_tweet): self
    {
        $this->date_tweet = $date_tweet;

        return $this;
    }

    public function getUpdateTime(): ?\DateTimeInterface
    {
        return $this->update_time;
    }

    public function setUpdateTime(?\DateTimeInterface $update_time): self
    {
        $this->update_time = $update_time;

        return $this;
    }
}