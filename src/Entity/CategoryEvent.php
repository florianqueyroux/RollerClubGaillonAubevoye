<?php


namespace App\Entity;


class CategoryEvent
{
    private int $id;
    private string $name;
    private \DateTime $createdAt;

    public function __construct(object $category)
    {
        $this->id = $category->id;
        $this->name = $category->name;
        $this->createdAt = new \DateTime($category->created_at);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
}