<?php


namespace App\Entity;


class Event
{
    private int $id;
    private CategoryEvent $category;
    private \DateTime $begin;
    private \DateTime $end;
    private string $title;
    private string $description;
    private bool $cancel;
    private \DateTime $createdAt;

    public function __construct(CategoryEvent $categoryEvent,object $event)
    {
        $this->id = $event->id;
        $this->category = $categoryEvent;
        $this->begin = new \DateTime($event->begin_at);
        $this->end = new \DateTime($event->end_at);
        $this->title = $event->title;
        $this->description = $event->description;
        $this->cancel = $event->cancel == 1;
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
    public function getBegin(): \DateTime
    {
        return $this->begin;
    }

    /**
     * @return \DateTime
     */
    public function getEnd(): \DateTime
    {
        return $this->end;
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
     * @return bool
     */
    public function isCancel(): bool
    {
        return $this->cancel;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
}