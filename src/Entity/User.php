<?php


namespace App\Entity;


class User
{
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private \DateTime $createdAt;

    public function __construct(object $user)
    {
        $this->id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->createdAt = new \DateTime($user->created_at);
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
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
}