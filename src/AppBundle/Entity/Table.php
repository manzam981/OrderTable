<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/29/16
 * Time: 9:18 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Tables")
 */
class Table
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $seats;

    /**
     * @ORM\ManyToOne(targetEntity="Restaurant", inversedBy="tables")
     * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id")
     */
    private $restaurant;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * @param mixed $seats
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;
    }

    /**
     * @return mixed
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }

    /**
     * @param mixed $restaurant
     */
    public function setRestaurant($restaurant)
    {
        $this->restaurant = $restaurant;
    }


}