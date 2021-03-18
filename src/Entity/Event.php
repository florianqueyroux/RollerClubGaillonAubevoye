<?php


namespace App\Entity;


class Event
{
    private int $id;
    private CategoryEvent $category;
    private \DateTime $date;
    private string $title;
    private string $description;
    private \DateTime $createdAt;

    public function __construct(CategoryEvent $categoryEvent,object $event)
    {
        $this->id = $event->id;
        $this->category = $categoryEvent;
        $this->date = new \DateTime($event->date_at);
        $this->title = $event->title;
        $this->description = $event->description;
        $this->createdAt = new \DateTime($event->created_at);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return CategoryEvent
     */
    public function getCategory(): CategoryEvent
    {
        return $this->category;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
}