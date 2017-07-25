<?php

namespace AST\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * utilisateurs
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity(repositoryClass="AST\PlatformBundle\Repository\utilisateursRepository")
 */
class utilisateurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, unique=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAbo", type="datetime")
     */
    private $dateAbo;

    /**
     * @var bool
     *
     * @ORM\Column(name="vip", type="boolean")
     */
    private $vip;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return utilisateurs
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return utilisateurs
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return utilisateurs
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set dateAbo
     *
     * @param \DateTime $dateAbo
     *
     * @return utilisateurs
     */
    public function setDateAbo($dateAbo)
    {
        $this->dateAbo = $dateAbo;

        return $this;
    }

    /**
     * Get dateAbo
     *
     * @return \DateTime
     */
    public function getDateAbo()
    {
        return $this->dateAbo;
    }

    /**
     * Set vip
     *
     * @param boolean $vip
     *
     * @return utilisateurs
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return bool
     */
    public function getVip()
    {
        return $this->vip;
    }
}

